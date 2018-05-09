<?php

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


        public function create()
        {
            $data['title'] = 'Create Post';

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('body', 'Body', 'required');
            $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
            $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');
            if ($this->form_validation->run() === false) {
                $this->load->view('templates/header');
                $this->load->view('posts/create', $data);
                $this->load->view('templates/footer');
            } else {
                $this->post_model->create_post();
                redirect('posts');
            }

        }

        public function validate_captcha()
        {
            $captcha = $this->input->post('g-recaptcha-response');
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?6LcJTVgUAAAAAHLNym1pSj8Ei2XAB-pUjI43oMnD&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
            if ($response . 'success' == false) {
                return false;
            } else {
                return true;
            }
        }

        public function delete($id)
        {
            $this->post_model->delete_post($id);
            redirect('posts');
        }

        public function edit($slug)
        {
            $data['post'] = $this->post_model->get_posts($slug);

            if (empty($data['post'])) {
                show_404();
            }
            $data['title'] = 'Edit post';

            $this->load->view('templates/header');
            $this->load->view('posts/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update()
        {
            $this->post_model->update_post();
            redirect('posts');
        }
    }