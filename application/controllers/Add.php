<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct(){     //function yang pertama kali dipanggil bahkan sebelum function index.
        parent::__construct();
        $this->load->model('Book');
        $this->load->helper('url');
    }

	public function index()
	{
		$this->load->view('v_add_book');
	}

	public function insert()
	{
		if($this->Book->insert() == TRUE){
			$this->session->set_flashdata('flash', 'Buku Sukses Ditambahkan');
			redirect('Welcome');
		}

	}
}
