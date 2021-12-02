<div class="container-lg">

   <div class="card mb-4">
      <div class="card-header"><strong>GROUPS</strong><span class="small ms-1">List</span></div>
      <div class="card-body">
         <p class="text-medium-emphasis small">
         </p>
         <a href="<?php echo base_url('Users/create_group/'); ?>" class="btn btn-primary">
            <svg class="icon me-2">
               <use xlink:href="<?php echo base_url('assets/coreui/'); ?>vendors/@coreui/icons/svg/free.svg#cil-playlist-add"></use>
            </svg>Add Group
         </a>
         <div class="example">
            <div class="tab-content rounded-bottom">

               <table class="table table-striped table-hover">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Group Name</th>
                        <th scope="col">Group Description</th>
                        <th scope="col"><?php echo lang('index_action_th'); ?></th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($groups as $group) : ?>
                        <tr>
                           <th scope="row"><?php echo $group->id; ?></th>
                           <td><?php echo htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8'); ?></td>
                           <td><?php echo htmlspecialchars($group->description, ENT_QUOTES, 'UTF-8'); ?></td>
                           <td><?php echo anchor("Group/" . $group->id, 'Edit'); ?></td>
                        </tr>
                     <?php endforeach; ?>

                  </tbody>
               </table>

            </div>
         </div>
      </div>
   </div>

</div>