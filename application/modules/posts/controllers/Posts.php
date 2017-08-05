<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends My_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Post');
		$this->load->model('Category');
		$this->load->model('Tag');
	}

	public function index()
	{
		$this->data['page_layout'] = 'archive';

		$config['base_url'] = site_url('blog/');
		$config['total_rows'] = count($this->Post->find_active());
		$config['per_page'] = 5;
		$config["uri_segment"] = 2;
     
        $this->data['posts'] = $this->Post->find_active($config['per_page'], $this->uri->segment(2));
        
        $this->data['pagination'] = $this->bootstrap_pagination($config);

        $this->data['header'] = $this->load->view('themes/'.$this->theme.'/posts/header',$this->data, TRUE);
        
		$this->load_theme('posts/index');
	}

	public function read($slug){
		$this->data['page_layout'] = 'single'; 
		$this->data['post'] = $this->Post->find_by_slug($slug);
		//$this->data['header'] = $this->load->view('themes/'.$this->theme.'/posts/header',$this->data, TRUE);
		$this->data['page_title'] = $this->data['post']['title'];
		//var_dump($this->data); die;
		$this->load_theme('posts/read');
	}

	public function category($category = null){
		$this->data['page_layout'] = 'single';
		$config['base_url'] = site_url('category/'.$category.'/');
		$config['total_rows'] = count($this->Post->find_by_category($category));
		$config['per_page'] = 5;
		$config["uri_segment"] = 2;     
        $this->data['posts'] = $this->Post->find_by_category($category);        
        $this->data['pagination'] = $this->bootstrap_pagination($config);
        $this->data['tag'] = $this->Tag->find_by_slug($category); 
		$this->load_theme('posts/index');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$this->data['page_layout'] = 'single';
		$config['base_url'] = site_url('search/'.$keyword.'/');
		$config['total_rows'] = count($this->Post->find_by_keyword($keyword));
		$config['per_page'] = 5;
		$config["uri_segment"] = 2;     
        $this->data['posts'] = $this->Post->find_by_keyword($keyword);        
        $this->data['pagination'] = $this->bootstrap_pagination($config);
        $this->data['tag'] = $this->Tag->find_by_slug($keyword); 
        $this->data['keyword'] = $keyword;
        //echo $keyword; die;
		$this->load_theme('posts/search');
	}

	public function tag($slug = null){
		$this->data['page_layout'] = 'archive';

		$config['base_url'] = site_url('tag/'.$slug.'/');
		$config['total_rows'] = count($this->Post->find_by_tag($slug));
		$config['per_page'] = 5;
		$config["uri_segment"] = 3;
     
        $this->data['posts'] = $this->Post->find_by_tag($slug,$config['per_page'], $this->uri->segment(3));
        
        $this->data['pagination'] = $this->bootstrap_pagination($config);

      	$this->data['tag'] = $this->Tag->find_by_slug($slug);

        $this->data['header'] = $this->load->view('themes/'.$this->theme.'/posts/header',$this->data, TRUE);

		$this->load_theme('posts/index');
	}
}
