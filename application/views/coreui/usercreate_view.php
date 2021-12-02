<div class="container-lg">
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong><?php echo lang('create_user_heading'); ?> </strong><span class="small ms-1"><?php echo lang('create_user_subheading'); ?></span></div>
            <div class="card-body">

               <!-- <div class="alert alert-warning" role="alert"> -->
               <?php echo $this->session->flashdata('message'); ?>
               <!-- </div> -->

               <div class="example">

                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-49">
                        <?php echo form_open('Users/create', array('class' => 'row')); ?>
                        <div class="col-md-6">
                           <label class="form-label" for="validationFirstName">
                              <?php echo lang('create_user_fname_label', 'first_name'); ?>
                           </label>
                           <!-- <div class="col-sm-9"> -->
                           <?php echo form_input($first_name); ?>
                           <!-- </div> -->
                           <?php if (form_error('first_name')) { ?>
                              <div id="validationFirstNameFeedback" class="invalid-feedback">
                                 <?php echo form_error('first_name', '<span>', '</span>'); ?>
                              </div>
                           <?php } ?>
                        </div>
                        <div class="col-md-6">
                           <label class="form-label" for="validationLastName">
                              <?php echo lang('create_user_lname_label', 'last_name'); ?>
                           </label>
                           <!-- <div class="col-sm-9"> -->
                           <?php echo form_input($last_name); ?>
                           <!-- </div> -->
                           <?php if (form_error('last_name')) { ?>
                              <div id="validationLastNameFeedback" class="invalid-feedback">
                                 <?php echo form_error('last_name', '<span>', '</span>'); ?>
                              </div>
                           <?php } ?>
                        </div>

                        <?php if ($identity_column !== 'email') { ?>
                           <div class="col-md-6">
                              <label class="form-label" for="validationIdentity">
                                 <?php echo lang('create_user_identity_label', 'identity'); ?>
                              </label>
                              <!-- <div class="col-sm-9"> -->
                              <?php echo form_input($identity); ?>
                              <!-- </div> -->
                              <?php if (form_error('identity')) { ?>
                                 <div id="validationIdentityFeedback" class="invalid-feedback">
                                    <?php echo form_error('identity', '<span>', '</span>'); ?>
                                 </div>
                              <?php } ?>
                           </div>
                        <?php } ?>

                        <div class="col-md-12 mt-3">
                           <label class="form-label" for="validationCompany">
                              <?php echo lang('create_user_company_label', 'company'); ?>
                           </label>
                           <!-- <div class="col-sm-9"> -->
                           <?php echo form_input($company); ?>
                           <!-- </div> -->
                           <?php if (form_error('company')) { ?>
                              <div id="validationCompanyFeedback" class="invalid-feedback">
                                 <?php echo form_error('company', '<span>', '</span>'); ?>
                              </div>
                           <?php } ?>
                        </div>
                        <div class="col-md-6 mt-3">
                           <label class="form-label" for="validationEmail">
                              <?php echo lang('create_user_email_label', 'company'); ?>
                           </label>
                           <!-- <div class="col-sm-9"> -->
                           <?php echo form_input($email); ?>
                           <!-- </div> -->
                           <?php if (form_error('email')) { ?>
                              <div id="validationEmailFeedback" class="invalid-feedback">
                                 <?php echo form_error('email', '<span>', '</span>'); ?>
                              </div>
                           <?php } ?>
                        </div>

                        <div class="col-md-6 mt-3">
                           <label class="form-label" for="validationPhone">
                              <?php echo lang('create_user_phone_label', 'phone'); ?>
                           </label>
                           <!-- <div class="col-sm-9"> -->
                           <?php echo form_input($phone); ?>
                           <!-- </div> -->
                           <?php if (form_error('phone')) { ?>
                              <div id="validationPhoneFeedback" class="invalid-feedback">
                                 <?php echo form_error('phone', '<span>', '</span>'); ?>
                              </div>
                           <?php } ?>
                        </div>
                        <div class="col-md-6 mt-3">
                           <label class="form-label" for="validationPassword">
                              <?php echo lang('create_user_password_label', 'password'); ?>
                           </label>
                           <!-- <div class="col-sm-9"> -->
                           <?php echo form_input($password); ?>
                           <!-- </div> -->
                           <?php if (form_error('password')) { ?>
                              <div id="validationPasswordFeedback" class="invalid-feedback">
                                 <?php echo form_error('password', '<span>', '</span>'); ?>
                              </div>
                           <?php } ?>
                        </div>
                        <div class="col-md-6 mt-3">
                           <label class="form-label" for="validationPasswordConfirm">
                              <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?>
                           </label>
                           <!-- <div class="col-sm-9"> -->
                           <?php echo form_input($password_confirm); ?>
                           <!-- </div> -->
                           <?php if (form_error('password_confirm')) { ?>
                              <div id="validationPasswordConfirmFeedback" class="invalid-feedback">
                                 <?php echo form_error('password_confirm', '<span>', '</span>'); ?>
                              </div>
                           <?php } ?>
                        </div>

                        <div class="col-12 mt-4">
                           <button class="btn btn-primary" type="submit">
                              <?php echo lang('create_user_submit_btn'); ?>
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