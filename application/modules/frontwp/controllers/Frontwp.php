<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontwp extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	*/
	public function __construct(){
		parent::__construct();
		$this->load->model('Post');
	}
	public function index()
	{		
		$this->load_front('welcome');
	}

	public function send_message(){		
		$this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');  
        $this->form_validation->set_rules('message', 'Pesan', 'required');      
        if ($this->form_validation->run() == TRUE) { 
        	$this->load->model('Front');  
            $data = $_POST;
            $this->Front->sendMessage($data);    
            $this->session->set_flashdata('message', message_box('Message has been sent','success'));
            redirect('/');            
        }       
	}
}
