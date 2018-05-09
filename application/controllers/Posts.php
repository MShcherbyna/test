<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 09.05.18
     * Time: 11:53
     */

    class Posts extends CI_Controller
    {
        public function index()
        {
            $data['title'] = "Lates Posts";

            $data['posts'] = $this->post_model->get_posts();
            $this->load->view('templates/header');
            $this->load->view('posts/index', $data);
            $this->load->view("templates/footer");
        }


        public function view($slug = null)
        {
            $data['post'] = $this->post_model->get_posts($slug);

            if (empty($data['post'])) {
                show_404();
            }
            $data['title'] = $data['post']['title'];

            $this->load->view('templates/header');
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer');
        }
    }