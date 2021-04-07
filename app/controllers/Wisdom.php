<?php

class Wisdom extends Controller
{
  public function __construct()
  {
    $this->wisdomModel = $this->model("Wisdomm");
    $this->alumniModel = $this->model("Alumnii");
  }

  public function index()
  {
    $alumni = $this->alumniModel->getAllAlumni();
    
      $data = [
        "title" => "if i knew then",
        'alumni'=>$alumni
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

  public function postSuccess()
  {
    $data = [
      "title" => "Success - if i knew then",
    ];

    $this->view("wisdom/postSuccess", $data); 
  }
  public function postFail()
  {
    $data = [
      "title" => "Failed - if i knew then",
    ];

    $this->view("wisdom/postFail", $data); 
  }

  public function family_friends()
  {
    $family = $this->wisdomModel->getFamilyAdvice();
    
    $data = [
      "title" => "Family and Friends - if i knew then",
      'row' => $family
    ];

    $this->view("wisdom/family_friends", $data); 
  }

  public function careers()
  {
    $careers = $this->wisdomModel->getCareerAdvice();

    $data = [
      "title" => "Careers - if i knew then",
      'row' => $careers
    ];

    $this->view("wisdom/careers", $data); 
  }

  public function success()
  {
    $success = $this->wisdomModel->getSuccessAdvice();

    $data = [
      "title" => "Success - if i knew then",
      'row' => $success
    ];

    $this->view("wisdom/success", $data); 
  }

  public function leadership()
  {
    $leadership = $this->wisdomModel->getLeadershipAdvice();

    $data = [
      "title" => "Leadership - if i knew then",
      'row' => $leadership
    ];

    $this->view("wisdom/leadership", $data); 
  }

  public function wealth()
  {
    $wealth = $this->wisdomModel->getWealthAdvice();

    $data = [
      "title" => "Wealth - if i knew then",
      'row' => $wealth
    ];

    $this->view("wisdom/wealth", $data); 
  }

  public function age()
  {
    $age = $this->wisdomModel->getAgeAdvice();

    $data = [
      "title" => "Age - if i knew then",
      'row' => $age
    ];

    $this->view("wisdom/age", $data); 
  }

  public function life_lessons()
  {
    $lessons = $this->wisdomModel->getLessonsAdvice();

    $data = [
      "title" => "Life lessons - if i knew then",
      'row' => $lessons
    ];

    $this->view("wisdom/life_lessons", $data); 
  }

  public function turning_points()
  {
    $turning = $this->wisdomModel->getTurningPointsAdvice();

    $data = [
      "title" => "Turning points - if i knew then",
      'row' => $turning
    ];

    $this->view("wisdom/turning_points", $data); 
  }

  public function spirituality()
  {
    $spirituality = $this->wisdomModel->getSpiritualityAdvice();

    $data = [
      "title" => "Spirituality - if i knew then",
      'row' => $spirituality
    ];

    $this->view("wisdom/spirituality", $data); 
  }

 
}