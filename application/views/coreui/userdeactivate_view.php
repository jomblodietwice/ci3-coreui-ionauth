<div class="container-lg">
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header">
               <strong><?php echo lang('deactivate_heading'); ?> </strong>
               <span class="small ms-1"></span>
            </div>
            <div class="card-body">
               <p class="text-medium-emphasis small"><?php echo sprintf(lang('deactivate_subheading'), $user->{$identity}); ?></p>
               <div class="example">

                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-49">
                        <?php echo form_open('Users/deactivate/' . $user->id); ?>

                        <fieldset class="row mb-3">
                           <!-- <legend class="col-form-label col-sm-3 pt-0"><?php echo lang('edit_user_groups_heading'); ?></legend> -->
                           <div class="col-sm-9">
                              <div class="form-check">
                                 <input class="form-check-input" id="gridCheck1" type="radio" name="confirm" value="yes" checked="checked">
                                 <label class="form-check-label" for="gridCheck1">
                                    <?php echo lang('deactivate_confirm_y_label', 'confirm'); ?>
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" id="gridCheck2" type="radio" name="confirm" value="no">
                                 <label class="form-check-label" for="gridCheck1">
                                    <?php echo lang('deactivate_confirm_n_label', 'confirm'); ?>
                                 </label>
                              </div>
                           </div>
                        </fieldset>

                        <?php echo form_hidden(['id' => $user->id]); ?>
                        <?php echo form_hidden($csrf); ?>

                        <button class="btn btn-primary" type="submit">
                           <?php echo lang('deactivate_submit_btn'); ?>
                        </button>
                        <?php echo form_close(); ?>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>


   </div>
</div>