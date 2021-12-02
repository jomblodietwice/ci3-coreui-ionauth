<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page_register extends MY_Controller
{
   public function index()
   {
      $this->load->view('coreui' . DIRECTORY_SEPARATOR . 'menu' . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'page_register_view');
   }
}
