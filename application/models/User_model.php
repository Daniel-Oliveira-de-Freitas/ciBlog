<?php
    class User_model extends CI_Model {
        public function register($enc_password) {
            // array de usuarios
            $data = array(
                'name' => $this->input->post('name'),
                'zipcode' => $this->input->post('zipcode'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $enc_password
            );
            // inseri usuario
           return $this->db->insert('users', $data);
        }
        
        public function login($username, $password) {
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            
            $result = $this->db->get('users');
            
            if ($result->num_rows() == 1) {
                return $result->row(0)->id;
            } else {
                return false;
            }
        }
    }