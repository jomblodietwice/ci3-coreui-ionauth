<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Charts extends MY_Controller
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
         'js/charts.js'
      ];

      $this->data['loadMyCSS']  = ['vendors/@coreui/chartjs/css/coreui-chartjs.css'];
      $this->render('menu' . DIRECTORY_SEPARATOR . 'charts_view');
   }
}
