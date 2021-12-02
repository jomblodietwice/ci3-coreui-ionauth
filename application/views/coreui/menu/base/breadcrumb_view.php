<div class="container-lg">
   <div class="callout callout-info bg-white">CoreUI Breadcrumb has been created as an extension of Bootstrap Breadcrumb. Breadcrumb is delivered with some new features, variants, and unique design that matches CoreUI Design System requirements.<br><br>For more information please visit our official
      <a href="https://coreui.io/docs/4.0/components/breadcrumb/" target="_blank">documentation</a>.
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Breadcrumb</strong></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">The breadcrumb navigation provides links back to each previous page the user navigated through and shows the current location in a website or an application. You don’t have to add separators, because they automatically added in CSS through <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/::before"> <code>::before</code></a> and <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/content"> <code>content</code></a>.</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-238" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-238" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-238">
                        <nav aria-label="breadcrumb" role="navigation">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item active" aria-current="page">Home</li>
                           </ol>
                        </nav>
                        <nav aria-label="breadcrumb" role="navigation">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Library</li>
                           </ol>
                        </nav>
                        <nav aria-label="breadcrumb" role="navigation">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item"><a href="#">Library</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Data</li>
                           </ol>
                        </nav>
                        <nav class="breadcrumb"><a class="breadcrumb-item" href="#">Home</a><a class="breadcrumb-item" href="#">Library</a><a class="breadcrumb-item" href="#">Data</a><span class="breadcrumb-item active">Bootstrap</span></nav>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-238">
                        <script class="language-markup" type="text/plain">
                           <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ol>
                          </nav>
                          <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                          </nav>
                          <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item"><a href="#">Library</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                          </nav>
                          <nav class="breadcrumb"><a class="breadcrumb-item" href="#">Home</a><a class="breadcrumb-item" href="#">Library</a><a class="breadcrumb-item" href="#">Data</a><span class="breadcrumb-item active">Bootstrap</span></nav>
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /.row-->
</div>