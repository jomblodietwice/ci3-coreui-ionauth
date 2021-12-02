<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends MY_Controller
{
   public function __construct()
   {
      parent::__construct();

      $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

      $this->lang->load('auth');
   }

   public function index()
   {
      $this->login();
   }

   public function login()
   {
      if ($this->ion_auth->logged_in()) {
         if (!$this->session->userdata('previous_url')) {
            redirect('Dashboard', 'refresh');
         } else {
            redirect($this->session->userdata('previous_url'), 'refresh');
         }
      }

      $this->data['titlePage'] = lang('login_heading');

      // validate form input
      $this->form_validation->set_rules('identity', str_replace(':', '', lang('login_identity_label')), 'required');
      $this->form_validation->set_rules('password', str_replace(':', '', lang('login_password_label')), 'required');

      if ($this->form_validation->run() === TRUE) {
         // check to see if the user is logging in
         // check for "remember me"
         $remember = (bool)$this->input->post('remember');

         if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
            //if the login is successful
            //redirect them back to the home page
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->ion_auth->messages() . '</div>');
            if (!$this->session->userdata('previous_url')) {
               redirect('Dashboard', 'refresh');
            } else {
               redirect($this->session->userdata('previous_url'), 'refresh');
            }
         } else {
            // if the login was un-successful
            // redirect them back to the login page
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->ion_auth->errors() . '</div>');
            redirect('Users' . DIRECTORY_SEPARATOR . 'login', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
         }
      } else {
         // the user is not logging in so display the login page
         // set the flash data error message if there is one
         $this->data['errLogin'] = (validation_errors()) ? '<div class="alert alert-warning" role="alert">' . validation_errors() . '</div>' : $this->session->flashdata('message');
         $this->session->set_flashdata($this->data['errLogin']);

         $this->render('coreui' . DIRECTORY_SEPARATOR . 'login_view', NULL);
      }
   }

   public function logout()
   {
      // log the user out
      $this->ion_auth->logout();

      // redirect them to the login page
      redirect('Users' . DIRECTORY_SEPARATOR . 'login', 'refresh');
   }

   public function lists()
   {
      if (!$this->ion_auth->is_admin()) {
         // redirect them to the login page
         redirect('Dashboard', 'refresh');
      }

      //list the users
      $this->data['users'] = $this->ion_auth->users()->result();

      //USAGE NOTE - you can do more complicated queries like this
      //$this->data['users'] = $this->ion_auth->where('field', 'value')->users()->result();

      foreach ($this->data['users'] as $k => $user) {
         $this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
      }

      $this->render('userlist_view');
   }

   /**
    * @return array A CSRF key-value pair
    */
   public function _get_csrf_nonce()
   {
      $this->load->helper('string');
      $key = random_string('alnum', 8);
      $value = random_string('alnum', 20);
      $this->session->set_flashdata('csrfkey', $key);
      $this->session->set_flashdata('csrfvalue', $value);

      return [$key => $value];
   }

   /**
    * @return bool Whether the posted CSRF token matches
    */
   public function _valid_csrf_nonce()
   {
      $csrfkey = $this->input->post($this->session->flashdata('csrfkey'));
      if ($csrfkey && $csrfkey === $this->session->flashdata('csrfvalue')) {
         return TRUE;
      }
      return FALSE;
   }

   /**
    * Redirect a user checking if is admin
    */
   public function redirectUser()
   {
      if ($this->ion_auth->is_admin()) {
         redirect('Users', 'refresh');
      }
      redirect('/', 'refresh');
   }

   /**
    * Create a new user
    */
   public function create()
   {
      if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
         redirect('Users' . DIRECTORY_SEPARATOR . 'lists', 'refresh');
      }

      $this->data['title'] = lang('create_user_heading');

      $tables = $this->config->item('tables', 'ion_auth');
      $identity_column = $this->config->item('identity', 'ion_auth');
      $this->data['identity_column'] = $identity_column;

      // validate form input
      $this->form_validation->set_rules('first_name', lang('create_user_validation_fname_label'), 'trim|required|min_length[3]|max_length[50]');
      $this->form_validation->set_rules('last_name', lang('create_user_validation_lname_label'), 'trim|required|min_length[3]|max_length[50]');
      if ($identity_column !== 'email') {
         $this->form_validation->set_rules('identity', lang('create_user_validation_identity_label'), 'trim|required|is_unique[' . $tables['users'] . '.' . $identity_column . ']|max_length[100]');
         $this->form_validation->set_rules('email', lang('create_user_validation_email_label'), 'trim|required|valid_email');
      } else {
         $this->form_validation->set_rules('email', lang('create_user_validation_email_label'), 'trim|required|valid_email|is_unique[' . $tables['users'] . '.email]');
      }
      $this->form_validation->set_rules('phone', lang('create_user_validation_phone_label'), 'trim|max_length[20]');
      $this->form_validation->set_rules('company', lang('create_user_validation_company_label'), 'trim|max_length[100]');
      $this->form_validation->set_rules('password', lang('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[password_confirm]');
      $this->form_validation->set_rules('password_confirm', lang('create_user_validation_password_confirm_label'), 'required');

      if ($this->form_validation->run() === TRUE) {
         $email = strtolower($this->input->post('email'));
         $identity = ($identity_column === 'email') ? $email : $this->input->post('identity');
         $password = $this->input->post('password');

         $additional_data = [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'company' => $this->input->post('company'),
            'phone' => $this->input->post('phone'),
         ];
      }

      if ($this->form_validation->run() === TRUE && $this->ion_auth->register($identity, $password, $email, $additional_data)) {
         // check to see if we are creating the user
         // redirect them back to the admin page
         $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->ion_auth->messages() . '</div>');
         redirect('Users' . DIRECTORY_SEPARATOR . 'create', 'refresh');
      } else {
         // display the create user form
         // set the flash data error message if there is one
         // $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));         

         $this->data['first_name'] = [
            'name' => 'first_name',
            'id' => 'validationFirstName',
            'type' => 'text',
            'value' => $this->form_validation->set_value('first_name'),
            'class'  => (form_error('first_name')) ? 'form-control is-invalid' : 'form-control ',
            'aria-describedby' => (form_error('first_name')) ? 'validationFirstNameFeedback' : '',
            'required' => null,
         ];
         $this->data['last_name'] = [
            'name' => 'last_name',
            'id' => 'validationLastName',
            'type' => 'text',
            'value' => $this->form_validation->set_value('last_name'),
            'class'  => (form_error('last_name')) ? 'form-control is-invalid' : 'form-control ',
            'aria-describedby' => (form_error('last_name')) ? 'validationLastNameFeedback' : '',
            'required' => null,
         ];
         $this->data['identity'] = [
            'name' => 'identity',
            'id' => 'validationIdentity',
            'type' => 'text',
            'value' => $this->form_validation->set_value('identity'),
            'class'  => (form_error('identity')) ? 'form-control is-invalid' : 'form-control ',
            'aria-describedby' => (form_error('identity')) ? 'validationIdentityFeedback' : '',
         ];
         $this->data['email'] = [
            'name' => 'email',
            'id' => 'validationEmail',
            'type' => 'text',
            'value' => $this->form_validation->set_value('email'),
            'class'  => (form_error('email')) ? 'form-control is-invalid' : 'form-control ',
            'aria-describedby' => (form_error('email')) ? 'validationEmailFeedback' : '',
            'required' => null,
         ];
         $this->data['company'] = [
            'name' => 'company',
            'id' => 'validationCompany',
            'type' => 'text',
            'value' => $this->form_validation->set_value('company'),
            'class'  => (form_error('company')) ? 'form-control is-invalid' : 'form-control ',
            'aria-describedby' => (form_error('company')) ? 'validationCompanyFeedback' : '',
         ];
         $this->data['phone'] = [
            'name' => 'phone',
            'id' => 'validationPhone',
            'type' => 'text',
            'value' => $this->form_validation->set_value('phone'),
            'class'  => (form_error('phone')) ? 'form-control is-invalid' : 'form-control ',
            'aria-describedby' => (form_error('phone')) ? 'validationPhoneFeedback' : '',
         ];
         $this->data['password'] = [
            'name' => 'password',
            'id' => 'validationPassword',
            'type' => 'password',
            'value' => $this->form_validation->set_value('password'),
            'class'  => (form_error('password')) ? 'form-control is-invalid' : 'form-control ',
            'aria-describedby' => (form_error('password')) ? 'validationPasswordFeedback' : '',
            'required' => null,
         ];
         $this->data['password_confirm'] = [
            'name' => 'password_confirm',
            'id' => 'validationPasswordConfirm',
            'type' => 'password',
            'value' => $this->form_validation->set_value('password_confirm'),
            'class'  => (form_error('password_confirm')) ? 'form-control is-invalid' : 'form-control ',
            'aria-describedby' => (form_error('password_confirm')) ? 'validationPasswordConfirmFeedback' : '',
            'required' => null,
         ];

         $this->render('usercreate_view');
      }
   }

   public function edit($id)
   {
      // hanya admin yang boleh masuk ke controller ini
      if (!$this->ion_auth->logged_in() || (!$this->ion_auth->is_admin() && !($this->ion_auth->user()->row()->id == $id))) {
         redirect('Users' . DIRECTORY_SEPARATOR . 'lists', 'refresh');
      }

      $this->data['id'] = $id;

      $this->data['titlePage'] = lang('edit_user_heading');

      $user = $this->ion_auth->user($id)->row();
      if (is_null($user)) {
         show_error('User not found.');
      }
      $groups = $this->ion_auth->groups()->result_array();
      $currentGroups = $this->ion_auth->get_users_groups($id)->result_array();

      //USAGE NOTE - you can do more complicated queries like this
      //$groups = $this->ion_auth->where(['field' => 'value'])->groups()->result_array();

      // validate form input
      $this->form_validation->set_rules('first_name', lang('edit_user_validation_fname_label'), 'trim|required|max_length[50]');
      $this->form_validation->set_rules('last_name', lang('edit_user_validation_lname_label'), 'trim|required|max_length[50]');
      $this->form_validation->set_rules('phone', lang('edit_user_validation_phone_label'), 'trim|max_length[20]');
      $this->form_validation->set_rules('company', lang('edit_user_validation_company_label'), 'trim|max_length[100]');

      if (isset($_POST) && !empty($_POST)) {
         // do we have a valid request?
         if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id')) {
            show_error(lang('error_csrf'));
         }

         // update the password if it was posted
         if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', lang('edit_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[password_confirm]');
            $this->form_validation->set_rules('password_confirm', lang('edit_user_validation_password_confirm_label'), 'required');
         }

         if ($this->form_validation->run() === TRUE) {
            $data = [
               'first_name' => $this->input->post('first_name'),
               'last_name' => $this->input->post('last_name'),
               'company' => $this->input->post('company'),
               'phone' => $this->input->post('phone'),
            ];

            // update the password if it was posted
            if ($this->input->post('password')) {
               $data['password'] = $this->input->post('password');
            }

            // Only allow updating groups if user is admin
            if ($this->ion_auth->is_admin()) {
               // Update the groups user belongs to
               $this->ion_auth->remove_from_group('', $id);

               $groupData = $this->input->post('groups');
               if (isset($groupData) && !empty($groupData)) {
                  foreach ($groupData as $grp) {
                     $this->ion_auth->add_to_group($grp, $id);
                  }
               }
            }

            // check to see if we are updating the user
            if ($this->ion_auth->update($user->id, $data)) {
               // redirect them back to the admin page if admin, or to the base url if non admin
               $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->ion_auth->messages() . '</div>');
               // $this->redirectUser();
               redirect('Users' . DIRECTORY_SEPARATOR . 'edit' . DIRECTORY_SEPARATOR . $id, 'refresh');
            } else {
               // redirect them back to the admin page if admin, or to the base url if non admin
               $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->ion_auth->errors() . '</div>');
               // $this->redirectUser();
               redirect('Users' . DIRECTORY_SEPARATOR . 'edit' . DIRECTORY_SEPARATOR . $id, 'refresh');
            }
         }
      }

      // display the edit user form
      $this->data['csrf'] = $this->_get_csrf_nonce();

      // set the flash data error message if there is one
      // $this->data['message'] = ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message'));

      // pass the user to the view
      $this->data['user'] = $user;
      $this->data['groups'] = $groups;
      $this->data['currentGroups'] = $currentGroups;

      $this->data['first_name'] = [
         'name'  => 'first_name',
         'id'    => 'validationFirstName',
         'type'  => 'text',
         'value' => $this->form_validation->set_value('first_name', $user->first_name),
         'class'  => (form_error('first_name')) ? 'form-control is-invalid' : 'form-control ',
         'aria-describedby' => (form_error('first_name')) ? 'validationFirstNameFeedback' : '',
         'required' => null,
      ];
      $this->data['last_name'] = [
         'name'  => 'last_name',
         'id'    => 'validationLastName',
         'type'  => 'text',
         'value' => $this->form_validation->set_value('last_name', $user->last_name),
         'class'  => (form_error('last_name')) ? 'form-control is-invalid' : 'form-control ',
         'aria-describedby' => (form_error('last_name')) ? 'validationLastNameFeedback' : '',
         'required' => null,
      ];
      $this->data['company'] = [
         'name'  => 'company',
         'id'    => 'validationCompany',
         'type'  => 'text',
         'value' => $this->form_validation->set_value('company', $user->company),
         'class'  => (form_error('company')) ? 'form-control is-invalid' : 'form-control ',
         'aria-describedby' => (form_error('company')) ? 'validationCompanyFeedback' : '',
      ];
      $this->data['phone'] = [
         'name'  => 'phone',
         'id'    => 'validationPhone',
         'type'  => 'text',
         'value' => $this->form_validation->set_value('phone', $user->phone),
         'class'  => (form_error('phone')) ? 'form-control is-invalid' : 'form-control ',
         'aria-describedby' => (form_error('phone')) ? 'validationPhoneFeedback' : '',
      ];
      $this->data['password'] = [
         'name' => 'password',
         'id'   => 'validationPassword',
         'type' => 'password',
         'class'  => (form_error('password')) ? 'form-control is-invalid' : 'form-control ',
         'aria-describedby' => (form_error('password')) ? 'validationPasswordFeedback' : '',
      ];
      $this->data['password_confirm'] = [
         'name' => 'password_confirm',
         'id'   => 'validationPasswordConfirm',
         'type' => 'password',
         'class'  => (form_error('password_confirm')) ? 'form-control is-invalid' : 'form-control ',
         'aria-describedby' => (form_error('password_confirm')) ? 'validationPasswordConfirmFeedback' : '',
      ];

      $this->render('useredit_view');
   }

   /**
    * Deactivate the user
    *
    * @param int|string|null $id The user ID
    */
   public function deactivate($id = NULL)
   {
      if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
         // arahkan ke Dashboard/Home Page jika bukan admin/belum login
         redirect('Dashboard');
      }

      $id = (int)$id;

      $this->load->library('form_validation');
      $this->form_validation->set_rules('confirm', lang('deactivate_validation_confirm_label'), 'required');
      $this->form_validation->set_rules('id', lang('deactivate_validation_user_id_label'), 'required|alpha_numeric');

      if ($this->form_validation->run() === FALSE) {
         // insert csrf check
         $this->data['csrf'] = $this->_get_csrf_nonce();
         $this->data['user'] = $this->ion_auth->user($id)->row();
         $this->data['identity'] = $this->config->item('identity', 'ion_auth');

         $this->render('userdeactivate_view');
      } else {
         // do we really want to deactivate?
         if ($this->input->post('confirm') == 'yes') {
            // do we have a valid request?
            if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id')) {
               show_error(lang('error_csrf'));
            }

            // do we have the right userlevel?
            if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin()) {
               $this->ion_auth->deactivate($id);
            }
         }

         // redirect them back to the auth page
         redirect('Users' . DIRECTORY_SEPARATOR . 'lists', 'refresh');
      }
   }

   /**
    * Activate the user
    *
    * @param int         $id   The user ID
    * @param string|bool $code The activation code
    */
   public function activate($id, $code = FALSE)
   {
      // arahkan ke Dashboard/Home Page jika bukan admin/belum login
      if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
         redirect('Dashboard');
      }

      $activation = FALSE;

      if ($code !== FALSE) {
         $activation = $this->ion_auth->activate($id, $code);
      } else if ($this->ion_auth->is_admin()) {
         $activation = $this->ion_auth->activate($id);
      }

      if ($activation) {
         // redirect them to the auth page
         $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->ion_auth->messages() . '</div>');
         redirect('Users' . DIRECTORY_SEPARATOR . 'lists', 'refresh');
      } else {
         // redirect them to the forgot password page
         $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->ion_auth->errors() . '</div>');
         redirect('Users' . DIRECTORY_SEPARATOR . 'forgot_password', 'refresh');
      }
   }

   public function group_list()
   {
      if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
         redirect('Dashboard');
      }

      $this->data['title'] = 'Groups List';
      $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
      $this->data['groups'] = $this->ion_auth->groups()->result();

      $this->render('user_grouplist_view');
   }

   /**
    * Create a new group
    */
   public function create_group()
   {
      if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
         redirect('Dashboard');
      }

      $this->data['title'] = lang('create_group_title');

      // validate form input
      $this->form_validation->set_rules('group_name', lang('create_group_validation_name_label'), 'trim|required|alpha_dash|max_length[20]');
      // $this->form_validation->set_rules('description', lang('create_group_validation_desc_label'), 'trim|alpha_dash|max_length[100]');

      if ($this->form_validation->run() === TRUE) {
         $new_group_id = $this->ion_auth->create_group($this->input->post('group_name'), $this->input->post('description'));
         if ($new_group_id) {
            // check to see if we are creating the group
            // redirect them back to the admin page
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->ion_auth->messages() . '</div>');
            redirect('Users' . DIRECTORY_SEPARATOR . 'create_group');
         } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->ion_auth->errors() . $this->ion_auth->messages() . '</div>');
         }
      }

      // display the create group form
      // set the flash data error message if there is one
      // $this->data['message'] = ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message'));

      $this->data['group_name'] = [
         'name'  => 'group_name',
         'id'    => 'validationGroupName',
         'type'  => 'text',
         'value' => $this->form_validation->set_value('group_name'),
         'class'  => (form_error('group_name')) ? 'form-control is-invalid' : 'form-control ',
         'aria-describedby' => (form_error('group_name')) ? 'validationGroupNameFeedback' : '',
         'required' => NULL,
      ];
      $this->data['description'] = [
         'name'  => 'description',
         'id'    => 'validDescription',
         'type'  => 'text',
         'value' => $this->form_validation->set_value('description'),
         'class' => 'form-control',
      ];

      $this->render('user_creategroup_view');
   }

   /**
    * Edit a group
    *
    * @param int|string $id
    */
   public function edit_group($id)
   {
      if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
         redirect('Dashboard');
      }

      // bail if no group id given
      if (!$id || empty($id)) {
         redirect('Dashboard');
      }

      $group = $this->ion_auth->group($id)->row();
      if (is_null($group)) {
         show_error('Group not found.');
      }

      $this->data['title'] = lang('edit_group_title');

      // validate form input
      $this->form_validation->set_rules('group_name', lang('edit_group_validation_name_label'), 'trim|required|alpha_dash|max_length[20]');
      // $this->form_validation->set_rules('group_description', lang('edit_group_validation_desc_label'), 'trim|required|alpha_dash|max_length[100]');

      if (isset($_POST) && !empty($_POST)) {
         if ($this->form_validation->run() === TRUE) {
            $group_update = $this->ion_auth->update_group($id, $_POST['group_name'], array(
               'description' => $_POST['group_description']
            ));

            if ($group_update) {
               $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . lang('edit_group_saved') . '</div>');
               redirect("Group" . DIRECTORY_SEPARATOR . $id, 'refresh');
            } else {
               $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->ion_auth->errors() . '</div>');
            }
         }
      }

      // set the flash data error message if there is one
      $this->data['message'] = ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message'));
      // $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

      // pass the user to the view
      $this->data['group'] = $group;

      $this->data['group_name'] = [
         'name'    => 'group_name',
         'id'      => 'validationGroupName',
         'type'    => 'text',
         'value'   => $this->form_validation->set_value('group_name', $group->name),
         'class'  => (form_error('group_name')) ? 'form-control is-invalid' : 'form-control ',
         'aria-describedby' => (form_error('group_name')) ? 'validationGroupNameFeedback' : '',
         'required' => NULL,
      ];
      if ($this->config->item('admin_group', 'ion_auth') === $group->name) {
         $this->data['group_name']['readonly'] = 'readonly';
      }

      $this->data['group_description'] = [
         'name'  => 'group_description',
         'id'    => 'groupDescription',
         'type'  => 'text',
         'value' => $this->form_validation->set_value('group_description', $group->description),
         'class' => 'form-control',
      ];

      $this->render('user_editgroup_view');
   }

   /**
    * Forgot password
    */
   public function forgot_password()
   {
      $this->data['title'] = lang('forgot_password_heading');

      // setting validation rules by checking whether identity is username or email
      if ($this->config->item('identity', 'ion_auth') != 'email') {
         $this->form_validation->set_rules('identity', lang('forgot_password_identity_label'), 'required');
      } else {
         $this->form_validation->set_rules('identity', lang('forgot_password_validation_email_label'), 'required|valid_email');
      }


      if ($this->form_validation->run() === FALSE) {
         $this->data['type'] = $this->config->item('identity', 'ion_auth');
         // setup the input
         $this->data['identity'] = [
            'name' => 'identity',
            'id' => 'identity',
         ];

         if ($this->config->item('identity', 'ion_auth') != 'email') {
            $this->data['identity_label'] = lang('forgot_password_identity_label');
         } else {
            $this->data['identity_label'] = lang('forgot_password_email_identity_label');
         }

         // set any errors and display the form
         $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
         $this->render('coreui' . DIRECTORY_SEPARATOR . 'user_forgotpassword_view', NULL);
      } else {
         $identity_column = $this->config->item('identity', 'ion_auth');
         $identity = $this->ion_auth->where($identity_column, $this->input->post('identity'))->users()->row();

         if (empty($identity)) {

            if ($this->config->item('identity', 'ion_auth') != 'email') {
               $this->ion_auth->set_error('forgot_password_identity_not_found');
            } else {
               $this->ion_auth->set_error('forgot_password_email_not_found');
            }

            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->ion_auth->errors() . '</div>');
            redirect('Users' . DIRECTORY_SEPARATOR . 'forgot_password', 'refresh');
         }

         // run the forgotten password method to email an activation code to the user
         $forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item('identity', 'ion_auth')});

         if ($forgotten) {
            // if there were no errors
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->ion_auth->messages() . '</div>');
            redirect('Users' . DIRECTORY_SEPARATOR . 'login', 'refresh'); //we should display a confirmation page here instead of the login page
         } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->ion_auth->errors() . '</dvi>');
            redirect('Users' . DIRECTORY_SEPARATOR . 'forgot_password', 'refresh');
         }
      }
   }
}
