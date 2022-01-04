<script src="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
<script src="<?php echo base_url('assets/coreui/'); ?>vendors/simplebar/js/simplebar.min.js"></script>
<!-- We use those scripts to show code examples, you should remove them in your application.-->
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/prism.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>

<!-- Penyesuaian Plugins sesuai view-->
<?php if (is_array($loadMyJS)) {
   foreach ($loadMyJS as $MyJS) {
      echo '<script src="' . base_url('assets/coreui/') . $MyJS . '"></script>';
   }
} ?>

<script src="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/utils/js/coreui-utils.js"></script>

<!-- JS ini mesti di-load setelah JS diatas -->
<?php if (uri_string() == 'menu/Widgets') { ?>
   <script src="<?php echo base_url('assets/coreui/'); ?>js/widgets.js"></script>
<?php } ?>

<script src="<?php echo base_url('assets/coreui/'); ?>js/main.js"></script>
<script>
</script>