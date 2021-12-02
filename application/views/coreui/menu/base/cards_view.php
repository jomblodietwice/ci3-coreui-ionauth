<div class="container-lg">
   <div class="callout callout-info bg-white">CoreUI Card has been created as an extension of Bootstrap Card. Card is delivered with some new features, variants, and unique design that matches CoreUI Design System requirements.<br><br>For more information please visit our official
      <a href="https://coreui.io/docs/4.0/components/card/" target="_blank">documentation</a>.
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Example</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Cards are built with as little markup and styles as possible but still manage to deliver a bunch of control and customization. Built with flexbox, they offer easy alignment and mix well with other Bootstrap components. Cards have no top, left, and right margins by default, so use <a href="https://coreui.io/docs/4.0/utilities/spacing/">spacing utilities</a> as needed. They have no fixed width to start, so they’ll fill the full width of its parent.</p>
         <p class="text-medium-emphasis small">Below is an example of a basic card with mixed content and a fixed width. Cards have no fixed width to start, so they’ll naturally fill the full width of its parent element. This is easily customized with our various <a href="#sizing">sizing options</a>.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-999" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-999" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-999">
                  <div class="card" style="width: 18rem;"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                     <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-999">
                  <script class="language-markup" type="text/plain">
                     <div class="card" style="width: 18rem;"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Body</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">The main block of a card is the <code>.card-body</code>. Use it whenever you need a padded section within a card.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-587" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-587" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-587">
                  <div class="card">
                     <div class="card-body">This is some text within a card body.</div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-587">
                  <script class="language-markup" type="text/plain">
                     <div class="card">
                        <div class="card-body">This is some text within a card body.</div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Titles, text, and links</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Card titles are managed by adding <code>.card-title</code> to a <code> &lt;h*&gt;</code> tag. Identically, links are attached and collected next to each other by adding <code>.card-link</code> to an <code> &lt;a&gt;</code> tag.</p>
         <p class="text-medium-emphasis small">Subtitles are managed by adding a <code>.card-subtitle</code> to a <code> &lt;h*&gt;</code> tag. If the <code>.card-title</code> also, the <code>.card-subtitle</code> items are stored in a <code>.card-body</code> item, the card title, and subtitle are arranged rightly.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-99" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-99" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-99">
                  <div class="card" style="width: 18rem;">
                     <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-medium-emphasis">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link" href="#">Card link</a><a class="card-link" href="#">Another link</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-99">
                  <script class="language-markup" type="text/plain">
                     <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <h6 class="card-subtitle mb-2 text-medium-emphasis">Card subtitle</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link" href="#">Card link</a><a class="card-link" href="#">Another link</a>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Images</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small"><code>.card-img-top</code> places a picture to the top of the card. With <code>.card-text</code>, text can be added to the card. Text within <code>.card-text</code> can additionally be styled with the regular HTML tags.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1090" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1090" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1090">
                  <div class="card" style="width: 18rem;"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                     <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-1090">
                  <script class="language-markup" type="text/plain">
                     <div class="card" style="width: 18rem;"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">List groups</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Create lists of content in a card with a flush list group.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-719" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-719" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-719">
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="card">
                           <ul class="list-group list-group-flush">
                              <li class="list-group-item">An item</li>
                              <li class="list-group-item">A second item</li>
                              <li class="list-group-item">A third item</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="card">
                           <div class="card-header">Featured</div>
                           <ul class="list-group list-group-flush">
                              <li class="list-group-item">An item</li>
                              <li class="list-group-item">A second item</li>
                              <li class="list-group-item">A third item</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="card">
                           <ul class="list-group list-group-flush">
                              <li class="list-group-item">An item</li>
                              <li class="list-group-item">A second item</li>
                              <li class="list-group-item">A third item</li>
                           </ul>
                           <div class="card-footer">Card footer</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-719">
                  <script class="language-markup" type="text/plain">
                     <div class="row">
                        <div class="col-lg-4">
                          <div class="card">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">An item</li>
                              <li class="list-group-item">A second item</li>
                              <li class="list-group-item">A third item</li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="card">
                            <div class="card-header">Featured</div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">An item</li>
                              <li class="list-group-item">A second item</li>
                              <li class="list-group-item">A third item</li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="card">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">An item</li>
                              <li class="list-group-item">A second item</li>
                              <li class="list-group-item">A third item</li>
                            </ul>
                            <div class="card-footer">Card footer</div>
                          </div>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Kitchen sink</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Combine and match many content types to build the card you need, or throw everything in there. Shown below are image styles, blocks, text styles, and a list group—all wrapped in a fixed-width card.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-45" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-45" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-45">
                  <div class="card" style="width: 18rem;"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                     <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                     <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                     </ul>
                     <div class="card-body"><a class="card-link" href="#">Card link</a><a class="card-link" href="#">Another link</a></div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-45">
                  <script class="language-markup" type="text/plain">
                     <div class="card" style="width: 18rem;"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">An item</li>
                          <li class="list-group-item">A second item</li>
                          <li class="list-group-item">A third item</li>
                        </ul>
                        <div class="card-body"><a class="card-link" href="#">Card link</a><a class="card-link" href="#">Another link</a></div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Header and footer</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Add an optional header and/or footer within a card.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-623" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-623" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-623">
                  <div class="card mb-3">
                     <div class="card-header">Featured</div>
                     <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-623">
                  <script class="language-markup" type="text/plain">
                     <div class="card mb-3">
                        <div class="card-header">Featured</div>
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
         <p class="text-medium-emphasis small">Card headers can be styled by adding <code>.card-header</code> to <code> &lt;h*&gt;</code> elements.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-677" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-677" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-677">
                  <div class="card mb-3">
                     <h5 class="card-header">Featured</h5>
                     <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-677">
                  <script class="language-markup" type="text/plain">
                     <div class="card mb-3">
                        <h5 class="card-header">Featured</h5>
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-100" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-100" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-100">
                  <div class="card mb-3">
                     <div class="card-header">Quote</div>
                     <div class="card-body">
                        <blockquote class="blockquote mb-0">
                           <p>A well-known quote, contained in a blockquote element.</p>
                           <footer class="blockquote-footer">Someone famous in
                              <cite title="Source Title">Source Title</cite>
                           </footer>
                        </blockquote>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-100">
                  <script class="language-markup" type="text/plain">
                     <div class="card mb-3">
                        <div class="card-header">Quote</div>
                        <div class="card-body">
                          <blockquote class="blockquote mb-0">
                            <p>A well-known quote, contained in a blockquote element.</p>
                            <footer class="blockquote-footer">Someone famous in 
                              <cite title="Source Title">Source Title</cite>
                            </footer>
                          </blockquote>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-950" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-950" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-950">
                  <div class="card text-center">
                     <div class="card-header">Featured</div>
                     <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                     </div>
                     <div class="card-footer text-medium-emphasis">2 days ago</div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-950">
                  <script class="language-markup" type="text/plain">
                     <div class="card text-center">
                        <div class="card-header">Featured</div>
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                        </div>
                        <div class="card-footer text-medium-emphasis">2 days ago</div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Sizing - Using grid markup</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Using the grid, wrap cards in columns and rows as needed.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-640" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-640" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-640">
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-640">
                  <script class="language-markup" type="text/plain">
                     <div class="row">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Sizing - Using utilities</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Use some of <a href="https://coreui.io/docs/4.0/utilities/sizing/">available sizing utilities</a> to rapidly set a card’s width.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-625" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-625" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-625">
                  <div class="card w-75 mb-3">
                     <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Button</a>
                     </div>
                  </div>
                  <div class="card w-50">
                     <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Button</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-625">
                  <script class="language-markup" type="text/plain">
                     <div class="card w-75 mb-3">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Button</a>
                        </div>
                      </div>
                      <div class="card w-50">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Button</a>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Sizing - Using custom CSS</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Use custom CSS in your stylesheets or as inline styles to set a width.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-228" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-228" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-228">
                  <div class="card" style="width: 18rem;">
                     <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-228">
                  <script class="language-markup" type="text/plain">
                     <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Text alignment</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">You can instantly change the text arrangement of any card—in its whole or specific parts—with <a href="https://coreui.io/docs/4.0/utilities/text/#text-alignment">text align classes</a>.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1189" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1189" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1189">
                  <div class="card mb-3" style="width: 18rem;">
                     <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                     </div>
                  </div>
                  <div class="card mb-3 text-center" style="width: 18rem;">
                     <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                     </div>
                  </div>
                  <div class="card mb-3 text-end" style="width: 18rem;">
                     <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-1189">
                  <script class="language-markup" type="text/plain">
                     <div class="card mb-3" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                        </div>
                      </div>
                      <div class="card mb-3 text-center" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                        </div>
                      </div>
                      <div class="card mb-3 text-end" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Navigation</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Add some navigation to a card’s header (or block) with Bootstrap’s <a href="https://coreui.io/docs/4.0/components/navs-tabs/">nav components</a>.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1294" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1294" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1294">
                  <div class="card text-center">
                     <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                           <li class="nav-item"><a class="nav-link active" aria-current="true" href="#">Active</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                           <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></li>
                        </ul>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-1294">
                  <script class="language-markup" type="text/plain">
                     <div class="card text-center">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item"><a class="nav-link active" aria-current="true" href="#">Active</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                            <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-908" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-908" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-908">
                  <div class="card text-center">
                     <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                           <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                           <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></li>
                        </ul>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-908">
                  <script class="language-markup" type="text/plain">
                     <div class="card text-center">
                        <div class="card-header">
                          <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                            <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Image caps</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Similar to headers and footers, cards can include top and bottom “image caps”—images at the top or bottom of a card.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1229" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1229" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1229">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="card mb-3"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                           </div><img class="card-img-bottom" src="assets/img/full.jpg" alt="">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-1229">
                  <script class="language-markup" type="text/plain">
                     <div class="row">
                        <div class="col-md-6">
                          <div class="card mb-3"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                            </div><img class="card-img-bottom" src="assets/img/full.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Image overlays</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Adapt an image into a background and overlay your text. Depending on the image, you may need additional styles or utilities.</p>
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
                  <div class="card bg-dark text-white"><img class="card-img" src="assets/img/full.jpg" alt="">
                     <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-1080">
                  <script class="language-markup" type="text/plain">
                     <div class="card bg-dark text-white"><img class="card-img" src="assets/img/full.jpg" alt="">
                        <div class="card-img-overlay">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Horizontal</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Using a combination of grid and utility classes, cards can be made horizontal in a mobile-friendly and responsive way. In the example below, we remove the grid gutters with <code>.g-0</code> and use <code>.col-md-*</code> classes to make the card horizontal at the <code>md</code> breakpoint. Further adjustments may be needed depending on your card content.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1061" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1061" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1061">
                  <div class="card">
                     <div class="row g-0">
                        <div class="col-md-4"><img class="card-img" src="assets/img/full.jpg" alt=""></div>
                        <div class="col-md-8">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-1061">
                  <script class="language-markup" type="text/plain">
                     <div class="card">
                        <div class="row g-0">
                          <div class="col-md-4"><img class="card-img" src="assets/img/full.jpg" alt=""></div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Card styles - Background and color</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">
            Cards include various options for customizing their backgrounds, borders, and color.
            Use <a href="https://coreui.io/docs/4.0/utilities/colors/">text color</a> and <a href="https://coreui.io/docs/4.0/utilities/background/">background utilities</a> to change the appearance of a card.
         </p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-946" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-946" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-946">
                  <div class="row">
                     <div class="col-xl-4">
                        <div class="card text-white bg-primary mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body">
                              <h5 class="card-title">Primary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card text-white bg-secondary mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body">
                              <h5 class="card-title">Secondary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card text-white bg-success mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body">
                              <h5 class="card-title">Success card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card text-white bg-danger mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body">
                              <h5 class="card-title">Danger card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card text-white bg-warning mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body">
                              <h5 class="card-title">Warning card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card text-white bg-info mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body">
                              <h5 class="card-title">Info card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card text-dark bg-light mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body">
                              <h5 class="card-title">Light card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card text-white bg-dark mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body">
                              <h5 class="card-title">Dark card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-946">
                  <script class="language-markup" type="text/plain">
                     <div class="row">
                        <div class="col-xl-4">
                          <div class="card text-white bg-primary mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Primary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card text-white bg-secondary mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Secondary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card text-white bg-success mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Success card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card text-white bg-danger mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Danger card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card text-white bg-warning mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Warning card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card text-white bg-info mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Info card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card text-dark bg-light mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Light card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card text-white bg-dark mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Dark card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Card styles - Border</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Use <a href="https://coreui.io/docs/4.0/utilities/borders/">border utilities</a> to change just the <code>border-color</code> of a card. Note that you can put <code>.text-{color}</code> classes on the parent <code>.card</code> or a subset of the card’s contents as shown below.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-571" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-571" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-571">
                  <div class="row">
                     <div class="col-xl-4">
                        <div class="card border-primary mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body text-primary">
                              <h5 class="card-title">Primary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card border-secondary mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body text-secondary">
                              <h5 class="card-title">Secondary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card border-success mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body text-success">
                              <h5 class="card-title">Success card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card border-danger mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body text-danger">
                              <h5 class="card-title">Danger card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card border-warning mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body text-warning">
                              <h5 class="card-title">Warning card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card border-info mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body text-info">
                              <h5 class="card-title">Info card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card border-light mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body">
                              <h5 class="card-title">Light card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card border-dark mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body text-dark">
                              <h5 class="card-title">Dark card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-571">
                  <script class="language-markup" type="text/plain">
                     <div class="row">
                        <div class="col-xl-4">
                          <div class="card border-primary mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body text-primary">
                              <h5 class="card-title">Primary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4"> 
                          <div class="card border-secondary mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body text-secondary">
                              <h5 class="card-title">Secondary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card border-success mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body text-success">
                              <h5 class="card-title">Success card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4"> 
                          <div class="card border-danger mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body text-danger">
                              <h5 class="card-title">Danger card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card border-warning mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body text-warning">
                              <h5 class="card-title">Warning card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card border-info mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body text-info">
                              <h5 class="card-title">Info card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card border-light mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Light card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card border-dark mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body text-dark">
                              <h5 class="card-title">Dark card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Top border</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Use <a href="https://coreui.io/docs/4.0/utilities/borders/">border utilities</a> to change just the <code>border-top-color</code> of a card. Note that you can put <code>.text-{color}</code> classes on the parent <code>.card</code> or a subset of the card’s contents as shown below.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-910" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-910" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-910">
                  <div class="row">
                     <div class="col-xl-4">
                        <div class="card border-top-primary border-top-3 mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body text-primary">
                              <h5 class="card-title">Primary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card border-top-secondary border-top-3 mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body text-secondary">
                              <h5 class="card-title">Secondary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card border-top-success border-top-3 mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body text-success">
                              <h5 class="card-title">Success card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card border-top-danger border-top-3 mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body text-danger">
                              <h5 class="card-title">Danger card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card border-top-warning border-top-3 mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body text-warning">
                              <h5 class="card-title">Warning card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card border-top-info border-top-3 mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body text-info">
                              <h5 class="card-title">Info card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card border-top-light border-top-3 mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body">
                              <h5 class="card-title">Light card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="card border-top-dark border-top-3 mb-3">
                           <div class="card-header">Header</div>
                           <div class="card-body text-dark">
                              <h5 class="card-title">Dark card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-910">
                  <script class="language-markup" type="text/plain">
                     <div class="row">
                        <div class="col-xl-4">
                          <div class="card border-top-primary border-top-3 mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body text-primary">
                              <h5 class="card-title">Primary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card border-top-secondary border-top-3 mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body text-secondary">
                              <h5 class="card-title">Secondary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card border-top-success border-top-3 mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body text-success">
                              <h5 class="card-title">Success card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card border-top-danger border-top-3 mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body text-danger">
                              <h5 class="card-title">Danger card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card border-top-warning border-top-3 mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body text-warning">
                              <h5 class="card-title">Warning card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card border-top-info border-top-3 mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body text-info">
                              <h5 class="card-title">Info card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card border-top-light border-top-3 mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Light card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="card border-top-dark border-top-3 mb-3">
                            <div class="card-header">Header</div>
                            <div class="card-body text-dark">
                              <h5 class="card-title">Dark card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Mixins utilities</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">You are able to adjust the borders on the card elements as needed, and even exclude their <code>background-color</code> with <code>.bg-transparent</code>.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1211" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1211" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1211">
                  <div class="card border-success mb-3" style="max-width: 18rem;">
                     <div class="card-header bg-transparent border-success">Header</div>
                     <div class="card-body text-success">
                        <h5 class="card-title">Success card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                     <div class="card-footer bg-transparent border-success">Footer</div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-1211">
                  <script class="language-markup" type="text/plain">
                     <div class="card border-success mb-3" style="max-width: 18rem;">
                        <div class="card-header bg-transparent border-success">Header</div>
                        <div class="card-body text-success">
                          <h5 class="card-title">Success card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer bg-transparent border-success">Footer</div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Card groups</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Use card groups to render cards as a single, attached element with equal width and height columns. Card groups start off stacked and use <code>display: flex;</code> to become attached with uniform dimensions starting at the <code>sm</code> breakpoint.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-32" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-32" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-32">
                  <div class="card-group">
                     <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                        <div class="card-body">
                           <h5 class="card-title">Card title</h5>
                           <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                           <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                        </div>
                     </div>
                     <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                        <div class="card-body">
                           <h5 class="card-title">Card title</h5>
                           <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                           <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                        </div>
                     </div>
                     <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                        <div class="card-body">
                           <h5 class="card-title">Card title</h5>
                           <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                           <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-32">
                  <script class="language-markup" type="text/plain">
                     <div class="card-group">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
         <p class="text-medium-emphasis small">When using card groups with footers, their content will automatically line up.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-374" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-374" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-374">
                  <div class="card-group">
                     <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                        <div class="card-body">
                           <h5 class="card-title">Card title</h5>
                           <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                     </div>
                     <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                        <div class="card-body">
                           <h5 class="card-title">Card title</h5>
                           <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                     </div>
                     <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                        <div class="card-body">
                           <h5 class="card-title">Card title</h5>
                           <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-374">
                  <script class="language-markup" type="text/plain">
                     <div class="card-group">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                          <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                        </div>
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                          </div>
                          <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                        </div>
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          </div>
                          <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card mb-4">
      <div class="card-header"><strong>Card</strong><span class="small ms-1">Grid cards</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">Use the Bootstrap grid system and its <a href="https://coreui.io/docs/4.0/layout/grid/#row-columns"><code>.row-cols</code> classes</a> to control how many grid columns (wrapped around your cards) you show per row. For example, here’s <code>.row-cols-1</code> laying out the cards on one column, and <code>.row-cols-md-2</code> splitting four cards to equal width across multiple rows, from the medium breakpoint up.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-195" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-195" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-195">
                  <div class="row row-cols-1 row-cols-md-2 g-4">
                     <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-195">
                  <script class="language-markup" type="text/plain">
                     <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                          <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
         <p class="text-medium-emphasis small">Change it to <code>.row-cols-3</code> and you’ll see the fourth card wrap.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-184" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-184" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-184">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                     <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-184">
                  <script class="language-markup" type="text/plain">
                     <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                          <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
         <p class="text-medium-emphasis small">When you need equal height, add <code>.h-100</code> to the cards. If you want equal heights by default, you can set <code>$card-height: 100%</code> in Sass.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-483" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-483" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-483">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                     <div class="col">
                        <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a short card.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-483">
                  <script class="language-markup" type="text/plain">
                     <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                          <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a short card.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
         <p class="text-medium-emphasis small">Just like with card groups, card footers will automatically line up.</p>
         <div class="example">
            <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1040" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                     </svg>Preview</a></li>
               <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1040" role="tab">
                     <svg class="icon me-2">
                        <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                     </svg>Code</a></li>
            </ul>
            <div class="tab-content rounded-bottom">
               <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1040">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                     <div class="col">
                        <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                           </div>
                           <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                           </div>
                           <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                           <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                           </div>
                           <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane pt-1" role="tabpanel" id="code-1040">
                  <script class="language-markup" type="text/plain">
                     <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                          <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                          </div>
                        </div>
                      </div>
                    </script>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>