<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){     //function yang pertama kali dipanggil bahkan sebelum function index.
        parent::__construct();
        $this->load->model('Book');
		$this->load->helper('url');
    }

	public function index()
	{
		$data['books'] = $this->Book->getAll();
		// var_dump($data);

		$this->load->view('welcome_message',$data);
 
	}
	public function edit($id)
	{
		$data['books'] = $this->Book->getById($id);
        // var_dump($data['books']);

		$this->load->view('v_edit_book',$data);
 
	}
}
