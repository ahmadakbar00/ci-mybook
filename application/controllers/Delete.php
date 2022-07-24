<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

	public function __construct(){     //function yang pertama kali dipanggil bahkan sebelum function index.
        parent::__construct();
        $this->load->model('Book');
        $this->load->helper('url');
    }

    public function hapus($id)
	{
		$this->Book->delete($id);
		$this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
		redirect('Welcome');
	}

}
