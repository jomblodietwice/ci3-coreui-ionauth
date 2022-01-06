<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Widgets extends MY_Controller
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
      $this->data['loadMyJS'] = [
         'vendors/chart.js/js/chart.min.js',
         'vendors/@coreui/chartjs/js/coreui-chartjs.js',
         'vendors/@coreui/utils/js/coreui-utils.js',
         'js/widgets.js'
      ];
      $this->render('menu' . DIRECTORY_SEPARATOR . 'widgets_view');
   }
}
