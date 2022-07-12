<?php
    class Users extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('user_model');
        }
        
        public function index() {
            $data['users'] = $this->user_model->get_users();
            $data['title'] = 'All Users';
            
            $this->load->view('templates/header');
            $this->load->view('users/index', $data);
            $this->load->view('templates/footer');
        }
        
        public function view($username = NULL) {
            $data['user'] = $this->user_model->get_users($username);
            if (empty($data['user'])) {
                show_404();
            }
            
            $data['title'] = $data['user']['username'];
            
            $this->load->view('templates/header');
            $this->load->view('users/view', $data);
            $this->load->view('templates/footer');
        }
        
        public function register() {
            $data['title'] = 'Sign Up';
            
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password2', 'matches[password]');
            
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('users/register', $data);
                $this->load->view('templates/footer');
            } else {
                $this->user_model->create_user();
                redirect('users/index');
            }
        }
        
        public function edit($username) {
            $data['user'] = $this->user_model->get_users($username);
            if (empty($data['user'])) {
                show_404();
            }
            
            $data['title'] = ucfirst($data['user']['username']);    
        }
    }