<div class="container-lg">

   <div class="card mb-4">
      <div class="card-header">
         <strong><?php echo lang('index_heading'); ?></strong>
         <span class="small ms-1"><?php echo lang('index_subheading'); ?></span>
      </div>
      <div class="card-body">
         <p class="text-medium-emphasis small">

         </p>
         <a href="<?php echo base_url('Users/create/'); ?>" class="btn btn-primary">
            <svg class="icon me-2">
               <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-playlist-add"></use>
            </svg>Add User
         </a>
         <div class="example">
            <div class="tab-content rounded-bottom">

               <table class="table table-striped table-hover">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col"><?php echo lang('index_email_th'); ?></th>
                        <th scope="col"><?php echo lang('index_fname_th'); ?></th>
                        <th scope="col"><?php echo lang('index_lname_th'); ?></th>
                        <th scope="col">Last Login</th>
                        <th scope="col"><?php echo lang('index_status_th'); ?></th>
                        <th scope="col"><?php echo lang('index_action_th'); ?></th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($users as $user) : ?>
                        <tr>
                           <th scope="row"><?php echo $user->id; ?></th>
                           <td><?php echo htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8'); ?></td>
                           <td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
                           <td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
                           <td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
                           <td><?php echo mdate('%Y-%m-%d %h:%i:%s', $user->last_login); ?></td>
                           <!-- <td><?php echo ($user->active) ? lang('index_active_link') : lang('index_inactive_link'); ?></td> -->
                           <td><?php echo ($user->active) ? anchor("Users/deactivate/" . $user->id, lang('index_active_link')) : anchor("Users/activate/" . $user->id, lang('index_inactive_link')); ?></td>
                           <td><?php echo anchor("User/" . $user->id, 'Edit'); ?></td>
                        </tr>
                     <?php endforeach; ?>

                  </tbody>
               </table>

            </div>
         </div>
      </div>
   </div>

</div>