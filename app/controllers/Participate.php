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
      $data = [
        'title' => "Alumni - Participate"
      ];
  
      $this->view('participate/start', $data);
    }
}