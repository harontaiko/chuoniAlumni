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
      if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['participate-submit']) && isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
      {

        $secretAPIkey = '6LdB8akaAAAAANGNiqCLiQ5V_y0Nb7ySQYzqEHTy';

        // reCAPTCHA response verification
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretAPIkey.'&response='.$_POST['g-recaptcha-response']);


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
          'captcha-err'=>''
        ];

        $response = json_decode($verifyResponse);
        if($response->success){
          //continue
        } else {
          //
          die('invalid captcha data');
        }

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

          $_SESSION['USER_ADVICE'] = $data;
          
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
              
                redirect('participate/confirm/');
                //update their entries, add new entry
                //$this->participateModel->saveAdvice($data);
              }
            }
            else{
              redirect('participate/confirm/');
              //first time entry
              //$this->participateModel->saveAdvice($data);
            }
          }
          else {
            redirect('participate/confirm/');
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
          'captcha-err'=>'please check the captcha box'
        ];

        $this->view('participate/start', $data);
      }
      $data = [
        'title' => "Alumni - Participate"
      ];
  
      $this->view('participate/start', $data);
    }

    public function confirm()
    {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      //input validation is done by html5
      //data is sanitized though
      $data = $_SESSION['USER_ADVICE'];

      if(isset($data))
      {
        $data = [
          "title" => "if i knew then",
          'participate-category' => $data['participate-category'],
          'uname' => $data['uname'],
          'institution' => $data['institution'],
          'position' => $data['position'],
          'advice-' => $data['advice-'],
          'user_ip'=> $data['user_ip'],
          'date_created'=> $data['date_created'],
          'time_created'=> $data['time_created'],
        ];

        $_SESSION['USER_ADVICE'] = $data;
  
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
        $data = $_SESSION['USER_ADVICE'];

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
              print_r($data);
              $this->participateModel->saveAdvice($data);
            }
          }
          else{
            //first time entry
            print_r($data);
            $this->participateModel->saveAdvice($data);
          }
        }
        else {
          redirect('participate/confirm');
          //first time entry
          $this->participateModel->saveAdvice($data);
        }
      }
    }
}