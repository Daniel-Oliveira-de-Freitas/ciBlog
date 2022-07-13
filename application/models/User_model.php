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

        public function get_user($user_id) {
            $this->db->where('id', $user_id);
            $result = $this->db->get('users');
            return $result->row(0);
        }

        public function get_all_users() {
            $result = $this->db->get('users');
            return $result->result_array();
        }

        public function get_user_by_username($username) {
            $this->db->where('username', $username);
            $result = $this->db->get('users');
            return $result->row(0);
        }

        public function get_user_by_email($email) {
            $this->db->where('email', $email);
            $result = $this->db->get('users');
            return $result->row(0);
        }

        public function get_user_by_id($id) {
            $this->db->where('id', $id);
            $result = $this->db->get('users');
            return $result->row(0);
        }

        public function update_user($user_id, $data) {
            $this->db->where('id', $user_id);
            $this->db->update('users', $data);
        }

        public function delete_user($user_id) {
            $this->db->where('id', $user_id);
            $this->db->delete('users');
        }

        public function check_username_exists($username) {
            $query = $this->db->get_where('users', array('username' => $username));
            if (empty($query->row_array())) {
                return true;
            } else {
                return false;
            }
        }

        public function check_email_exists($email) {
            $query = $this->db->get_where('users', array('email' => $email));
            if (empty($query->row_array())) {
                return true;
            } else {
                return false;
            }
        }

        
    }