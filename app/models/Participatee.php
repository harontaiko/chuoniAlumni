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
        
        $fields = array('advice_category', 'advice_text', 'date_created', 'time_created', 'owner_name', 'owner_institution', 'owner_ip');

        $placeholders = array('?', '?', '?', '?', '?', '?', '?');

        $binders= "sssssss";

        $values = array($data['participate-category'], $data['advice-'], $data['date_created'], $data['time_created'], $data['uname'], $data['institution'], $data['user_ip']);


        $fieldsInfo = array('owner_advice_count', 'owner_name');

        $placeholdersInfo = array('?', '?');

        $bindersInfo = "ss";

        $valuesInfo = array(1, $data['uname']);
        //copy vals to user info
        $result = verifyThisUserInfo('ca_adviceowner', $this->db, $data['uname']);

        $row = $result->get_result();

        if($row->num_rows > 0)
        {
            
            //do not copy data, increment advice count
            while($num = $row->fetc_assoc())
            {
                $existingCount = $num['owner_advice_count'];
            }

            $query = 'UPDATE ca_adviceowner SET owner_advice_count=? WHERE owner_name=?';

            $bindersUpdate = "ss";

            $valuesUpdate = array(($existingCount + 1), $data['uname']);
            
            try {
                Update($query, $bindersUpdate, $valuesUpdate, 'ca_adviceowner', $this->db); 
                Insert($fields, $placeholders, $binders, $values, 'ca_advice', $this->db);
                flash('post-pass', 'post was successfully saved, it will be reviewed and posted if appropriate');
                unset($_SESSION['USER_ADVICE']);
                redirect('wisdom/postSuccess');
                return true;
            } catch (Error $e) {
                return false;
            }

            
        }
        else {
            //copy data and set count to 1
            try {
                Insert($fieldsInfo, $placeholdersInfo, $bindersInfo, $valuesInfo, 'ca_adviceowner', $this->db);
                Insert($fields, $placeholders, $binders, $values, 'ca_advice', $this->db);
                flash('post-pass', 'post was successfully saved, it will be reviewed and posted if appropriate');
                unset($_SESSION['USER_ADVICE']);
                redirect('wisdom/postSuccess');
                return true;
            } catch (Error $e) {
                return false;
            }
        }

    }


}