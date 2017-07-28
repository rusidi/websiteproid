<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends MY_Controller {

	public function __construct(){
		parent::__construct();
        $this->allow_group_access(array('admin'));
        
		$this->load->model('Front');
        $this->data['parent_menu'] = 'frontpage';
    
	}

	public function social_media(){

		$config['base_url'] = site_url('admin/frontpage/index/');
		$config['total_rows'] = count($this->Front->findAdminSocialMedia());
		$config['per_page'] = 10;
		$config["uri_segment"] = 4;
        $user_id = null;
        if(!in_array('admin', $this->current_groups)){
            $user_id = $this->session->userdata('user_id');
        }
        if ($this->input->get('q')):
            $q = $this->input->get('q');
            $this->data['data'] = $this->Front->findAdminSocialMedia($config['per_page'], $this->uri->segment(4));
            if (empty($this->data['data'])) {
                $this->session->set_flashdata('message', message_box('Data tidak ditemukan','danger'));
                redirect('admin/frontpage/social_media');
            }
            $config['total_rows'] = count($this->data['data']);
        else:
            $this->data['data'] = $this->Front->findAdminSocialMedia($config['per_page'], $this->uri->segment(4));
        endif;
        $this->data['pagination'] = $this->bootstrap_pagination($config);
        
		$this->load_admin('frontpage/social_media/index');
	}

	
	public function add_social_media(){
		$this->form_validation->set_rules('email_address', 'email_address', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');        
        if ($this->form_validation->run() == TRUE) {        	
            $data = $_POST;            
            $data['created_by'] = $this->session->userdata('user_id');
            $data['is_active'] = $this->input->post('is_active');
            $this->Front->createSocialMedia($data);
    
            $this->session->set_flashdata('message', message_box('New data has been saved','success'));
            redirect('admin/frontpage/social_media');
        }

       	$this->load_admin('frontpage/social_media/add');
	}

	public function delete_social_media($id = null){
		if(!empty($id)){
            $this->Front->deleteSocialMedia($id);
            $this->session->set_flashdata('message',message_box('Data has been deleted','success'));
            redirect('admin/frontpage/social_media');
        }else{
            $this->session->set_flashdata('message',message_box('Invalid id','danger'));
            redirect('admin/frontpage/social_media');
        }
	}

	public function edit_social_media($id = null){
        if($id == null){
            $id = $this->input->post('id');
        }
        $this->form_validation->set_rules('email_address', 'email_address', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');     
        if ($this->form_validation->run() == TRUE) {         
            $data = $_POST; 
            $data['is_active'] = $this->input->post('is_active');          
            $this->Front->updateSocialMedia($data,$id);      
            $this->session->set_flashdata('message', message_box('Data has been saved','success'));
            redirect('admin/frontpage/social_media');
        }
        $this->data['data'] = $this->Front->findsocialmedia_by_id($id);

        $this->load_admin('frontpage/social_media/edit');
	}




public function landing_page(){
		$config['base_url'] = site_url('admin/frontpage/index/');
		$config['total_rows'] = count($this->Front->findAdminLandingPage());
		$config['per_page'] = 10;
		$config["uri_segment"] = 4;
        $user_id = null;
        if(!in_array('admin', $this->current_groups)){
            $user_id = $this->session->userdata('user_id');
        }
        if ($this->input->get('q')):
            $q = $this->input->get('q');
            $this->data['data'] = $this->Front->findAdminLandingPage($config['per_page'], $this->uri->segment(4));
            if (empty($this->data['data'])) {
                $this->session->set_flashdata('message', message_box('Data tidak ditemukan','danger'));
                redirect('admin/frontpage/social_media');
            }
            $config['total_rows'] = count($this->data['data']);
        else:
            $this->data['data'] = $this->Front->findAdminLandingPage($config['per_page'], $this->uri->segment(4));
        endif;
        $this->data['pagination'] = $this->bootstrap_pagination($config);
        
		$this->load_admin('frontpage/landing_page/index');
	}

	public function add_landing_page(){		
		$this->form_validation->set_rules('title', 'title','required');
        $this->form_validation->set_rules('description','description', 'required');            
        if ($this->form_validation->run() == TRUE) {
            $data = $_POST; 
            $data['created_by'] = $this->session->userdata('user_id');
            list($status,$file) = $this->upload_file($_FILES);
            if ($status){                        
                $data['image'] = $file;
                $data['is_active'] = $this->input->post('is_active');
				$this->Front->createLandingPage($data);    
				$this->session->set_flashdata('message', message_box('New data has been saved','success'));
				redirect('admin/frontpage/landing_page');
            }        	
        }

       	$this->load_admin('frontpage/landing_page/add');
	}

	function upload_file($file) {              
        $config['upload_path'] = APPPATH.'../assets/uploads/'.$this->config->item('websiteproid_slider_path');
        $config['allowed_types'] = 'jpg|png';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = FALSE;
        $config['max_size'] = '9024'; //9 MB
        $new_name =  str_replace(' ', '_', $file['image']['name']);
        $new_name =  str_replace('&','_', $new_name);
        $config['file_name'] = $new_name;
        $msg = '';
        if (isset($file['image']['name'])) {
            if (0 < $file['image']['error']) {
                $msg = 'Error during file upload' . $file['image']['error'];
            } else {
                if (file_exists($config['upload_path'] . $new_name)) {
                    $msg = 'File already exists : ' . $file['image']['name'];
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('image')) {
                        $msg = $this->upload->display_errors();
                    } else {
                        $msg = '';
                    }
                }
            }
        } else {
            $msg = 'Please choose a file';
        }
        if($msg == ''){
            return [true,$new_name];
        }
        else {
            return [false,$msg];
        }
    }

    public function delete_landing_page($id = null){
		if(!empty($id)){
            $this->Front->deleteLandingPage($id);
            $this->session->set_flashdata('message',message_box('Data has been deleted','success'));
            redirect('admin/frontpage/landing_page');
        }else{
            $this->session->set_flashdata('message',message_box('Invalid id','danger'));
            redirect('admin/frontpage/landing_page');
        }
	}

public function edit_landing_page($id = null){
        if($id == null){
            $id = $this->input->post('id');
        }
      	$this->form_validation->set_rules('title', 'title','required');
        $this->form_validation->set_rules('description','description', 'required');            
        if ($this->form_validation->run() == TRUE) {
            $data = $_POST; 
            $data['created_by'] = $this->session->userdata('user_id');
            if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
	            $old_data = $this->Front->findLandingPage_by_id($id);
	            $slider_file = APPPATH.'../assets/uploads/'.$this->config->item('websiteproid_slider_path').'/'.$old_data['image'];
	            if(file_exists ( $slider_file )) {
	            	 unlink($slider_file);
	            }
	            list($status,$file) = $this->upload_file($_FILES);
	            if($status){
	            	 $data['image'] = $file;
	            }
            }  
            $data['is_active'] = $this->input->post('is_active');
			$this->Front->updateLandingPage($data,$id);   
			$this->session->set_flashdata('message', message_box('Update data has been saved','success'));
			redirect('admin/frontpage/landing_page');    	
        }

       	
        $this->data['data'] = $this->Front->findLandingPage_by_id($id);
        $this->load_admin('frontpage/landing_page/edit');
	}





	public function partners(){
		$config['base_url'] = site_url('admin/frontpage/index/');
		$config['total_rows'] = count($this->Front->findAdminPartners());
		$config['per_page'] = 10;
		$config["uri_segment"] = 4;
        $user_id = null;
        if(!in_array('admin', $this->current_groups)){
            $user_id = $this->session->userdata('user_id');
        }
        if ($this->input->get('q')):
            $q = $this->input->get('q');
            $this->data['data'] = $this->Front->findAdminPartners($config['per_page'], $this->uri->segment(4));
            if (empty($this->data['data'])) {
                $this->session->set_flashdata('message', message_box('Data tidak ditemukan','danger'));
                redirect('admin/frontpage/partners');
            }
            $config['total_rows'] = count($this->data['data']);
        else:
            $this->data['data'] = $this->Front->findAdminPartners($config['per_page'], $this->uri->segment(4));
        endif;
        $this->data['pagination'] = $this->bootstrap_pagination($config);
        
		$this->load_admin('frontpage/partners/index');
	}

	public function add_partners(){		
		$this->form_validation->set_rules('title', 'title','required');
        $this->form_validation->set_rules('description','description', 'required');            
        if ($this->form_validation->run() == TRUE) {
            $data = $_POST; 
            $data['created_by'] = $this->session->userdata('user_id');
            $data['is_active'] = $this->input->post('is_active');
            $this->Front->createPartners($data);    
			$this->session->set_flashdata('message', message_box('New data has been saved','success'));
			redirect('admin/frontpage/partners');                  	
        }
       	$this->load_admin('frontpage/partners/add');
	}

	function upload_file_partners($form) {    
		$file = $_FILES;         
        $config['upload_path'] = APPPATH.'../assets/uploads/'.$this->config->item('websiteproid_partner_path');
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = FALSE;
        $config['max_size'] = '9024'; //9 MB
        $new_name =  str_replace(' ', '_', $file[$form]['name']);
        $new_name =  str_replace('&','_', $new_name);
        $config['file_name'] = $new_name;
        $msg = '';

        if (isset($file[$form]['name'])) {
            if (0 < $file['image']['error']) {
                $msg = 'Error during file upload' . $file[$form]['error'];
            } else {
                if (file_exists($config['upload_path'] . $new_name)) {
                    $msg = 'File already exists : ' . $file[$form]['name'];
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload($form)) {
                        $msg = $this->upload->display_errors();
                    } else {
                    	$data = array();
                    	$data[$form] = $config['file_name'];
                    	$this->Front->updatePartners($data,$_POST['id']);
                        $msg = '';
                    }
                }
            }
        } else {
            $msg = 'Please choose a file';
        }
        if($msg == ''){
            $this->session->set_flashdata('message', message_box('New data has been saved','success'));
			redirect('admin/frontpage/partners');    
        }
        else {
            $this->session->set_flashdata('message', message_box($msg,'error'));
			redirect('admin/frontpage/partners');    
        }
    }

    public function delete_file_partners($id,$form){
    		$data = array();
            $data[$form] = '';
            $this->Front->updatePartners($data,$id);
            if(!empty($id)){
            	$this->session->set_flashdata('message',message_box('Data has been deleted','success')); 
           	}else{
            	$this->session->set_flashdata('message',message_box('Invalid id','danger'));           
        	}
        redirect('admin/frontpage/partners');              
    }

    public function delete_partners($id = null){
		if(!empty($id)){
            $this->Front->deletePartners($id);
            $this->session->set_flashdata('message',message_box('Data has been deleted','success'));            
        }else{
            $this->session->set_flashdata('message',message_box('Invalid id','danger'));           
        }
        redirect('admin/frontpage/partners');
	}

	public function edit_partners($id = null){
        if($id == null){
            $id = $this->input->post('id');
        }
        $this->form_validation->set_rules('title', 'title','required');
        $this->form_validation->set_rules('description','description', 'required');  
      	if ($this->form_validation->run() == TRUE) {
            $data = $_POST; 
            $data['created_by'] = $this->session->userdata('user_id');
            $data['is_active'] = $this->input->post('is_active');
            $this->Front->updatePartners($data,$id);    
			$this->session->set_flashdata('message', message_box('Update data has been saved','success'));
			redirect('admin/frontpage/partners');                  	
        }
              	
        $this->data['data'] = $this->Front->findPartners_by_id($id);
        $this->load_admin('frontpage/partners/edit');
	}




	public function company_overview(){
		$config['base_url'] = site_url('admin/frontpage/index/');
		$config['total_rows'] = count($this->Front->findAdminPartners());
		$config['per_page'] = 10;
		$config["uri_segment"] = 4;
        $user_id = null;
        if(!in_array('admin', $this->current_groups)){
            $user_id = $this->session->userdata('user_id');
        }
        if ($this->input->get('q')):
            $q = $this->input->get('q');
            $this->data['data'] = $this->Front->findAdminCompanyOverview($config['per_page'], $this->uri->segment(4));
            if (empty($this->data['data'])) {
                $this->session->set_flashdata('message', message_box('Data tidak ditemukan','danger'));
                redirect('admin/frontpage/company_overview');
            }
            $config['total_rows'] = count($this->data['data']);
        else:
            $this->data['data'] = $this->Front->findAdminCompanyOverview($config['per_page'], $this->uri->segment(4));
        endif;
        $this->data['pagination'] = $this->bootstrap_pagination($config);
        
		$this->load_admin('frontpage/company_overview/index');
	}

	public function add_company_overview(){
		$this->form_validation->set_rules('icon', 'icon', 'required');
        $this->form_validation->set_rules('title', 'title', 'required');  
        $this->form_validation->set_rules('subtitle', 'subtitle', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');      
        if ($this->form_validation->run() == TRUE) {        	
            $data = $_POST;            
            $data['created_by'] = $this->session->userdata('user_id');
           	$data['is_active'] = $this->input->post('is_active');
			$this->Front->createCompanyOverview($data);    
            $this->session->set_flashdata('message', message_box('New data has been saved','success'));
            redirect('admin/frontpage/company_overview');
        }
       	$this->load_admin('frontpage/company_overview/add');
	}

	public function delete_company_overview($id = null){
		if(!empty($id)){
            $this->Front->deleteCompanyOverview($id);
            $this->session->set_flashdata('message',message_box('Data has been deleted','success'));            
        }else{
            $this->session->set_flashdata('message',message_box('Invalid id','danger'));           
        }
        redirect('admin/frontpage/company_overview');
	}

	public function edit_company_overview($id = null){
        if($id == null){
            $id = $this->input->post('id');
        }
       	$this->form_validation->set_rules('icon', 'icon', 'required');
        $this->form_validation->set_rules('title', 'title', 'required');  
        $this->form_validation->set_rules('subtitle', 'subtitle', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');    
      	if ($this->form_validation->run() == TRUE) {
            $data = $_POST; 
            $data['created_by'] = $this->session->userdata('user_id');
            $data['is_active'] = $this->input->post('is_active');			
			$this->Front->updateCompanyOverview($data,$id);
			$this->session->set_flashdata('message', message_box('Update data has been saved','success'));
			redirect('admin/frontpage/company_overview');
        }              	
        $this->data['data'] = $this->Front->findCompanyOverview_by_id($id);
        $this->load_admin('frontpage/company_overview/edit');
	}







	public function testimoni(){
		$config['base_url'] = site_url('admin/frontpage/index/');
		$config['total_rows'] = count($this->Front->findAdminTestimoni());
		$config['per_page'] = 10;
		$config["uri_segment"] = 4;
        $user_id = null;
        if(!in_array('admin', $this->current_groups)){
            $user_id = $this->session->userdata('user_id');
        }
        if ($this->input->get('q')):
            $q = $this->input->get('q');
            $this->data['data'] = $this->Front->findAdminTestimoni($config['per_page'], $this->uri->segment(4));
            if (empty($this->data['data'])) {
                $this->session->set_flashdata('message', message_box('Data tidak ditemukan','danger'));
                redirect('admin/frontpage/testimoni');
            }
            $config['total_rows'] = count($this->data['data']);
        else:
            $this->data['data'] = $this->Front->findAdminTestimoni($config['per_page'], $this->uri->segment(4));
        endif;
        $this->data['pagination'] = $this->bootstrap_pagination($config);
        
		$this->load_admin('frontpage/testimoni/index');
	}

	public function add_testimoni(){
		$this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('job_title', 'job_title', 'required');  
        $this->form_validation->set_rules('description', 'description', 'required');      
        if ($this->form_validation->run() == TRUE) {        	
            $data = $_POST;            
            $data['created_by'] = $this->session->userdata('user_id');
            list($status,$file) = $this->upload_photo($_FILES);
            if ($status){                        
                $data['photo'] = $file;
                $data['is_active'] = $this->input->post('is_active');
				$this->Front->createTestimoni($data);    
            	$this->session->set_flashdata('message', message_box('New data has been saved','success'));
            	redirect('admin/frontpage/testimoni');
            }
        }
       	$this->load_admin('frontpage/testimoni/add');
	}

	function upload_photo($file) {              
        $config['upload_path'] = APPPATH.'../assets/uploads/'.$this->config->item('websiteproid_testimoni_path');
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = FALSE;
        $config['max_size'] = '9024'; //9 MB
        $new_name =  str_replace(' ', '_', $file['photo']['name']);
        $new_name =  str_replace('&','_', $new_name);
        $config['file_name'] = $new_name;
        $msg = '';
        if (isset($file['photo']['name'])) {
            if (0 < $file['photo']['error']) {
                $msg = 'Error during file upload' . $file['photo']['error'];
            } else {
                if (file_exists($config['upload_path'] . $new_name)) {
                    $msg = 'File already exists : ' . $file['photo']['name'];
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('photo')) {
                        $msg = $this->upload->display_errors();
                    } else {
                        $msg = '';
                    }
                }
            }
        } else {
            $msg = 'Please choose a file';
        }
        if($msg == ''){
            return [true,$new_name];
        }
        else {
            return [false,$msg];
        }
    }

    public function delete_testimoni($id = null){
		if(!empty($id)){
            $this->Front->deleteTestimoni($id);
            $this->session->set_flashdata('message',message_box('Data has been deleted','success'));            
        }else{
            $this->session->set_flashdata('message',message_box('Invalid id','danger'));           
        }
        redirect('admin/frontpage/testimoni');
	}

	public function edit_testimoni($id = null){
        if($id == null){
            $id = $this->input->post('id');
        }
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('job_title', 'job_title', 'required');  
        $this->form_validation->set_rules('description', 'description', 'required');    
      	if ($this->form_validation->run() == TRUE) {
            $data = $_POST; 
            $data['created_by'] = $this->session->userdata('user_id');
            $data['is_active'] = $this->input->post('is_active');

			if (isset($_FILES['photo']['name']) && $_FILES['photo']['name'] !='') {
				list($status,$file) = $this->upload_photo($_FILES);
				 $data['photo'] = $file;
			}
			$this->Front->updateTestimoni($data,$id);
			$this->session->set_flashdata('message', message_box('Update data has been saved','success'));
			redirect('admin/frontpage/testimoni');
        }              	
        $this->data['data'] = $this->Front->findTestimoni_by_id($id);
        $this->load_admin('frontpage/testimoni/edit');
	}


	
	
}