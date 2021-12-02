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
<!-- Breadcrumb-->
<html lang="en">

<head>
   <?php echo $header; ?>
</head>

<body>
   <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-8">
               <div class="clearfix">
                  <h1 class="float-start display-3 me-4">404</h1>
                  <h4 class="pt-3">Oops! You're lost.</h4>
                  <p class="text-medium-emphasis">The page <strong><?php echo uri_string(); ?></strong> you are looking for was not found.</p>
               </div>
               <!-- <div class="input-group">
                  <span class="input-group-text">
                     <svg class="icon">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                     </svg>
                  </span>
                  <input class="form-control" id="prependedInput" size="16" type="text" placeholder="What are you looking for?">
                  <button class="btn btn-info" type="button">Search</button>
               </div> -->
            </div>
         </div>
      </div>
   </div>
   <!-- CoreUI and necessary plugins-->
   <?php echo $js; ?>
   <!-- end of plugins -->

</body>

</html>