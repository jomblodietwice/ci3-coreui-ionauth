<div class="container-lg">
   <div class="callout callout-info bg-white">CoreUI Table has been created as an extension of Bootstrap Table. Table is delivered with some new features, variants, and unique design that matches CoreUI Design System requirements.<br><br>For more information please visit our official
      <a href="https://coreui.io/docs/4.0/content/tables/" target="_blank">documentation</a>.
   </div>
   <div class="car"></div>
   <div class="card mb-4">
      <div class="card-header"><strong>Tables</strong><span class="small ms-1">Basic example</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Using the most basic table markup, here’s how <code>.table</code>-based tables look in Bootstrap.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-754" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-754" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-754">
                  <table class="table">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-754">
                  <script class="language-markup" type="text/plain">
                     <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Tables</strong><span class="small ms-1">Variants</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Use contextual classes to color tables, table rows or individual cells.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1230" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1230" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1230">
                  <table class="table">
                     <thead>
                        <tr>
                           <th scope="col">Class</th>
                           <th scope="col">Heading</th>
                           <th scope="col">Heading</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">Default</th>
                           <td>Cell</td>
                           <td>Cell</td>
                        </tr>
                        <tr class="table-primary">
                           <th scope="row">Primary</th>
                           <td>Cell</td>
                           <td>Cell</td>
                        </tr>
                        <tr class="table-secondary">
                           <th scope="row">Secondary</th>
                           <td>Cell</td>
                           <td>Cell</td>
                        </tr>
                        <tr class="table-success">
                           <th scope="row">Success</th>
                           <td>Cell</td>
                           <td>Cell</td>
                        </tr>
                        <tr class="table-danger">
                           <th scope="row">Danger</th>
                           <td>Cell</td>
                           <td>Cell</td>
                        </tr>
                        <tr class="table-warning">
                           <th scope="row">Warning</th>
                           <td>Cell</td>
                           <td>Cell</td>
                        </tr>
                        <tr class="table-info">
                           <th scope="row">Info</th>
                           <td>Cell</td>
                           <td>Cell</td>
                        </tr>
                        <tr class="table-light">
                           <th scope="row">Light</th>
                           <td>Cell</td>
                           <td>Cell</td>
                        </tr>
                        <tr class="table-dark">
                           <th scope="row">Dark</th>
                           <td>Cell</td>
                           <td>Cell</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-1230">
                  <script class="language-markup" type="text/plain">
                     <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Class</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Default</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-primary">
                            <th scope="row">Primary</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-secondary">
                            <th scope="row">Secondary</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-success">
                            <th scope="row">Success</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-danger">
                            <th scope="row">Danger</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-warning">
                            <th scope="row">Warning</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-info">
                            <th scope="row">Info</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-light">
                            <th scope="row">Light</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                          <tr class="table-dark">
                            <th scope="row">Dark</th>
                            <td>Cell</td>
                            <td>Cell</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Tables</strong><span class="small ms-1">Striped rows</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Use <code>.table-striped</code> to add zebra-striping to any table row within the <code> &lt;tbody&gt;</code>.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-667" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-667" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-667">
                  <table class="table table-striped">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-667">
                  <script class="language-markup" type="text/plain">
                     <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
         <p class="text-medium-emphasis small">These classes can also be added to table variants:</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-489" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-489" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-489">
                  <table class="table table-dark table-striped">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-489">
                  <script class="language-markup" type="text/plain">
                     <table class="table table-dark table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-504" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-504" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-504">
                  <table class="table table-success table-striped">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-504">
                  <script class="language-markup" type="text/plain">
                     <table class="table table-success table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Tables</strong><span class="small ms-1">Hoverable rows</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Add <code>.table-hover</code> to enable a hover state on table rows within a <code> &lt;tbody&gt;</code>.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-892" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-892" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-892">
                  <table class="table table-hover">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-892">
                  <script class="language-markup" type="text/plain">
                     <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-215" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-215" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-215">
                  <table class="table table-dark table-hover">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-215">
                  <script class="language-markup" type="text/plain">
                     <table class="table table-dark table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
         <p class="text-medium-emphasis small">These hoverable rows can also be combined with the striped variant:</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1245" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1245" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1245">
                  <table class="table table-striped table-hover">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-1245">
                  <script class="language-markup" type="text/plain">
                     <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Tables</strong><span class="small ms-1">Active tables</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Highlight a table row or cell by adding a <code>.table-active</code> class.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-834" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-834" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-834">
                  <table class="table">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="table-active">
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td class="table-active" colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-834">
                  <script class="language-markup" type="text/plain">
                     <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="table-active">
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td class="table-active" colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-16" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-16" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-16">
                  <table class="table table-dark">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="table-active">
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td class="table-active" colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-16">
                  <script class="language-markup" type="text/plain">
                     <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="table-active">
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td class="table-active" colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Tables</strong><span class="small ms-1">Bordered tables</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1080" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1080" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1080">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-1080">
                  <script class="language-markup" type="text/plain">
                     <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
         <p class="text-medium-emphasis small"><a href="https://coreui.io/docs/4.0/utilities/borders/#border-color">Border color utilities</a> can be added to change colors:</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1103" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1103" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1103">
                  <table class="table table-bordered border-primary">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-1103">
                  <script class="language-markup" type="text/plain">
                     <table class="table table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Tables</strong><span class="small ms-1">Tables without borders</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Add <code>.table-borderless</code> for a table without borders.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-563" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-563" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-563">
                  <table class="table table-borderless">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-563">
                  <script class="language-markup" type="text/plain">
                     <table class="table table-borderless">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-990" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-990" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-990">
                  <table class="table table-dark table-borderless">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-990">
                  <script class="language-markup" type="text/plain">
                     <table class="table table-dark table-borderless">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Tables</strong><span class="small ms-1">Small tables</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Add <code>.table-sm</code> to make any <code>.table</code> more compact by cutting all cell <code>padding</code> in half.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-962" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-962" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-962">
                  <table class="table table-sm">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-962">
                  <script class="language-markup" type="text/plain">
                     <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-740" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-740" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-740">
                  <table class="table table-dark table-sm">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-740">
                  <script class="language-markup" type="text/plain">
                     <table class="table table-dark table-sm">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Tables</strong><span class="small ms-1">Vertical alignment</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Table cells of <code> &lt;thead&gt;</code> are always vertical aligned to the bottom. Table cells in <code> &lt;tbody&gt;</code> inherit their alignment from <code> &lt;table&gt;</code> and are aligned to the the top by default. Use the <a href="https://coreui.io/docs/4.0/utilities/vertical-align/">vertical align</a> classes to re-align where needed.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1194" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1194" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1194">
                  <div class="table-responsive">
                     <table class="table align-middle">
                        <thead>
                           <tr>
                              <th class="w-25" scope="col">Heading 1</th>
                              <th class="w-25" scope="col">Heading 2</th>
                              <th class="w-25" scope="col">Heading 3</th>
                              <th class="w-25" scope="col">Heading 4</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                              <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                              <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                              <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                           </tr>
                           <tr class="align-bottom">
                              <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                              <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                              <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                              <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                           </tr>
                           <tr>
                              <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                              <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                              <td class="align-top">This cell is aligned to the top.</td>
                              <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-1194">
                  <script class="language-markup" type="text/plain">
                     <div class="table-responsive">
                        <table class="table align-middle">
                          <thead>
                            <tr>
                              <th class="w-25" scope="col">Heading 1</th>
                              <th class="w-25" scope="col">Heading 2</th>
                              <th class="w-25" scope="col">Heading 3</th>
                              <th class="w-25" scope="col">Heading 4</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                              <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                              <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                              <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                            </tr>
                            <tr class="align-bottom">
                              <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                              <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                              <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                              <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                            </tr>
                            <tr>
                              <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                              <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                              <td class="align-top">This cell is aligned to the top.</td>
                              <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Tables</strong><span class="small ms-1">Nesting</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Border styles, active styles, and table variants are not inherited by nested tables.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1125" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1125" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1125">
                  <table class="table table-striped table-bordered">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <td colspan="4">
                              <table class="table mb-0">
                                 <thead>
                                    <tr>
                                       <th scope="col">Header</th>
                                       <th scope="col">Header</th>
                                       <th scope="col">Header</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row">A</th>
                                       <td>First</td>
                                       <td>Last</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">B</th>
                                       <td>First</td>
                                       <td>Last</td>
                                    </tr>
                                    <tr>
                                       <th scope="row">C</th>
                                       <td>First</td>
                                       <td>Last</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td>Larry</td>
                           <td>the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-1125">
                  <script class="language-markup" type="text/plain">
                     <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td colspan="4">
                              <table class="table mb-0">
                                <thead>
                                  <tr>
                                    <th scope="col">Header</th>
                                    <th scope="col">Header</th>
                                    <th scope="col">Header</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">A</th>
                                    <td>First</td>
                                    <td>Last</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">B</th>
                                    <td>First</td>
                                    <td>Last</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">C</th>
                                    <td>First</td>
                                    <td>Last</td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Tables</strong><span class="small ms-1">Table head</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Similar to tables and dark tables, use the modifier classes <code>.table-light</code> or <code>.table-dark</code> to make <code> &lt;thead&gt;</code>s appear light or dark gray.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-435" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-435" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-435">
                  <table class="table">
                     <thead class="table-light">
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td>Larry</td>
                           <td>the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-435">
                  <script class="language-markup" type="text/plain">
                     <table class="table">
                        <thead class="table-light">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-862" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-862" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-862">
                  <table class="table">
                     <thead class="table-dark">
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td>Larry</td>
                           <td>the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-862">
                  <script class="language-markup" type="text/plain">
                     <table class="table">
                        <thead class="table-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Tables</strong><span class="small ms-1">Table foot</span></div>
      <div class="card-body">
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-684" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-684" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-684">
                  <table class="table">
                     <thead class="table-light">
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td>Larry</td>
                           <td>the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                     <tfoot>
                        <tr>
                           <td>Footer</td>
                           <td>Footer</td>
                           <td>Footer</td>
                           <td>Footer</td>
                        </tr>
                     </tfoot>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-684">
                  <script class="language-markup" type="text/plain">
                     <table class="table">
                        <thead class="table-light">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td>Footer</td>
                            <td>Footer</td>
                            <td>Footer</td>
                            <td>Footer</td>
                          </tr>
                        </tfoot>
                      </table>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Tables</strong><span class="small ms-1">Captions</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">A <code> &lt;caption&gt;</code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-809" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-809" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-809">
                  <table class="table">
                     <caption>List of users</caption>
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td colspan="2">Larry the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-809">
                  <script class="language-markup" type="text/plain">
                     <table class="table">
                        <caption>List of users</caption>
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
         <p class="text-medium-emphasis small">You can also put the <code> &lt;caption&gt;</code> on the top of the table with <code>.caption-top</code>.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1080" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1080" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1080">
                  <table class="table caption-top">
                     <caption>List of users</caption>
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>@fat</td>
                        </tr>
                        <tr>
                           <th scope="row">3</th>
                           <td>Larry</td>
                           <td>the Bird</td>
                           <td>@twitter</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-1080">
                  <script class="language-markup" type="text/plain">
                     <table class="table caption-top">
                        <caption>List of users</caption>
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>