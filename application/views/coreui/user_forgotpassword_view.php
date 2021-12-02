<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.0.2
* @link https://coreui.io
* Copyright (c) 2021 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="id">

<head>
   <?php echo $header; ?>
</head>

<body>
   <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-4">
               <div class="card-group d-block d-md-flex row">
                  <div class="card col-md-7 p-4 mb-0">
                     <div class="card-body">
                        <h1><?php echo lang('forgot_password_heading'); ?></h1>
                        <p class="text-medium-emphasis"><?php echo sprintf(lang('forgot_password_subheading'), $identity_label); ?></p>
                        <?php if ($message) { ?>
                           <div class="alert alert-danger" role="alert">
                              <?php echo $message; ?>
                           </div>
                        <?php } ?>
                        <?php echo form_open('Users/forgot_password/', array('class' => '')); ?>
                        <div class="input-group mb-3">
                           <span class="input-group-text">
                              <svg class="icon">
                                 <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                              </svg>
                           </span>
                           <input class="form-control" type="text" placeholder="<?php echo (($type == 'email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label)); ?>" name="identity" required>
                        </div>

                        <br>
                        <div class="row">
                           <div class="col-6">
                              <button class="btn btn-primary px-4" type="submit"><?php echo lang('forgot_password_submit_btn'); ?></button>
                           </div>
                           <div class="col-6 text-end">
                              <a class="btn btn-link px-0" href="<?php echo base_url(); ?>Users/login">Login Page</a>
                           </div>
                        </div>
                        </form>

                     </div>
                  </div>
                  <!-- <div class="card col-md-5 text-white bg-primary py-5">
                     <div class="card-body text-center">
                        <div>
                           <h2>Sign up</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                           <button class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</button>
                        </div>
                     </div>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- CoreUI and necessary plugins-->
   <?php echo $js; ?>
   <!-- end of plugins -->

</body>

</html>