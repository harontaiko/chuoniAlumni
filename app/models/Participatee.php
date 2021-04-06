<?php

class Participatee
{
    private $db;

    public function __construct()
    {
      $this->db = new Database();
    }

    public function VerifyUserInput($username)
    {
        $result = verifyThisUser('ca_advice', $this->db, $username);

        $row = $result->get_result(); 

        try {
            return $row;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function VerifyTbl()
    {
        $result = CheckAdviceTbl('ca_advice', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function checkAdviceLimit($username, $currentdate)
    {
        $result = checkLimit($username, 'ca_advice', $currentdate, $this->db);

        $row = $result->get_result();

        try {
            return $row->fetch_assoc();
        } catch (\Throwable $th) {
            return false;
        }
    }



    public function saveAdvice($data)
    {
        
        $fields = array('advice_category', 'advice_text', 'date_created', 'time_created', 'owner_name', 'owner_ip');

        $placeholders = array('?', '?', '?', '?', '?', '?');

        $binders= "ssssss";

        $values = array($data['participate-category'], $data['advice-'], $data['date_created'], $data['time_created'], $data['uname'], $data['user_ip']);

        try {
            Insert($fields, $placeholders, $binders, $values, 'ca_advice', $this->db);
            flash('post-pass', 'post was successfully saved, it will be reviewed and posted if appropriate');
            unset($_SESSION['USER_POST']);
            redirect('wisdom/postSuccess');
            return true;
        } catch (Error $e) {
            return false;
        }
    }


}