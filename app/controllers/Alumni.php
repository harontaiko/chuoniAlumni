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
      $data = [
        'title' => "Alumni - if i knew then"
      ];
  
      $this->view('alumni/list', $data);
    }
}