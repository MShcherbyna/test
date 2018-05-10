<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.05.18
 * Time: 17:50
 */

class Pages extends CI_Controller
{
    public function view($page = 'home')
    {

        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        }
        $data['title'] = ucfirst($page);
        $this->load->view('templates/header');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }
}