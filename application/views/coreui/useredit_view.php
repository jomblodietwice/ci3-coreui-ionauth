<div class="container-lg">
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong><?php echo lang('edit_user_heading'); ?> </strong><span class="small ms-1"><?php echo lang('edit_user_subheading'); ?></span></div>
            <div class="card-body">

               <!-- <div class="alert alert-warning" role="alert"> -->
               <?php echo $this->session->flashdata('message'); ?>
               <!-- </div> -->

               <div class="example">

                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-49">
                        <?php echo form_open(uri_string(), array('class' => 'row')); ?>
                        <div class="col-md-6">
                           <label class="form-label" for="validationFirstName">
                              <?php echo lang('edit_user_fname_label', 'first_name'); ?>
                           </label>
                           <?php echo form_input($first_name); ?>
                           <?php if (form_error('first_name')) { ?>
                              <div id="validationFirstNameFeedback" class="invalid-feedback">
                                 <?php echo form_error('first_name', '<span>', '</span>'); ?>
                              </div>
                           <?php } ?>
                        </div>
                        <div class="col-md-6">
                           <label class="form-label" for="validationLastName">
                              <?php echo lang('edit_user_lname_label', 'last_name'); ?>
                           </label>
                           <?php echo form_input($last_name); ?>
                           <?php if (form_error('last_name')) { ?>
                              <div id="validationLastNameFeedback" class="invalid-feedback">
                                 <?php echo form_error('last_name', '<span>', '</span>'); ?>
                              </div>
                           <?php } ?>
                        </div>
                        <div class="col-md-6 mt-3">
                           <label class="form-label" for="validationCompany">
                              <?php echo lang('edit_user_company_label', 'company'); ?>
                           </label>
                           <?php echo form_input($company); ?>
                           <?php if (form_error('company')) { ?>
                              <div id="validationCompanyFeedback" class="invalid-feedback">
                                 <?php echo form_error('company', '<span>', '</span>'); ?>
                              </div>
                           <?php } ?>
                        </div>
                        <div class="col-md-6 mt-3">
                           <label class="form-label" for="validationPhone">
                              <?php echo lang('edit_user_phone_label', 'phone'); ?>
                           </label>
                           <?php echo form_input($phone); ?>
                           <?php if (form_error('phone')) { ?>
                              <div id="validationPhoneFeedback" class="invalid-feedback">
                                 <?php echo form_error('phone', '<span>', '</span>'); ?>
                              </div>
                           <?php } ?>
                        </div>
                        <div class="col-md-6 mt-3">
                           <label class="form-label" for="validationPassword">
                              <?php echo lang('edit_user_password_label', 'password'); ?>
                           </label>
                           <?php echo form_input($password); ?>
                        </div>
                        <div class="col-md-6 mt-3">
                           <label class="form-label" for="validationPasswordConfirm">
                              <?php echo lang('edit_user_password_confirm_label', 'password_confirm'); ?>
                           </label>
                           <?php echo form_input($password_confirm); ?>
                        </div>

                        <fieldset class="col-md-6 mt-3">
                           <legend class="col-form-label col-sm-3 pt-0"><?php echo lang('edit_user_groups_heading'); ?></legend>
                           <div class="col-sm-9">
                              <?php foreach ($groups as $group) : ?>
                                 <div class="form-check">
                                    <input class="form-check-input" id="gridCheck1" type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>" <?php echo (in_array($group, $currentGroups)) ? 'checked="checked"' : null; ?>">
                                    <label class="form-check-label" for="gridCheck1">
                                       <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                                    </label>
                                 </div>
                              <?php endforeach ?>
                           </div>
                        </fieldset>

                        <?php echo form_hidden('id', $user->id); ?>
                        <?php echo form_hidden($csrf); ?>

                        <div class="col-12 mt-4">
                           <button class="btn btn-primary" type="submit">
                              <?php echo lang('edit_user_submit_btn'); ?>
                           </button>
                           <a href="<?php echo base_url('Users/lists'); ?>" class="btn btn-light">Back to Users list</a>
                        </div>
                        <?php echo form_close(); ?>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>


   </div>
</div>