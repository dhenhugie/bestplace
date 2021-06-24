<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
        $this->load->view('header');
		$this->load->view('index');
        $this->load->view('footer');
	}

    public function kategori()
	{
        $this->load->view('header');
		$this->load->view('kategori');
        $this->load->view('footer');
	}

    public function tambah_kategori()
	{
        $this->load->view('header');
		$this->load->view('tambah_kategori');
        $this->load->view('footer');
	}
}
