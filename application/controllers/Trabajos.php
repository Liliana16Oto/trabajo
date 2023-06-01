<?php

class Trabajos extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    //renderizar las vistas
  }
    public function dama()
  {
    $this->load->view('header');
    $this->load->view('trabajos/dama');
    $this->load->view('footer');
  }
    public function maquillaje()
    {
      $this->load->view('header');
      $this->load->view('trabajos/maquillaje');
      $this->load->view('footer');
    }
}

 ?>
