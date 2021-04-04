<?php

class Policy extends Controller
{

    public function __construct()
    {
        $this->policyModel = $this->model('Policyy');
    }

    public function index()
    {
        $data = [
          "title" => "if i knew then",
        ];
  
        $this->view("wisdom/index", $data);   
    }

    
    public function terms()
    {
      $data = [
        'title' => "if i knew then - Terms of use"
      ];
  
      $this->view('policy/terms', $data);
    }

}