<?php

class Participate extends Controller
{
    public function __construct()
    {
        $this->participateModel = $this->model("Participatee");
    }

    public function index()
    {
        $data = [
          "title" => "if i knew then",
        ];
  
        $this->view("wisdom/index", $data);   
    }

    public function start()
    {
      //check for post
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //input validation is done by html5
        //data is sanitized though
        $data = [
          'title' => "Alumni - Participate",
          'participate-category' => htmlspecialchars($_POST['participate-category']),
          'uname' => htmlspecialchars($_POST['uname']),
          'institution' => htmlspecialchars($_POST['institution']),
          'position' => htmlspecialchars($_POST['position']),
          'advice-' => htmlspecialchars($_POST['advice-']),
          'user_ip'=> get_ip_address(),
          'date_created'=>'',
          'time_created'=>'',
        ];

        if(empty($data['participate-category']) || empty($data['uname']) || empty($data['institution']) || empty($data['position']) || empty($data['advice-'])){
          die('please fill in all values in the form');
        }
        else{
          //check if user has entered data b4
          //if so limit to only 2 posts per day
          //or create new data
          $time = time();
          date_default_timezone_get();
          $data['date_created'] = date("Y-m-d", $time);
          $data['time_created'] = date('h:i:sA O', $time);
          
          $row = $this->participateModel->VerifyTbl();

          if($row->num_rows  > 0)
          {
            //check if user has data
            $user = $this->participateModel->VerifyUserInput($data['uname']);

            if($user->num_rows > 0)
            {
              //check if limit is exceeded
              $limit = $this->participateModel->checkAdviceLimit($data['uname'], date('Y-m-d', $time));

              if($limit['post_count'] > 1)
              {
                //no more entries
                flash('post-fail', 'you already have at least 2 entries for the day, please try again after 24 hours', 'alert_fail');
                redirect('wisdom/postFail');
              }
              else {
                redirect('participate/confirm/'.htmlspecialchars($data['participate-category']).'/'.htmlspecialchars($data['uname']).'/'.htmlspecialchars($data['institution']).'/'.htmlspecialchars($data['position']).'/'.htmlspecialchars($data['advice-']).'/'.htmlspecialchars($data['user_ip']).'/'.htmlspecialchars($data['date_created']).'/'.htmlspecialchars($data['time_created']).'');
                //update their entries, add new entry
                //$this->participateModel->saveAdvice($data);
              }
            }
            else{
              redirect('participate/confirm/'.htmlspecialchars($data['participate-category']).'/'.htmlspecialchars($data['uname']).'/'.htmlspecialchars($data['institution']).'/'.htmlspecialchars($data['position']).'/'.htmlspecialchars($data['advice-']).'/'.htmlspecialchars($data['user_ip']).'/'.htmlspecialchars($data['date_created']).'/'.htmlspecialchars($data['time_created']).'');
              //first time entry
              //$this->participateModel->saveAdvice($data);
            }
          }
          else {
            redirect('participate/confirm/'.htmlspecialchars($data['participate-category']).'/'.htmlspecialchars($data['uname']).'/'.htmlspecialchars($data['institution']).'/'.htmlspecialchars($data['position']).'/'.htmlspecialchars($data['advice-']).'/'.htmlspecialchars($data['user_ip']).'/'.htmlspecialchars($data['date_created']).'/'.htmlspecialchars($data['time_created']).'');
            //first time entry
            //$this->participateModel->saveAdvice($data);
          }
        }

        $this->view('participate/start', $data);
      }
      else {
        //initialize data
        $data = [
          'title' => "Alumni - Participate",
          'participate-category' => "",
          'uname' => "",
          'institution' => "",
          'position' => "",
          'advice-' => "",
        ];

        $this->view('participate/start', $data);
      }
      $data = [
        'title' => "Alumni - Participate"
      ];
  
      $this->view('participate/start', $data);
    }

    public function confirm($category, $name, $institution, $position, $advice, $ip, $date, $time)
    {

      if(isset($category, $name, $institution, $position, $advice, $ip, $date, $time))
      {
        $data = [
          "title" => "if i knew then",
          'participate-category' => $category,
          'uname' => $name,
          'institution' => $institution,
          'position' => $position,
          'advice-' => $advice,
          'user_ip'=> $ip,
          'date_created'=> $date,
          'time_created'=> $time,
        ];

        $_SESSION['USER_POST'] = $data;
  
        $this->view("participate/confirm", $data); 

      }
      else
      {
        http_response_code(404);
        include('../app/404.php');
        die();
      }  
    }

    public function confirmp()
    {
      if(isset($_POST['submit-false']))
      {
        redirect('participate/start');
      }else{
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //input validation is done by html5
        //data is sanitized though
        $data =   $_SESSION['USER_POST'];

        $row = $this->participateModel->VerifyTbl();

        if($row->num_rows  > 0)
        {
          //check if user has data
          $user = $this->participateModel->VerifyUserInput($data['uname']);

          if($user->num_rows > 0)
          {
            $time = time();
            //check if limit is exceeded
            $limit = $this->participateModel->checkAdviceLimit($data['uname'], date('Y-m-d', $time));

            if($limit['post_count'] > 1)
            {
              //no more entries
              flash('post-fail', 'you already have at least 2 entries for the day, please try again after 24 hours', 'alert_fail');
              redirect('wisdom/postFail');
            }
            else {
              redirect('participate/confirm/'.htmlspecialchars($data['participate-category']).'/'.htmlspecialchars($data['uname']).'/'.htmlspecialchars($data['institution']).'/'.htmlspecialchars($data['position']).'/'.htmlspecialchars($data['advice-']).'/'.htmlspecialchars($data['user_ip']).'/'.htmlspecialchars($data['date_created']).'/'.htmlspecialchars($data['time_created']).'');
              //update their entries, add new entry
              $this->participateModel->saveAdvice($data);
            }
          }
          else{
            redirect('participate/confirm/'.htmlspecialchars($data['participate-category']).'/'.htmlspecialchars($data['uname']).'/'.htmlspecialchars($data['institution']).'/'.htmlspecialchars($data['position']).'/'.htmlspecialchars($data['advice-']).'/'.htmlspecialchars($data['user_ip']).'/'.htmlspecialchars($data['date_created']).'/'.htmlspecialchars($data['time_created']).'');
            //first time entry
            $this->participateModel->saveAdvice($data);
          }
        }
        else {
          redirect('participate/confirm/'.htmlspecialchars($data['participate-category']).'/'.htmlspecialchars($data['uname']).'/'.htmlspecialchars($data['institution']).'/'.htmlspecialchars($data['position']).'/'.htmlspecialchars($data['advice-']).'/'.htmlspecialchars($data['user_ip']).'/'.htmlspecialchars($data['date_created']).'/'.htmlspecialchars($data['time_created']).'');
          //first time entry
          $this->participateModel->saveAdvice($data);
        }
      }
    }
}