<?php

class Alumnii
{

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllAlumni()
    {
        $result = getAllAlumni('ca_advice', $this->db);

        $row = $result->get_result();

        try {
            return $row;
        } catch (\Throwable $th) {
            return false;
        }
    }
    
}