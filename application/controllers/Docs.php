<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Docs extends MY_Controller
{
   public function index()
   {
      $this->render('docs_view');
   }
}
