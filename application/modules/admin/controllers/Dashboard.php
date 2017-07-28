<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		//echo "ini Admin ";
		//echo '<pre>'; print_r($this->session->all_userdata());exit;
		redirect('admin/posts');
        /*die("sampe sini");
        	$this->theme = 'default';
		 $this->data['welcome'] = 'Ini adalah halaman admin';		
		 $this->load_theme('admin/dashboard');*/
	}
}