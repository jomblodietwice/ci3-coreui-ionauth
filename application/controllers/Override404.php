<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Override404 extends MY_Controller
{
   public function index()
   {
      $this->render('errors' . DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . 'override404_view', NULL);
   }
}
