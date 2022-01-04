<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Popovers extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();

      if (!$this->ion_auth->logged_in()) {
         $this->session->set_userdata('previous_url', current_url());
         // redirect them to the login page
         redirect('Users' . DIRECTORY_SEPARATOR . 'login', 'refresh');
      }
   }

   public function index()
   {
      $this->data['loadMyJS'] = ['js/popovers.js'];
      $this->render('menu' . DIRECTORY_SEPARATOR . 'base' . DIRECTORY_SEPARATOR . 'popovers_view');
   }
}
