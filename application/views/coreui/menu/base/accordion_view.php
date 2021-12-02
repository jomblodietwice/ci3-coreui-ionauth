<div class="container-lg">
   <div class="callout callout-info bg-white">CoreUI Accordion has been created as an extension of Bootstrap Accordion. Accordion is delivered with some new features, variants, and unique design that matches CoreUI Design System requirements.<br><br>For more information please visit our official
      <a href="https://coreui.io/docs/4.0/components/accordion/" target="_blank">documentation</a>.
   </div>
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Accordion</strong></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">Click the accordions below to expand/collapse the accordion content.</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1270" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-1270" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1270">
                        <div class="accordion" id="accordionExample">
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                 <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Accordion Item #1</button>
                              </h2>
                              <div class="accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne" data-coreui-parent="#accordionExample">
                                 <div class="accordion-body"><strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the<code>.accordion-body</code>, though the transition does limit overflow.</div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                 <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Accordion Item #2</button>
                              </h2>
                              <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-coreui-parent="#accordionExample">
                                 <div class="accordion-body"><strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the<code>.accordion-body</code>, though the transition does limit overflow.</div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                 <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Accordion Item #3</button>
                              </h2>
                              <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-coreui-parent="#accordionExample">
                                 <div class="accordion-body"><strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the<code>.accordion-body</code>, though the transition does limit overflow.</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-1270">
                        <script class="language-markup" type="text/plain">
                           <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Accordion Item #1</button>
                              </h2>
                              <div class="accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne" data-coreui-parent="#accordionExample">
                                <div class="accordion-body"><strong>This is the first item&apos;s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It&apos;s also worth noting that just about any HTML can go within the<code>.accordion-body</code>, though the transition does limit overflow.</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Accordion Item #2</button>
                              </h2>
                              <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-coreui-parent="#accordionExample">
                                <div class="accordion-body"><strong>This is the second item&apos;s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It&apos;s also worth noting that just about any HTML can go within the<code>.accordion-body</code>, though the transition does limit overflow.</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Accordion Item #3</button>
                              </h2>
                              <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-coreui-parent="#accordionExample">
                                <div class="accordion-body"><strong>This is the third item&apos;s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It&apos;s also worth noting that just about any HTML can go within the<code>.accordion-body</code>, though the transition does limit overflow.</div>
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
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong>Accordion</strong><span class="small ms-1">Flush</span></div>
            <div class="card-body">
               <p class="text-medium-emphasis small">Add <code>.accordion-flush</code> to remove the default <code>background-color</code>, some borders, and some rounded corners to render accordions edge-to-edge with their parent container.</p>
               <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-540" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                           </svg>Preview</a></li>
                     <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#code-540" role="tab">
                           <svg class="icon me-2">
                              <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                           </svg>Code</a></li>
                  </ul>
                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-540">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingOne">
                                 <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Accordion Item #1</button>
                              </h2>
                              <div class="accordion-collapse collapse" id="flush-collapseOne" aria-labelledby="flush-headingOne" data-coreui-parent="#accordionFlushExample">
                                 <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingTwo">
                                 <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Accordion Item #2</button>
                              </h2>
                              <div class="accordion-collapse collapse" id="flush-collapseTwo" aria-labelledby="flush-headingTwo" data-coreui-parent="#accordionFlushExample">
                                 <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingThree">
                                 <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Accordion Item #3</button>
                              </h2>
                              <div class="accordion-collapse collapse" id="flush-collapseThree" aria-labelledby="flush-headingThree" data-coreui-parent="#accordionFlushExample">
                                 <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane pt-1" role="tabpanel" id="code-540">
                        <script class="language-markup" type="text/plain">
                           <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Accordion Item #1</button>
                              </h2>
                              <div class="accordion-collapse collapse" id="flush-collapseOne" aria-labelledby="flush-headingOne" data-coreui-parent="#accordionFlushExample">
                                <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&apos;t heard of them accusamus labore sustainable VHS.</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Accordion Item #2</button>
                              </h2>
                              <div class="accordion-collapse collapse" id="flush-collapseTwo" aria-labelledby="flush-headingTwo" data-coreui-parent="#accordionFlushExample">
                                <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&apos;t heard of them accusamus labore sustainable VHS.</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Accordion Item #3</button>
                              </h2>
                              <div class="accordion-collapse collapse" id="flush-collapseThree" aria-labelledby="flush-headingThree" data-coreui-parent="#accordionFlushExample">
                                <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&apos;t heard of them accusamus labore sustainable VHS.</div>
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
   </div>
</div>