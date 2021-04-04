<?php

class Participate extends Controller
{
    public function __construct()
    {
        $this->participateModel = $this->model("Participatee");
    }

    public function start()
    {
      $data = [
        'title' => "Alumni - Participate"
      ];
  
      $this->view('participate/start', $data);
    }
}