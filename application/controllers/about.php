<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class About extends CI_Controller
{
  public function biodata()
  {
    $this->load->view('about/biodata');
  }

  public function kharisma()
  {
    $this->load->view('about/tentangkharisma');
  }

  public function desainweb()
  {
    $this->load->view('about/desainweb');
  }

  public function list()
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
