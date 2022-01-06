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



<!-- JS ini mesti di-load setelah JS diatas -->



<script>
</script>