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
                        <h1>Login</h1>
                        <p class="text-medium-emphasis">Sign In to your account</p>

                        <!-- <div class="alert alert-danger" role="alert"> -->
                        <!-- <?php echo $errLogin; ?> -->
                        <?php echo $this->session->flashdata('message'); ?>
                        <!-- </div> -->

                        <?php echo form_open('Users/login/', array('class' => '')); ?>

                        <div class="input-group mb-3">
                           <span class="input-group-text">
                              <svg class="icon">
                                 <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                              </svg>
                           </span>
                           <input class="form-control" type="text" placeholder="E-mail" name="identity" id="vIdentity" aria-describedby="vIdentityFeedback" required>
                        </div>

                        <div class="input-group mb-4">
                           <span class="input-group-text">
                              <svg class="icon">
                                 <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                              </svg>
                           </span>
                           <input class="form-control" type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <div class="form-check">
                                 <!-- <input class="form-check-input" id="flexCheckDefault" type="checkbox"> -->
                                 <?php echo form_checkbox(
                                    array(
                                       'name' => 'remember',
                                       'id' => 'flexCheckDefault',
                                       'value' => 'accept',
                                       'checked' => false,
                                       'class' => 'form-check-input'
                                    )
                                 ); ?>
                                 <label class="form-check-label" for="flexCheckDefault">
                                    <?php echo lang('login_remember_label', 'remember'); ?>
                                 </label>

                              </div>
                           </div>
                        </div>
                        <br>
                        <div class="row">
                           <div class="col-6">
                              <button class="btn btn-primary px-4" type="submit">Login</button>
                           </div>
                           <div class="col-6 text-end">
                              <a class="btn btn-link px-0" href="<?php echo base_url(); ?>Users/forgot_password">Forgot password?</a>
                           </div>
                        </div>
                        </form>

                        <hr>
                        <div class="row">
                           <div class="col-12 small">
                              Using <a href="https://codeigniter.com/userguide3/index.html">CodeIgniter <?php echo CI_VERSION; ?></a>,
                              <a href="http://benedmunds.com/ion_auth/">Ion Auth</a>, and
                              <a href="https://coreui.io/docs/4.0/getting-started/introduction/">CoreUI free</a>
                           </div>
                        </div>
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