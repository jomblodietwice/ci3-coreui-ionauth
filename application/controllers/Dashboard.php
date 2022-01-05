<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();

      if (!$this->ion_auth->logged_in()) {
         // redirect them to the login page
         redirect('Users' . DIRECTORY_SEPARATOR . 'login', 'refresh');
      }
   }

   public function index()
   {
      $this->data['loadMyJS'] = [
         'vendors/chart.js/js/chart.min.js',
         'vendors/@coreui/chartjs/js/coreui-chartjs.js'
      ];
      $this->data['loadMyCSS']  = false;
      // dalam view diberi batasan hanya stat tertentu yg bisa dilihat non admin
      $this->render('dashboard_view');
   }
}
