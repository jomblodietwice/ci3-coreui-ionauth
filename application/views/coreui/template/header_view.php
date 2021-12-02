<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<base href="./">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta name="description" content="Admin Template">
<meta name="author" content="jomblodietwice">
<meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML">
<title><?php echo $titlePage; ?></title>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/coreui/'); ?>assets/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/coreui/'); ?>assets/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/coreui/'); ?>assets/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/coreui/'); ?>assets/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/coreui/'); ?>assets/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/coreui/'); ?>assets/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/coreui/'); ?>assets/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/coreui/'); ?>assets/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/coreui/'); ?>assets/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('assets/coreui/'); ?>assets/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/coreui/'); ?>assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/coreui/'); ?>assets/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/coreui/'); ?>assets/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo base_url('assets/coreui/'); ?>assets/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo base_url('assets/coreui/'); ?>assets/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- Vendors styles-->
<link rel="stylesheet" href="<?php echo base_url('assets/coreui/'); ?>vendors/simplebar/css/simplebar.css">
<link rel="stylesheet" href="<?php echo base_url('assets/coreui/'); ?>css/vendors/simplebar.css">
<!-- Main styles for this application-->
<link href="<?php echo base_url('assets/coreui/'); ?>css/style.css" rel="stylesheet">
<!-- We use those styles to show code examples, you should remove them in your application.-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
<link href="<?php echo base_url('assets/coreui/'); ?>css/examples.css" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics-->
<!-- <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
   <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
         dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
   </script> -->
<?php if (uri_string() == 'menu/icons/coreui_icons_flag') { ?>
   <link href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/css/flag.min.css" rel="stylesheet">
<?php } elseif (uri_string() == 'menu/icons/coreui_icons_brand') { ?>
   <link href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/css/brand.min.css" rel="stylesheet">
<?php } else { ?>
   <link href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/css/free.min.css" rel="stylesheet">
<?php } ?>
<link href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">