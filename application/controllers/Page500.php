<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page500 extends MY_Controller
{
   public function index()
   {
      $this->load->view('coreui' . DIRECTORY_SEPARATOR . 'menu' . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . '500_view');
   }
}
