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
}