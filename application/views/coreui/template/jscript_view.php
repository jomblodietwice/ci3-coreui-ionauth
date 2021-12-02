<script src="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
<script src="<?php echo base_url('assets/coreui/'); ?>vendors/simplebar/js/simplebar.min.js"></script>
<!-- We use those scripts to show code examples, you should remove them in your application.-->
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/prism.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>

<!-- Penyesuain Plugins sesuai view-->
<?php if (uri_string() == 'menu/notifications/Toasts') { ?>
   <script src="<?php echo base_url('assets/coreui/'); ?>js/toasts.js"></script>
<?php } ?>

<?php if (uri_string() == 'menu/base/Tooltips') { ?>
   <script src="<?php echo base_url('assets/coreui/'); ?>js/tooltips.js"></script>
<?php } ?>

<?php if (uri_string() == 'menu/base/Popovers') { ?>
   <script src="<?php echo base_url('assets/coreui/'); ?>js/popovers.js"></script>
<?php } ?>

<?php if (uri_string() == 'menu/Charts') { ?>
   <script src="<?php echo base_url('assets/coreui/'); ?>vendors/chart.js/js/chart.min.js"></script>
   <script src="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
   <script src="<?php echo base_url('assets/coreui/'); ?>js/charts.js"></script>
<?php } elseif (uri_string() == 'Dashboard' || uri_string() == 'menu/Widgets') { ?>
   <script src="<?php echo base_url('assets/coreui/'); ?>vendors/chart.js/js/chart.min.js"></script>
   <script src="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
<?php } ?>

<script src="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/utils/js/coreui-utils.js"></script>

<?php if (uri_string() == 'menu/Widgets') { ?>
   <script src="<?php echo base_url('assets/coreui/'); ?>js/widgets.js"></script>
<?php } ?>

<script src="<?php echo base_url('assets/coreui/'); ?>js/main.js"></script>
<script>
</script>