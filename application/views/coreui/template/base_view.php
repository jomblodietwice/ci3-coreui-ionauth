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
   <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
         <!-- <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="<?php echo base_url('assets/coreui/'); ?>assets/brand/coreui.svg#full"></use>
            <use xlink:href="<?php echo base_url('assets/upload/images/'); ?>jomblo_admin_logo.svg"></use>
         </svg> -->
         <img src="<?php echo base_url('assets/upload/images/jomblo_admin_logo.png'); ?>" alt="">
         <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="<?php echo base_url('assets/coreui/'); ?>assets/brand/coreui.svg#signet"></use>
         </svg>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
         <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Dashboard'); ?>">
               <svg class="nav-icon">
                  <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
               </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span>
            </a>
         </li>

         <!-- hanya admin yang bisa lihat menu ini -->
         <?php if ($this->ion_auth->is_admin()) { ?>
            <li class="nav-divider"></li>
            <li class="nav-title">Admin Rights</li>
            <li class="nav-item mt-auto">
               <a class="nav-link" href="<?php echo base_url(); ?>Users/lists">
                  <svg class="nav-icon">
                     <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-address-book"></use>
                  </svg> User Management
               </a>
            </li>
            <li class="nav-item mt-auto">
               <a class="nav-link" href="<?php echo base_url(); ?>Users/group_list">
                  <svg class="nav-icon">
                     <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-group"></use>
                  </svg> Group Management
               </a>
            </li>
         <?php } ?>

         <li class="nav-title">Theme</li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('menu/Colors'); ?>">
               <svg class="nav-icon">
                  <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
               </svg> Colors
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('menu/Typography'); ?>">
               <svg class="nav-icon">
                  <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
               </svg> Typography
            </a>
         </li>
         <li class="nav-title">Components</li>
         <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
               <svg class="nav-icon">
                  <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
               </svg> Base
            </a>
            <ul class="nav-group-items">
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/base/Accordion'); ?>"><span class="nav-icon"></span> Accordion</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/base/Breadcrumb'); ?>"><span class="nav-icon"></span> Breadcrumb</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/Base/Cards'); ?>"><span class="nav-icon"></span> Cards</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/base/Carousel'); ?>"><span class="nav-icon"></span> Carousel</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/base/Collapse'); ?>"><span class="nav-icon"></span> Collapse</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/base/Listgroup'); ?>"><span class="nav-icon"></span> List group</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/base/Navs'); ?>"><span class="nav-icon"></span> Navs</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/base/Pagination'); ?>"><span class="nav-icon"></span> Pagination</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/base/Popovers'); ?>"><span class="nav-icon"></span> Popovers</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/base/Progress'); ?>"><span class="nav-icon"></span> Progress</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/base/Scrollspy'); ?>"><span class="nav-icon"></span> Scrollspy</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/base/Spinners'); ?>"><span class="nav-icon"></span> Spinners</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/base/Tables'); ?>"><span class="nav-icon"></span> Tables</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/base/Tabs'); ?>"><span class="nav-icon"></span> Tabs</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/base/Tooltips'); ?>"><span class="nav-icon"></span> Tooltips</a></li>
            </ul>
         </li>
         <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
               <svg class="nav-icon">
                  <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
               </svg> Buttons
            </a>
            <ul class="nav-group-items">
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/buttons/Buttons'); ?>"><span class="nav-icon"></span> Buttons</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/buttons/Buttongroup'); ?>"><span class="nav-icon"></span> Buttons Group</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/buttons/Dropdowns'); ?>"><span class="nav-icon"></span> Dropdowns</a></li>
            </ul>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('menu/Charts'); ?>">
               <svg class="nav-icon">
                  <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
               </svg> Charts
            </a>
         </li>
         <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
               <svg class="nav-icon">
                  <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
               </svg> Forms
            </a>
            <ul class="nav-group-items">
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/forms/Form_control'); ?>"> Form Control</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/forms/Select'); ?>"> Select</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/forms/Check_radios'); ?>"> Checks and radios</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/forms/Range'); ?>"> Range</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/forms/Input_group'); ?>"> Input group</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/forms/Floating_labels'); ?>"> Floating labels</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/forms/Layout'); ?>"> Layout</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/forms/Validation'); ?>"> Validation</a></li>
            </ul>
         </li>
         <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
               <svg class="nav-icon">
                  <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-star"></use>
               </svg> Icons
            </a>
            <ul class="nav-group-items">
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/icons/coreui_icons_free'); ?>"> CoreUI Icons<span class="badge badge-sm bg-success ms-auto">Free</span></a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/icons/coreui_icons_brand'); ?>"> CoreUI Icons - Brand</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/icons/coreui_icons_flag'); ?>"> CoreUI Icons - Flag</a></li>
            </ul>
         </li>
         <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
               <svg class="nav-icon">
                  <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
               </svg> Notifications
            </a>
            <ul class="nav-group-items">
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/notifications/Alerts'); ?>"><span class="nav-icon"></span> Alerts</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/notifications/Badge'); ?>"><span class="nav-icon"></span> Badge</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/notifications/Modals'); ?>"><span class="nav-icon"></span> Modals</a></li>
               <li class="nav-item"><a class="nav-link" href="<?php echo base_url('menu/notifications/Toasts'); ?>"><span class="nav-icon"></span> Toasts</a></li>
            </ul>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('menu/Widgets'); ?>">
               <svg class="nav-icon">
                  <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
               </svg> Widgets<span class="badge badge-sm bg-info ms-auto">NEW</span>
            </a>
         </li>
         <li class="nav-divider"></li>
         <li class="nav-title">Extras</li>
         <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
               <svg class="nav-icon">
                  <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-star"></use>
               </svg> Pages
            </a>
            <ul class="nav-group-items">
               <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>Page_login" target="_top">
                     <svg class="nav-icon">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                     </svg> Login
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>Page_register" target="_top">
                     <svg class="nav-icon">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                     </svg> Register
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>Page404" target="_top">
                     <svg class="nav-icon">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                     </svg> Error 404
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url(); ?>Page500" target="_top">
                     <svg class="nav-icon">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                     </svg> Error 500
                  </a>
               </li>
            </ul>
         </li>
         <li class="nav-item mt-auto">
            <a class="nav-link" href="<?php echo base_url(); ?>Docs">
               <svg class="nav-icon">
                  <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-description"></use>
               </svg> Docs
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
               <svg class="nav-icon">
                  <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
               </svg> Try CoreUI
               <div class="fw-semibold">PRO</div>
            </a>
         </li>

      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
   </div>
   <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
         <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
               <svg class="icon icon-lg">
                  <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
               </svg>
            </button>
            <a class="header-brand d-md-none" href="#">
               <svg width="118" height="46" alt="CoreUI Logo">
                  <use xlink:href="<?php echo base_url('assets/coreui/'); ?>assets/brand/coreui.svg#full"></use>
               </svg>
            </a>
            <ul class="header-nav d-none d-md-flex">
               <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
               <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
               <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
            </ul>
            <ul class="header-nav ms-auto">
               <li class="nav-item"><a class="nav-link" href="#">
                     <svg class="icon icon-lg">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                     </svg></a></li>
               <li class="nav-item"><a class="nav-link" href="#">
                     <svg class="icon icon-lg">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                     </svg></a></li>
               <li class="nav-item"><a class="nav-link" href="#">
                     <svg class="icon icon-lg">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                     </svg></a></li>
            </ul>
            <ul class="header-nav ms-3">
               <li class="nav-item dropdown">
                  <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                     <div class="avatar avatar-md"><img class="avatar-img" src="<?php echo base_url('assets/coreui/'); ?>assets/img/avatars/8.jpg" alt="user@email.com"></div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end pt-0">
                     <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold">Account</div>
                     </div>
                     <a class="dropdown-item" href="#">
                        <svg class="icon me-2">
                           <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                        </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span>
                     </a>
                     <a class="dropdown-item" href="#">
                        <svg class="icon me-2">
                           <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                        </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span>
                     </a>
                     <a class="dropdown-item" href="#">
                        <svg class="icon me-2">
                           <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                        </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span>
                     </a>
                     <a class="dropdown-item" href="#">
                        <svg class="icon me-2">
                           <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                        </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span>
                     </a>
                     <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold">Settings</div>
                     </div>
                     <a class="dropdown-item" href="#">
                        <svg class="icon me-2">
                           <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                        </svg> Profile
                     </a>
                     <a class="dropdown-item" href="#">
                        <svg class="icon me-2">
                           <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                        </svg> Settings
                     </a>
                     <a class="dropdown-item" href="#">
                        <svg class="icon me-2">
                           <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                        </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span>
                     </a>
                     <a class="dropdown-item" href="#">
                        <svg class="icon me-2">
                           <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                        </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span>
                     </a>
                     <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                        <svg class="icon me-2">
                           <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                        </svg> Lock Account
                     </a>
                     <a class="dropdown-item" href="<?php echo base_url(); ?>Users/logout">
                        <svg class="icon me-2">
                           <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                        </svg> Logout
                     </a>
                  </div>
               </li>
            </ul>
         </div>
         <div class="header-divider"></div>
         <div class="container-fluid">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb my-0 ms-2">
                  <li class="breadcrumb-item">
                     <!-- if breadcrumb is single--><span>Home</span>
                  </li>
                  <?php
                  $uri = uri_string();
                  if (strpos($uri, '/')) {
                     $uri_arr = explode('/', $uri);
                     $uri_arr_length = count($uri_arr);
                     for ($i = 0; $i < $uri_arr_length - 1; $i++) {
                        echo '<li class="breadcrumb-item"><!-- if breadcrumb is single--><a href="#">' . ucfirst($uri_arr[$i]) . '</a></li>';
                     }
                     echo '<li class="breadcrumb-item active"><span>' . ucfirst($uri_arr[$uri_arr_length - 1]) . '</span></li>';
                  } else {
                     echo '<li class="breadcrumb-item active"><span>' . ucfirst($uri) . '</span></li>';
                  }
                  ?>
               </ol>
            </nav>
         </div>
      </header>
      <div class="body flex-grow-1 px-3">
         <!-- <div class="container-lg"> -->
         <?php echo $mainContent; ?>
         <!-- </div> -->
      </div>
      <!-- footer -->
      <?php echo $footer; ?>
      <!-- end of footer -->
   </div>
   <!-- CoreUI and necessary plugins-->
   <?php echo $js; ?>
   <!-- end of plugins -->

</body>

</html>