<div class="container-lg">
   <div class="callout callout-info bg-white">CoreUI Checks and radios has been created as an extension of Bootstrap Checks and radios. Checks and radios is delivered with some new features, variants, and unique design that matches CoreUI Design System requirements.<br><br>For more information please visit our official
      <a href="https://coreui.io/docs/4.0/forms/checks-radios/" target="_blank">documentation</a>.
   </div>
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Checkbox</strong></div>
            <div class="card-body">
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1234" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1234" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1234">
                        <div class="form-check">
                           <input class="form-check-input" id="flexCheckDefault" type="checkbox">
                           <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" id="flexCheckChecked" type="checkbox" checked="">
                           <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-1234">
                        <script class="language-markup" type="text/plain">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefault" type="checkbox">
                            <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="flexCheckChecked" type="checkbox" checked>
                            <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
                          </div>
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Indeterminate</strong></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">Checkboxes can utilize the <code>:indeterminate</code> pseudo class when manually set via JavaScript (there is no available HTML attribute for specifying it).</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-446" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-446" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#js-446" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-cog"></use>
                           </svg>JavaScript</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-446">
                        <div class="form-check form-example-indeterminate">
                           <input class="form-check-input" id="flexCheckIndeterminate" type="checkbox">
                           <label class="form-check-label" for="flexCheckIndeterminate">Indeterminate checkbox</label>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-446">
                        <script class="language-markup" type="text/plain">
                           <div class="form-check form-example-indeterminate">
                            <input class="form-check-input" id="flexCheckIndeterminate" type="checkbox">
                            <label class="form-check-label" for="flexCheckIndeterminate">Indeterminate checkbox</label>
                          </div>
                        </script>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="js-446">
                        <script class="language-js" type="text/plain">
                           document.querySelectorAll('.form-example-indeterminate [type="checkbox"]').forEach(function (checkbox) {
                            checkbox.indeterminate = true
                          })
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Checkbox</strong><span class="small ms-1">Disabled</span></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">Add the <code>disabled</code> attribute and the associated <code>&lt;label&gt;</code>s are automatically styled to match with a lighter color to help indicate the input’s state.</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-695" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-695" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-695">
                        <div class="form-check">
                           <input class="form-check-input" id="flexCheckDisabled" type="checkbox" disabled="">
                           <label class="form-check-label" for="flexCheckDisabled">Disabled checkbox</label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" id="flexCheckCheckedDisabled" type="checkbox" checked="" disabled="">
                           <label class="form-check-label" for="flexCheckCheckedDisabled">Disabled checked checkbox</label>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-695">
                        <script class="language-markup" type="text/plain">
                           <div class="form-check">
                            <input class="form-check-input" id="flexCheckDisabled" type="checkbox" disabled>
                            <label class="form-check-label" for="flexCheckDisabled">Disabled checkbox</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="flexCheckCheckedDisabled" type="checkbox" checked disabled>
                            <label class="form-check-label" for="flexCheckCheckedDisabled">Disabled checked checkbox</label>
                          </div>
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Radios</strong></div>
            <div class="card-body">
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-449" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-449" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-449">
                        <div class="form-check">
                           <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault">
                           <label class="form-check-label" for="flexRadioDefault1">Default radio</label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault" checked="">
                           <label class="form-check-label" for="flexRadioDefault2">Default checked radio</label>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-449">
                        <script class="language-markup" type="text/plain">
                           <div class="form-check">
                            <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault">
                            <label class="form-check-label" for="flexRadioDefault1">Default radio</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault" checked>
                            <label class="form-check-label" for="flexRadioDefault2">Default checked radio</label>
                          </div>
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Radios</strong><span class="small ms-1">Disabled</span></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">Add the <code>disabled</code> attribute and the associated <code>&lt;label&gt;</code>s are automatically styled to match with a lighter color to help indicate the input’s state.</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-650" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-650" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-650">
                        <div class="form-check">
                           <input class="form-check-input" id="flexRadioDisabled" type="radio" name="flexRadioDisabled" disabled="">
                           <label class="form-check-label" for="flexRadioDisabled">Disabled radio</label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" id="flexRadioCheckedDisabled" type="radio" name="flexRadioDisabled" checked="" disabled="">
                           <label class="form-check-label" for="flexRadioCheckedDisabled">Disabled checked radio</label>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-650">
                        <script class="language-markup" type="text/plain">
                           <div class="form-check">
                            <input class="form-check-input" id="flexRadioDisabled" type="radio" name="flexRadioDisabled" disabled>
                            <label class="form-check-label" for="flexRadioDisabled">Disabled radio</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="flexRadioCheckedDisabled" type="radio" name="flexRadioDisabled" checked disabled>
                            <label class="form-check-label" for="flexRadioCheckedDisabled">Disabled checked radio</label>
                          </div>
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Switches</strong></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">A switch has the markup of a custom checkbox but uses the <code>.form-switch</code> class to render a toggle switch. Switches also support the <code>disabled</code> attribute.</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-121" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-121" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-121">
                        <div class="form-check form-switch">
                           <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox">
                           <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                           <input class="form-check-input" id="flexSwitchCheckChecked" type="checkbox" checked="">
                           <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                           <input class="form-check-input" id="flexSwitchCheckDisabled" type="checkbox" disabled="">
                           <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch">
                           <input class="form-check-input" id="flexSwitchCheckCheckedDisabled" type="checkbox" checked="" disabled="">
                           <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-121">
                        <script class="language-markup" type="text/plain">
                           <div class="form-check form-switch">
                            <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                          </div>
                          <div class="form-check form-switch">
                            <input class="form-check-input" id="flexSwitchCheckChecked" type="checkbox" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                          </div>
                          <div class="form-check form-switch">
                            <input class="form-check-input" id="flexSwitchCheckDisabled" type="checkbox" disabled>
                            <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                          </div>
                          <div class="form-check form-switch">
                            <input class="form-check-input" id="flexSwitchCheckCheckedDisabled" type="checkbox" checked disabled>
                            <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                          </div>
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Switches</strong><span class="small ms-1">Sizes</span></div>
            <div class="card-body">
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1077" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1077" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1077">
                        <div class="form-check form-switch">
                           <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox">
                           <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch form-switch-lg">
                           <input class="form-check-input" id="flexSwitchCheckDefaultLg" type="checkbox">
                           <label class="form-check-label" for="flexSwitchCheckDefaultLg">Large switch checkbox input</label>
                        </div>
                        <div class="form-check form-switch form-switch-xl">
                           <input class="form-check-input" id="flexSwitchCheckDefaultXl" type="checkbox">
                           <label class="form-check-label" for="flexSwitchCheckDefaultXl">Extra large switch checkbox input</label>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-1077">
                        <script class="language-markup" type="text/plain">
                           <div class="form-check form-switch">
                            <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                          </div>
                          <div class="form-check form-switch form-switch-lg">
                            <input class="form-check-input" id="flexSwitchCheckDefaultLg" type="checkbox">
                            <label class="form-check-label" for="flexSwitchCheckDefaultLg">Large switch checkbox input</label>
                          </div>
                          <div class="form-check form-switch form-switch-xl">
                            <input class="form-check-input" id="flexSwitchCheckDefaultXl" type="checkbox">
                            <label class="form-check-label" for="flexSwitchCheckDefaultXl">Extra large switch checkbox input</label>
                          </div>
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Checks and Radios</strong><span class="small ms-1">Default layout (stacked)</span></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">By default, any number of checkboxes and radios that are immediate sibling will be vertically stacked and appropriately spaced with <code>.form-check</code>.</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-743" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-743" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-743">
                        <div class="form-check">
                           <input class="form-check-input" id="defaultCheck1" type="checkbox">
                           <label class="form-check-label" for="defaultCheck1">Default checkbox</label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" id="defaultCheck2" type="checkbox" disabled="">
                           <label class="form-check-label" for="defaultCheck2">Disabled checkbox</label>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-743">
                        <script class="language-markup" type="text/plain">
                           <div class="form-check">
                            <input class="form-check-input" id="defaultCheck1" type="checkbox">
                            <label class="form-check-label" for="defaultCheck1">Default checkbox</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="defaultCheck2" type="checkbox" disabled>
                            <label class="form-check-label" for="defaultCheck2">Disabled checkbox</label>
                          </div>
                        </script>
                     </div>
                  </div>
               </div>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-947" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-947" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-947">
                        <div class="form-check">
                           <input class="form-check-input" id="exampleRadios1" type="radio" name="exampleRadios" value="option1" checked="">
                           <label class="form-check-label" for="exampleRadios1">Default radio</label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" id="exampleRadios2" type="radio" name="exampleRadios" value="option2">
                           <label class="form-check-label" for="exampleRadios2">Second default radio</label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" id="exampleRadios3" type="radio" name="exampleRadios" value="option3" disabled="">
                           <label class="form-check-label" for="exampleRadios3">Disabled radio</label>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-947">
                        <script class="language-markup" type="text/plain">
                           <div class="form-check">
                            <input class="form-check-input" id="exampleRadios1" type="radio" name="exampleRadios" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">Default radio</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="exampleRadios2" type="radio" name="exampleRadios" value="option2">
                            <label class="form-check-label" for="exampleRadios2">Second default radio</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="exampleRadios3" type="radio" name="exampleRadios" value="option3" disabled>
                            <label class="form-check-label" for="exampleRadios3">Disabled radio</label>
                          </div>
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Checks and Radios</strong><span class="small ms-1">Inline</span></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">Group checkboxes or radios on the same horizontal row by adding <code>.form-check-inline</code> to any <code>.form-check</code>.</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1164" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1164" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1164">
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" id="inlineCheckbox1" type="checkbox" value="option1">
                           <label class="form-check-label" for="inlineCheckbox1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" id="inlineCheckbox2" type="checkbox" value="option2">
                           <label class="form-check-label" for="inlineCheckbox2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" id="inlineCheckbox3" type="checkbox" value="option3" disabled="">
                           <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-1164">
                        <script class="language-markup" type="text/plain">
                           <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineCheckbox1" type="checkbox" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineCheckbox2" type="checkbox" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">2</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineCheckbox3" type="checkbox" value="option3" disabled>
                            <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                          </div>
                        </script>
                     </div>
                  </div>
               </div>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1287" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1287" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1287">
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" id="inlineRadio1" type="radio" name="inlineRadioOptions" value="option1">
                           <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" id="inlineRadio2" type="radio" name="inlineRadioOptions" value="option2">
                           <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" id="inlineRadio3" type="radio" name="inlineRadioOptions" value="option3" disabled="">
                           <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-1287">
                        <script class="language-markup" type="text/plain">
                           <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineRadio1" type="radio" name="inlineRadioOptions" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineRadio2" type="radio" name="inlineRadioOptions" value="option2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineRadio3" type="radio" name="inlineRadioOptions" value="option3" disabled>
                            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                          </div>
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Checks and Radios</strong><span class="small ms-1">Without labels</span></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">Omit the wrapping <code>.form-check</code> for checkboxes and radios that have no label text. Remember to still provide some form of accessible name for assistive technologies (for instance, using <code>aria-label</code>). See the <a href="https://coreui.io/docs/4.0/forms/overview/#accessibility">forms overview accessibility</a> section for details.</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-122" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-122" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-122">
                        <div>
                           <input class="form-check-input" id="checkboxNoLabel" type="checkbox" aria-label="...">
                        </div>
                        <div>
                           <input class="form-check-input" id="radioNoLabel1" type="radio" name="radioNoLabel" aria-label="...">
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-122">
                        <script class="language-markup" type="text/plain">
                           <div>
                            <input class="form-check-input" id="checkboxNoLabel" type="checkbox" aria-label="...">
                          </div>
                          <div>
                            <input class="form-check-input" id="radioNoLabel1" type="radio" name="radioNoLabel" aria-label="...">
                          </div>
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Toggle buttons</strong></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">Create button-like checkboxes and radio buttons by using <code>.btn</code> styles rather than <code>.form-check-label</code> on the <code>&lt;label&gt;</code> elements. These toggle buttons can further be grouped in a <a href="https://coreui.io/docs/4.0/components/button-group/">button group</a> if needed.</p>
               <h3 id="checkbox-toggle-buttons">Checkbox toggle buttons<a class="anchorjs-link" aria-label="Anchor" data-anchorjs-icon="#" href="#checkbox-toggle-buttons" style="padding-left: 0.375em;"></a></h3>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1271" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1271" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1271">
                        <input class="btn-check" id="btn-check" type="checkbox" autocomplete="off">
                        <label class="btn btn-primary" for="btn-check">Single toggle</label>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-1271">
                        <script class="language-markup" type="text/plain">
                           <input class="btn-check" id="btn-check" type="checkbox" autocomplete="off">
                          <label class="btn btn-primary" for="btn-check">Single toggle</label>
                        </script>
                     </div>
                  </div>
               </div>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1266" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1266" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1266">
                        <input class="btn-check" id="btn-check-2" type="checkbox" checked="" autocomplete="off">
                        <label class="btn btn-primary" for="btn-check-2">Checked</label>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-1266">
                        <script class="language-markup" type="text/plain">
                           <input class="btn-check" id="btn-check-2" type="checkbox" checked autocomplete="off">
                          <label class="btn btn-primary" for="btn-check-2">Checked</label>
                        </script>
                     </div>
                  </div>
               </div>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-765" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-765" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-765">
                        <input class="btn-check" id="btn-check-3" type="checkbox" autocomplete="off" disabled="">
                        <label class="btn btn-primary" for="btn-check-3">Disabled</label>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-765">
                        <script class="language-markup" type="text/plain">
                           <input class="btn-check" id="btn-check-3" type="checkbox" autocomplete="off" disabled>
                          <label class="btn btn-primary" for="btn-check-3">Disabled</label>
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Toggle buttons</strong><span class="small ms-1">Radio</span></div>
            <div class="card-body">
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-405" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-405" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-405">
                        <input class="btn-check" id="option1" type="radio" name="options" autocomplete="off" checked="">
                        <label class="btn btn-secondary" for="option1">Checked</label>
                        <input class="btn-check" id="option2" type="radio" name="options" autocomplete="off">
                        <label class="btn btn-secondary" for="option2">Radio</label>
                        <input class="btn-check" id="option3" type="radio" name="options" autocomplete="off" disabled="">
                        <label class="btn btn-secondary" for="option3">Disabled</label>
                        <input class="btn-check" id="option4" type="radio" name="options" autocomplete="off">
                        <label class="btn btn-secondary" for="option4">Radio</label>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-405">
                        <script class="language-markup" type="text/plain">
                           <input class="btn-check" id="option1" type="radio" name="options" autocomplete="off" checked>
                          <label class="btn btn-secondary" for="option1">Checked</label>
                          <input class="btn-check" id="option2" type="radio" name="options" autocomplete="off">
                          <label class="btn btn-secondary" for="option2">Radio</label>
                          <input class="btn-check" id="option3" type="radio" name="options" autocomplete="off" disabled>
                          <label class="btn btn-secondary" for="option3">Disabled</label>
                          <input class="btn-check" id="option4" type="radio" name="options" autocomplete="off">
                          <label class="btn btn-secondary" for="option4">Radio</label>
                        </script>
                     </div>
                  </div>
               </div>
               <h3 id="outlined-styles">Outlined styles<a class="anchorjs-link" aria-label="Anchor" data-anchorjs-icon="#" href="#outlined-styles" style="padding-left: 0.375em;"></a></h3>
               <p class="text-medium-emphasis small">Different variants of <code>.btn</code>, such at the various outlined styles, are supported.</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-282" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-282" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-282">
                        <input class="btn-check" id="btn-check-outlined" type="checkbox" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btn-check-outlined">Single toggle</label><br>
                        <input class="btn-check" id="btn-check-2-outlined" type="checkbox" checked="" autocomplete="off">
                        <label class="btn btn-outline-secondary" for="btn-check-2-outlined">Checked</label><br>
                        <input class="btn-check" id="success-outlined" type="radio" name="options-outlined" autocomplete="off" checked="">
                        <label class="btn btn-outline-success" for="success-outlined">Checked success radio</label>
                        <input class="btn-check" id="danger-outlined" type="radio" name="options-outlined" autocomplete="off">
                        <label class="btn btn-outline-danger" for="danger-outlined">Danger radio</label>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-282">
                        <script class="language-markup" type="text/plain">
                           <input class="btn-check" id="btn-check-outlined" type="checkbox" autocomplete="off">
                          <label class="btn btn-outline-primary" for="btn-check-outlined">Single toggle</label><br>
                          <input class="btn-check" id="btn-check-2-outlined" type="checkbox" checked autocomplete="off">
                          <label class="btn btn-outline-secondary" for="btn-check-2-outlined">Checked</label><br>
                          <input class="btn-check" id="success-outlined" type="radio" name="options-outlined" autocomplete="off" checked>
                          <label class="btn btn-outline-success" for="success-outlined">Checked success radio</label>
                          <input class="btn-check" id="danger-outlined" type="radio" name="options-outlined" autocomplete="off">
                          <label class="btn btn-outline-danger" for="danger-outlined">Danger radio</label>
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>