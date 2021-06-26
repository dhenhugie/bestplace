<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Bestplace_model', 'model');
	}

	public function index()
	{
        $this->load->view('header');
		$this->load->view('index');
        $this->load->view('footer');
	}

    public function kategori()
	{
        $this->load->view('header');
		$this->load->view('kategori/kategori');
        $this->load->view('footer');
	}

    public function tambah_kategori()
	{
        $this->load->view('header');
		$this->load->view('kategori/tambah_kategori');
        $this->load->view('footer');
	}

	public function tempat()
	{
        $this->load->view('header');
		$data['tempat'] = $this->model->tempat()->result();
		$this->load->view('tempat/tempat', $data);
        $this->load->view('footer');
	}

	public function tambah_tempat()
	{
        $this->load->view('header');
		$data['kategori'] = $this->model->kategori()->result();
		$this->load->view('tempat/tambah_tempat', $data);
        $this->load->view('footer');
	}

	public function simpan_tempat()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama Tempat', 'required');
		$this->form_validation->set_rules('ringkasan', 'Ringkasan Tempat', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Tempat', 'required');
		$this->form_validation->set_rules('alamat', 'Alamats Tempat', 'required');
		$this->form_validation->set_rules('kategori[]', 'Kategori', 'required');
		// $this->form_validation->set_rules('userfile[]', 'Foto', 'required');

		if ($this->input->post('tiket') == "on") {
			
			$this->form_validation->set_rules('harga', 'Harga Tiket Masuk', 'required');
		}
		if ($this->form_validation->run() == FALSE) {
			// print_r("wda");
			$this->load->view('header');
			$data['kategori'] = $this->model->kategori()->result();
			$this->load->view('tempat/tambah_tempat', $data);
			$this->load->view('footer');
		} else {
			// Simpan Tempat
			$nama = $this->input->post('nama');
			$ringkasan = $this->input->post('ringkasan');
			$deskripsi = $this->input->post('deskripsi');
			$alamat = $this->input->post('alamat');

			$data = array(
				'nama' => $nama,
				'ringkasan' => $ringkasan,
				'deskripsi' => $deskripsi,
				'alamat' => $alamat
			);
			$this->model->simpan_tempat($data);
			
			// Ambil id tempat terakhir
			$dte = $this->model->tempat_terakhir()->row();
			$tempat = $dte->id_tempat;
			// echo $tempat;

			// Simpan Tiket
			$tiket = $this->input->post('tiket');
			$harga = $this->input->post('harga');
			if ($tiket == "on") {
				$data = array(
					'id_tempat' => $tempat,
					'harga' => $harga
				);
				$this->model->simpan_tiket($data);
			}

			// Simpan Kategori
			$kategori = $this->input->post('kategori');
			
			foreach ($kategori as $key) {
				$data = array(
					'id_tempat' => $tempat,
					'id_kategori' => $key
				);
				$this->model->simpan_kategori_tempat($data);
			}

			// Upload Foto
			$this->load->library('upload');
			$files = $_FILES;
			$cpt = count($_FILES['userfile']['name']);
			for ($i = 0; $i < $cpt; $i++) {
				$elemen = explode(".", $files['userfile']['name'][$i]);
				$ext = end($elemen);

				$name = time() . $i . '.' . $ext;
				$_FILES['userfile']['name'] = $name;
				$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
				$_FILES['userfile']['size'] = $files['userfile']['size'][$i];

				$this->upload->initialize($this->set_upload_options("tempat"));
				$this->upload->do_upload();
				$data = array(
					'id_tempat' => $tempat,
					'filename' => $name
				);
				$res = $this->model->simpan_foto_tempat($data);
			}

			if ($res) {
				redirect('admin/tempat');
			} else {
				return false;
			}
		}
	}

	function hapus_tempat()
	{
		$id = $this->uri->segment(4);
		$res = $this->model->hapus_tempat($id);
		if ($res) {
			printf($res);
			redirect('admin/tempat');
		}else{echo 'noting hapen';}
	}




	private function set_upload_options($type)
	{
		//upload an image options
		$config = array();
		if ($type == 'tempat') {
			$config['upload_path'] = '../assets/images/tempat/';
		} else if ($type == 'kategori') {
			$config['upload_path'] = '../assets/images/kategori/';
		}
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;

		return $config;
	}
}
