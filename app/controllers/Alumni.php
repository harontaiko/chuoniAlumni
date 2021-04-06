<?php

class Alumni extends Controller
{

    public function __construct()
    {
      $this->alumniModel = $this->model("Alumnii");
    }

    public function index()
    {
        $data = [
          "title" => "if i knew then",
        ];
  
        $this->view("wisdom/index", $data);   
    }

    public function list()
    {
      $alumni = $this->alumniModel->getAllAlumni();

        $data = [
          'title' => "Alumni - if i knew then",
          'alumni'=>$alumni
        ];
        
        $this->view('alumni/list', $data);
   
    }
}