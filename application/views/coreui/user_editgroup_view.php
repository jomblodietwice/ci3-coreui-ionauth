<div class="container-lg">
   <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header"><strong><?php echo lang('edit_group_heading'); ?> </strong><span class="small ms-1"><?php echo lang('edit_group_subheading'); ?></span></div>
            <div class="card-body">

               <!-- <div class="alert alert-warning" role="alert"> -->
               <?php echo $this->session->flashdata('message'); ?>
               <!-- </div> -->

               <div class="example">

                  <div class="tab-content rounded-bottom">
                     <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-49">
                        <?php echo form_open(current_url(), array('class' => 'row')); ?>
                        <div class="col-md-6">
                           <label form-label" for="validationGroupName">
                              <?php echo lang('edit_group_name_label', 'group_name'); ?>
                           </label>
                           <?php echo form_input($group_name); ?>
                           <?php if (form_error('group_name')) { ?>
                              <div id="validationGroupNameFeedback" class="invalid-feedback">
                                 <?php echo form_error('group_name', '<span>', '</span>'); ?>
                              </div>
                           <?php } ?>
                        </div>
                        <div class="col-md-6">
                           <label form-label" for="groupDescription">
                              <?php echo lang('edit_group_desc_label', 'description'); ?>
                           </label>
                           <?php echo form_input($group_description); ?>
                        </div>
                        <br>
                        <div class="col-md-12 mt-4">
                           <button class="btn btn-primary" type="submit">
                              <?php echo lang('edit_group_submit_btn'); ?>
                           </button>
                           <a href="<?php echo base_url('Users/group_list'); ?>" class="btn btn-light">Back to Group list</a>
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