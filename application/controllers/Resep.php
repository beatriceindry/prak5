<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Resep extends CI_Controller
{

  public function index()
  {
    $this->load->view('about/list');
  }

  public function pallubasa()
  {
    $this->load->view('about/pallubasa');
  }

  public function kapurung()
  {
    $this->load->view('about/kapurung');
  }

  public function barobbo()
  {
    $this->load->view('about/barobbo');
  }

  public function sopsaudara()
  {
    $this->load->view('about/sopsaudara');
  }

  public function cotomakassar()
  {
    $this->load->view('about/cotomakassar');
  }
}
