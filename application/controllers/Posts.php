<?php 
    class Posts extends CI_Controller {
        public function index() {
            $data['title'] = 'Latest Posts';
            $data['posts'] = $this->post_model->get_posts();
            $this->load->view('templates/header');
            $this->load->view('posts/index', $data);
            $this->load->view('templates/footer');
        }
    }
?>