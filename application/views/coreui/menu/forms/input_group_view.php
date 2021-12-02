<div class="container-lg">
   <div class="callout callout-info bg-white">CoreUI Input group has been created as an extension of Bootstrap Input group. Input group is delivered with some new features, variants, and unique design that matches CoreUI Design System requirements.<br><br>For more information please visit our official
      <a href="https://coreui.io/docs/4.0/forms/input-group/" target="_blank">documentation</a>.
   </div>
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Input group</strong><span class="small ms-1">Basic example</span></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">Place one add-on or button on either side of an input. You may also place one on both sides of an input. Remember to place <code>&lt;label&gt;</code>s outside the input group.</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-22" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-22" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-22">
                        <div class="input-group mb-3"><span class="input-group-text" id="basic-addon1">@</span>
                           <input class="form-control" type="text" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                           <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"><span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                        <label class="form-label" for="basic-url">Your vanity URL</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                           <input class="form-control" id="basic-url" type="text" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3"><span class="input-group-text">$</span>
                           <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)"><span class="input-group-text">.00</span>
                        </div>
                        <div class="input-group mb-3">
                           <input class="form-control" type="text" placeholder="Username" aria-label="Username"><span class="input-group-text">@</span>
                           <input class="form-control" type="text" placeholder="Server" aria-label="Server">
                        </div>
                        <div class="input-group"><span class="input-group-text">With textarea</span>
                           <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-22">
                        <script class="language-markup" type="text/plain">
                           <div class="input-group mb-3"><span class="input-group-text" id="basic-addon1">@</span>
                            <input class="form-control" type="text" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                          <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"><span class="input-group-text" id="basic-addon2">@example.com</span>
                          </div>
                          <label class="form-label" for="basic-url">Your vanity URL</label>
                          <div class="input-group mb-3"><span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                            <input class="form-control" id="basic-url" type="text" aria-describedby="basic-addon3">
                          </div>
                          <div class="input-group mb-3"><span class="input-group-text">$</span>
                            <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)"><span class="input-group-text">.00</span>
                          </div>
                          <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Username" aria-label="Username"><span class="input-group-text">@</span>
                            <input class="form-control" type="text" placeholder="Server" aria-label="Server">
                          </div>
                          <div class="input-group"><span class="input-group-text">With textarea</span>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
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
            <div class="card-header"><strong>Input group</strong><span class="small ms-1">Wrapping</span></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">Input groups wrap by default via <code>flex-wrap: wrap</code> in order to accommodate custom form field validation within an input group. You may disable this with <code>.flex-nowrap</code>.</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-855" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-855" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-855">
                        <div class="input-group flex-nowrap"><span class="input-group-text" id="addon-wrapping">@</span>
                           <input class="form-control" type="text" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-855">
                        <script class="language-markup" type="text/plain">
                           <div class="input-group flex-nowrap"><span class="input-group-text" id="addon-wrapping">@</span>
                            <input class="form-control" type="text" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
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
            <div class="card-header"><strong>Input group</strong><span class="small ms-1">Sizing</span></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">Add the relative form sizing classes to the <code>.input-group</code> itself and contents within will automatically resize—no need for repeating the form control size classes on each element.</p>
               <p class="text-medium-emphasis small"><strong>Sizing on the individual input group elements isn’t supported.</strong></p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-210" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-210" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-210">
                        <div class="input-group input-group-sm mb-3"><span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                           <input class="form-control" type="text" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group mb-3"><span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                           <input class="form-control" type="text" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group input-group-lg"><span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                           <input class="form-control" type="text" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-210">
                        <script class="language-markup" type="text/plain">
                           <div class="input-group input-group-sm mb-3"><span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                            <input class="form-control" type="text" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                          </div>
                          <div class="input-group mb-3"><span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                            <input class="form-control" type="text" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>
                          <div class="input-group input-group-lg"><span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                            <input class="form-control" type="text" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
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
            <div class="card-header"><strong>Input group</strong><span class="small ms-1">Checkboxes and radios</span></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">Place any checkbox or radio option within an input group’s addon instead of text. We recommend adding <code>.mt-0</code> to the <code>.form-check-input</code> when there’s no visible text next to the input.</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-295" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-295" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-295">
                        <div class="input-group mb-3">
                           <div class="input-group-text">
                              <input class="form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input">
                           </div>
                           <input class="form-control" type="text" aria-label="Text input with checkbox">
                        </div>
                        <div class="input-group">
                           <div class="input-group-text">
                              <input class="form-check-input mt-0" type="radio" aria-label="Radio button for following text input">
                           </div>
                           <input class="form-control" type="text" aria-label="Text input with radio button">
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-295">
                        <script class="language-markup" type="text/plain">
                           <div class="input-group mb-3">
                            <div class="input-group-text">
                              <input class="form-check-input mt-0" type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                            <input class="form-control" type="text" aria-label="Text input with checkbox">
                          </div>
                          <div class="input-group">
                            <div class="input-group-text">
                              <input class="form-check-input mt-0" type="radio" aria-label="Radio button for following text input">
                            </div>
                            <input class="form-control" type="text" aria-label="Text input with radio button">
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
            <div class="card-header"><strong>Input group</strong><span class="small ms-1">Multiple inputs</span></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">While multiple <code>&lt;input&gt;</code>s are supported visually, validation styles are only available for input groups with a single <code>&lt;input&gt;</code>.</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-567" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-567" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-567">
                        <div class="input-group"><span class="input-group-text">First and last name</span>
                           <input class="form-control" type="text" aria-label="First name">
                           <input class="form-control" type="text" aria-label="Last name">
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-567">
                        <script class="language-markup" type="text/plain">
                           <div class="input-group"><span class="input-group-text">First and last name</span>
                            <input class="form-control" type="text" aria-label="First name">
                            <input class="form-control" type="text" aria-label="Last name">
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
            <div class="card-header"><strong>Input group</strong><span class="small ms-1">Multiple addons</span></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">Multiple add-ons are supported and can be mixed with checkbox and radio input versions.</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-499" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-499" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-499">
                        <div class="input-group mb-3"><span class="input-group-text">$</span><span class="input-group-text">0.00</span>
                           <input class="form-control" type="text" aria-label="Dollar amount (with dot and two decimal places)">
                        </div>
                        <div class="input-group">
                           <input class="form-control" type="text" aria-label="Dollar amount (with dot and two decimal places)"><span class="input-group-text">$</span><span class="input-group-text">0.00</span>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-499">
                        <script class="language-markup" type="text/plain">
                           <div class="input-group mb-3"><span class="input-group-text">$</span><span class="input-group-text">0.00</span>
                            <input class="form-control" type="text" aria-label="Dollar amount (with dot and two decimal places)">
                          </div>
                          <div class="input-group">
                            <input class="form-control" type="text" aria-label="Dollar amount (with dot and two decimal places)"><span class="input-group-text">$</span><span class="input-group-text">0.00</span>
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
            <div class="card-header"><strong>Input group</strong><span class="small ms-1">Button addons</span></div>
            <div class="card-body">
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-949" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-949" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-949">
                        <div class="input-group mb-3">
                           <button class="btn btn-outline-secondary" id="button-addon1" type="button">Button</button>
                           <input class="form-control" type="text" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>
                        <div class="input-group mb-3">
                           <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                           <button class="btn btn-outline-secondary" id="button-addon2" type="button">Button</button>
                        </div>
                        <div class="input-group mb-3">
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                           <input class="form-control" type="text" placeholder="" aria-label="Example text with two button addons">
                        </div>
                        <div class="input-group">
                           <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-949">
                        <script class="language-markup" type="text/plain">
                           <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" id="button-addon1" type="button">Button</button>
                            <input class="form-control" type="text" placeholder aria-label="Example text with button addon" aria-describedby="button-addon1">
                          </div>
                          <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" id="button-addon2" type="button">Button</button>
                          </div>
                          <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                            <input class="form-control" type="text" placeholder aria-label="Example text with two button addons">
                          </div>
                          <div class="input-group">
                            <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                            <button class="btn btn-outline-secondary" type="button">Button</button>
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
            <div class="card-header"><strong>Input group</strong><span class="small ms-1">Buttons with dropdowns</span></div>
            <div class="card-body">
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-199" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-199" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-199">
                        <div class="input-group mb-3">
                           <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                           <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                              <li>
                                 <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Separated link</a></li>
                           </ul>
                           <input class="form-control" type="text" aria-label="Text input with dropdown button">
                        </div>
                        <div class="input-group mb-3">
                           <input class="form-control" type="text" aria-label="Text input with dropdown button">
                           <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                           <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                              <li>
                                 <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Separated link</a></li>
                           </ul>
                        </div>
                        <div class="input-group">
                           <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                           <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action before</a></li>
                              <li><a class="dropdown-item" href="#">Another action before</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                              <li>
                                 <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Separated link</a></li>
                           </ul>
                           <input class="form-control" type="text" aria-label="Text input with 2 dropdown buttons">
                           <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                           <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                              <li>
                                 <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Separated link</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-199">
                        <script class="language-markup" type="text/plain">
                           <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                            <input class="form-control" type="text" aria-label="Text input with dropdown button">
                          </div>
                          <div class="input-group mb-3">
                            <input class="form-control" type="text" aria-label="Text input with dropdown button">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                          </div>
                          <div class="input-group">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action before</a></li>
                              <li><a class="dropdown-item" href="#">Another action before</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                            <input class="form-control" type="text" aria-label="Text input with 2 dropdown buttons">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Dropdown</button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
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
            <div class="card-header"><strong>Input group</strong><span class="small ms-1">Segmented buttons</span></div>
            <div class="card-body">
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-52" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-52" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-52">
                        <div class="input-group mb-3">
                           <button class="btn btn-outline-secondary" type="button">Action</button>
                           <button class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" type="button" data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                           <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                              <li>
                                 <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Separated link</a></li>
                           </ul>
                           <input class="form-control" type="text" aria-label="Text input with segmented dropdown button">
                        </div>
                        <div class="input-group">
                           <input class="form-control" type="text" aria-label="Text input with segmented dropdown button">
                           <button class="btn btn-outline-secondary" type="button">Action</button>
                           <button class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" type="button" data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                           <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                              <li>
                                 <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Separated link</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-52">
                        <script class="language-markup" type="text/plain">
                           <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button">Action</button>
                            <button class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" type="button" data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                            <input class="form-control" type="text" aria-label="Text input with segmented dropdown button">
                          </div>
                          <div class="input-group">
                            <input class="form-control" type="text" aria-label="Text input with segmented dropdown button">
                            <button class="btn btn-outline-secondary" type="button">Action</button>
                            <button class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" type="button" data-coreui-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
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
            <div class="card-header"><strong>Custom forms</strong><span class="small ms-1">Custom select</span></div>
            <div class="card-body">
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1256" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1256" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1256">
                        <div class="input-group mb-3">
                           <label class="input-group-text" for="inputGroupSelect01">Options</label>
                           <select class="form-select" id="inputGroupSelect01">
                              <option selected="">Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                           </select>
                        </div>
                        <div class="input-group mb-3">
                           <select class="form-select" id="inputGroupSelect02">
                              <option selected="">Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                           </select>
                           <label class="input-group-text" for="inputGroupSelect02">Options</label>
                        </div>
                        <div class="input-group mb-3">
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                           <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                              <option selected="">Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                           </select>
                        </div>
                        <div class="input-group">
                           <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                              <option selected="">Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                           </select>
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-1256">
                        <script class="language-markup" type="text/plain">
                           <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                            <select class="form-select" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="input-group mb-3">
                            <select class="form-select" id="inputGroupSelect02">
                              <option selected>Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                            <label class="input-group-text" for="inputGroupSelect02">Options</label>
                          </div>
                          <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                            <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                              <option selected>Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="input-group">
                            <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                              <option selected>Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                            <button class="btn btn-outline-secondary" type="button">Button</button>
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
            <div class="card-header"><strong>Custom forms</strong><span class="small ms-1">Custom file input</span></div>
            <div class="card-body">
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1043" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1043" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1043">
                        <div class="input-group mb-3">
                           <label class="input-group-text" for="inputGroupFile01">Upload</label>
                           <input class="form-control" id="inputGroupFile01" type="file">
                        </div>
                        <div class="input-group mb-3">
                           <input class="form-control" id="inputGroupFile02" type="file">
                           <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <div class="input-group mb-3">
                           <button class="btn btn-outline-secondary" id="inputGroupFileAddon03" type="button">Button</button>
                           <input class="form-control" id="inputGroupFile03" type="file" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                        </div>
                        <div class="input-group">
                           <input class="form-control" id="inputGroupFile04" type="file" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                           <button class="btn btn-outline-secondary" id="inputGroupFileAddon04" type="button">Button</button>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-1043">
                        <script class="language-markup" type="text/plain">
                           <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input class="form-control" id="inputGroupFile01" type="file">
                          </div>
                          <div class="input-group mb-3">
                            <input class="form-control" id="inputGroupFile02" type="file">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                          </div>
                          <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" id="inputGroupFileAddon03" type="button">Button</button>
                            <input class="form-control" id="inputGroupFile03" type="file" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                          </div>
                          <div class="input-group">
                            <input class="form-control" id="inputGroupFile04" type="file" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <button class="btn btn-outline-secondary" id="inputGroupFileAddon04" type="button">Button</button>
                          </div>
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>