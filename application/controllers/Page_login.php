<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page_login extends MY_Controller
{
   public function index()
   {
      $this->load->view('coreui' . DIRECTORY_SEPARATOR . 'menu' . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'page_login_view');
   }
}
