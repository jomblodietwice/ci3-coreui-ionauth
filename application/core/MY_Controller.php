<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
   protected $data = array();

   function __construct()
   {
      parent::__construct();

      // $this->load->database();
      // $this->lang->load('auth');

   }

   protected function render($de_view = NULL, $template = 'base')
   {
      $this->data['titlePage'] = 'CodeIgniter 3 - CoreUI Free - ION Auth Admin Template';
      $this->data['header']    = $this->load->view('coreui' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'header_view', $this->data, TRUE);
      $this->data['footer']    = $this->load->view('coreui' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'footer_view', $this->data, TRUE);
      $this->data['js']        = $this->load->view('coreui' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . 'jscript_view', $this->data, TRUE);

      if ($template == 'json' || $this->input->is_ajax_request()) {
         // hapus dulu array key ini
         unset($this->data['titlePage']);
         unset($this->data['header']);
         unset($this->data['footer']);
         unset($this->data['js']);

         header('Content-Type: application/json');
         echo json_encode($this->data);
      } elseif (is_null($template)) {
         $this->load->view($de_view, $this->data);
      } else {
         $this->data['mainContent'] = (is_null($de_view)) ? '' : $this->load->view('coreui' . DIRECTORY_SEPARATOR . $de_view, $this->data, TRUE);

         $this->load->view('coreui' . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . $template . '_view', $this->data);
      }
   }
}
