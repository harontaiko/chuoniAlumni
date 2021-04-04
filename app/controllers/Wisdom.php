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

  public function family_friends()
  {
    $data = [
      "title" => "Family and Friends - if i knew then",
    ];

    $this->view("wisdom/family_friends", $data); 
  }

  public function careers()
  {
    $data = [
      "title" => "Careers - if i knew then",
    ];

    $this->view("wisdom/careers", $data); 
  }

  public function success()
  {
    $data = [
      "title" => "Success - if i knew then",
    ];

    $this->view("wisdom/success", $data); 
  }

  public function leadership()
  {
    $data = [
      "title" => "Leadership - if i knew then",
    ];

    $this->view("wisdom/leadership", $data); 
  }

  public function wealth()
  {
    $data = [
      "title" => "Wealth - if i knew then",
    ];

    $this->view("wisdom/wealth", $data); 
  }

  public function age()
  {
    $data = [
      "title" => "Age - if i knew then",
    ];

    $this->view("wisdom/age", $data); 
  }

  public function life_lessons()
  {
    $data = [
      "title" => "Life lessons - if i knew then",
    ];

    $this->view("wisdom/life_lessons", $data); 
  }

  public function turning_points()
  {
    $data = [
      "title" => "Turning points - if i knew then",
    ];

    $this->view("wisdom/turning_points", $data); 
  }

  public function spirituality()
  {
    $data = [
      "title" => "Spirituality - if i knew then",
    ];

    $this->view("wisdom/spirituality", $data); 
  }

 
}