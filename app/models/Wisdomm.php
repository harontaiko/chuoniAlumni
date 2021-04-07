<?php
class Wisdomm{

    private $db;

    public function __construct()
    {
      $this->db = new Database();
    }

    public function getFamilyAdvice()
    {
        $result = getThisAdvice('ca_advice', 'family_friends', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function getCareerAdvice()
    {
        $result = getThisAdvice('ca_advice', 'careers', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function getSuccessAdvice()
    {
        $result = getThisAdvice('ca_advice', 'success', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function getLeadershipAdvice()
    {
        $result = getThisAdvice('ca_advice', 'leadership', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function getWealthAdvice()
    {
        $result = getThisAdvice('ca_advice', 'wealth', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function getAgeAdvice()
    {
        $result = getThisAdvice('ca_advice', 'growing_old', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function getLessonsAdvice()
    {
        $result = getThisAdvice('ca_advice', 'life_lessons', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function getTurningPointsAdvice()
    {
        $result = getThisAdvice('ca_advice', 'turning_points', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function getSpiritualityAdvice()
    {
        $result = getThisAdvice('ca_advice', 'spirituality', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (\Throwable $th) {
            return false;
        }
    }


}