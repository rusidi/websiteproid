<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    var $data;

    public function index()	{
        $this->load->library('form_validation');

        if ($this->ion_auth->logged_in()) {
            redirect('admin', 'refresh');
        }

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('passwd', 'Password', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        }
        else {
            if ($this->ion_auth->login($this->input->post('username'), $this->input->post('passwd'))) {
               //var_dump($this->session->all_userdata());
                redirect('admin','refresh');
            }
            else {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                //die("Ho");
                redirect('login', 'refresh');
            }
        }
    }

    public function logout() {
        if ($this->ion_auth->logout()) {
            redirect('home');
        }
    }

    public function test() {}
}
