<?php

class Wisdom extends Controller
{
  public function __construct()
  {
    $this->wisdomModel = $this->model("Wisdomm");
  }

  public function index()
  {
      $data = [
        "title" => "if i knew then",
      ];

      $this->view("wisdom/index", $data);   
  }

  public function chapters()
  {
    $data = [
      "title" => "Categories - if i knew then",
    ];

    $this->view("wisdom/chapters", $data); 
  }

  public function about()
  {
    $data = [
      "title" => "About - if i knew then",
    ];

    $this->view("wisdom/about", $data); 
  }

  public function contact()
  {
    $data = [
      "title" => "Contact - if i knew then",
    ];

    $this->view("wisdom/contact", $data); 
  }

 
}