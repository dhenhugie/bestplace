<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Bestplace_model', 'model');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function tempat()
	{
		$data['tempat'] = $this->model->tempat()->result();
		$this->load->view('tempat/tempat', $data);
	}

	public function action_tempat()
	{
		$this->load->library('form_validation');
		$action = $this->uri->segment(2);
		$id = $this->uri->segment(3);
		$where = "id_tempat = '" . $id . "'";
		$data['tempat'] = $this->model->data_tempat($where)->row();
		$data['action'] = $action == 'view-data' ? 'view' : 'edit';
		$data['kategori'] = $this->model->all_kategori_pertempat($id)->result();
		$data['tiket'] = $this->model->tiket_pertempat($where)->row();
		$data['result'] = false;
		if ($action == 'view-data') {
			$this->load->view('tempat/data-tempat', $data);
		} else {
			$this->load->view('tempat/edit-tempat', $data);
		}
	}

	public function tambah_tempat()
	{
		$data['kategori'] = $this->model->kategori()->result();
		$this->load->view('tempat/tambah-tempat', $data);
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
			$data['kategori'] = $this->model->kategori()->result();
			$this->load->view('tempat/tambah-tempat', $data);
			// redirect('tempat/tambah-data');
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

			// Simpan TIket
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
			// $this->load->library('upload');
			// $files = $_FILES;
			// $cpt = count($_FILES['userfile']['name']);
			// for ($i = 0; $i < $cpt; $i++) {
			// 	$elemen = explode(".", $files['userfile']['name'][$i]);
			// 	$ext = end($elemen);

			// 	$name = time() . $i . '.' . $ext;
			// 	$_FILES['userfile']['name'] = $name;
			// 	$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
			// 	$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
			// 	$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
			// 	$_FILES['userfile']['size'] = $files['userfile']['size'][$i];

			// 	$this->upload->initialize($this->set_upload_options("tempat"));
			// 	$this->upload->do_upload();
			// 	$data = array(
			// 		'id_tempat' => $tempat,
			// 		'filename' => $name
			// 	);
			// 	$res = $this->model->simpan_foto_tempat($data);
			// }

			// if ($res) {
			// 	redirect('tempat');
			// } else {
			// 	return false;
			// }
		}
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

	public function kategori()
	{
		$data['kategori'] = $this->model->kategori()->result();
		$this->load->view('kategori/kategori', $data);
	}

	public function tambah_kategori()
	{
		$this->load->view('kategori/tambah-kategori');
	}

	public function simpan_kategori()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama Tempat', 'required');
		$this->form_validation->set_rules('ringkasan', 'Ringkasan Tempat', 'required');

		if ($this->form_validation->run() == FALSE) {

			echo validation_errors();
			// redirect('kategori/tambah-data');
		} else {
			$nama = $this->input->post('nama');
			$ringkasan = $this->input->post('ringkasan');

			$this->load->library('upload');
			$files = $_FILES;
			if ($_FILES['userfile']['name']) {

				$elemen = explode(".", $files['userfile']['name']);
				$ext = end($elemen);

				$name = time() . '.' . $ext;
				$_FILES['userfile']['name'] = $name;
				$_FILES['userfile']['type'] = $files['userfile']['type'];
				$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'];
				$_FILES['userfile']['error'] = $files['userfile']['error'];
				$_FILES['userfile']['size'] = $files['userfile']['size'];

				$this->upload->initialize($this->set_upload_options("kategori"));
				$this->upload->do_upload();

				$data = array(
					'nama_kategori' => $nama,
					'ringkasan' => $ringkasan,
					'foto' => $name,
				);
				$res = $this->model->simpan_kategori($data);
			} else {
				$res = null;
			}

			if ($res) {
				redirect('kategori');
			} else {
				return false;
			}
		}
	}

	public function action_kategori()
	{
		$this->load->library('form_validation');
		$action = $this->uri->segment(2);
		$id = $this->uri->segment(3);
		$where = "id_kategori = '" . $id . "'";
		$data['kategori'] = $this->model->data_kategori($where)->row();
		$data['action'] = $action == 'view-data' ? 'view' : 'edit';
		// $data['kategori'] = $this->model->all_kategori_perkategori($id)->result();
		// $data['tiket'] = $this->model->tiket_perkategori($where)->row();
		$data['result'] = false;
		if ($action == 'view-data') {
			$this->load->view('kategori/data-kategori', $data);
		} else {
			$this->load->view('kategori/edit-kategori', $data);
		}
	}







	public function pasien()
	{
		$pasien = $this->model->data_pasien()->result();
		$data['data'] = $pasien;
		$this->load->view('pasien/pasien', $data);
	}

	public function tambah_pasien($result = false)
	{
		$this->load->library('form_validation');
		$data['result'] = $result;
		$this->load->view('pasien/tambah-pasien', $data);
	}

	public function simpan_pasien()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('noid', 'Nomor Identitas', 'required|exact_length[16]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('kota', 'Tempat lahir', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jenkel', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		if ($this->input->post('bpjs') == "on") {
			$this->form_validation->set_rules('nobpjs', 'Nomor BPJS', 'required|exact_length[16]');
		}
		$this->form_validation->set_rules('notelepon', 'Nomor Telepon', 'required|min_length[10]');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->tambah_pasien();
		} else {
			$nomor_pasien = $this->model->nomor_pasien()->row();
			$noid = $this->input->post('noid');
			$nama = $this->input->post('nama');
			$kota = $this->input->post('kota');
			$tanggal = $this->input->post('tanggal');
			$jenkel = $this->input->post('jenkel');
			$alamat = $this->input->post('alamat');
			$bpjs = $this->input->post('bpjs');
			$nobpjs = $this->input->post('nobpjs');
			$notelepon = $this->input->post('notelepon');
			$pekerjaan = $this->input->post('pekerjaan');
			$dbdata = array(
				'id_pasien' => $nomor_pasien->NUM,
				'no_ktp' => $noid,
				'nama' => $nama,
				'tempat' => $kota,
				'tgl_lahir' => $tanggal,
				'jenkel' => $jenkel,
				'alamat' => $alamat,
				'bpjs' => $bpjs == "on" ? 1 : 0,
				'no_bpjs' => $bpjs == "on" ? $nobpjs : "",
				'no_hp' => $notelepon,
				'pekerjaan' => $pekerjaan,
				'umur' => $this->getAge($tanggal)
			);

			$result = $this->model->simpan_pasien($dbdata);
			if ($result) {
				$this->tambah_pasien($result);
			}
		}
	}

	public function action_pasien()
	{
		$this->load->library('form_validation');
		$action = $this->uri->segment(2);
		$id = $this->uri->segment(3);
		$where = "id_pasien = '" . $id . "'";
		$data['pasien'] = $this->model->data_pasien($where)->row();
		$data['action'] = $action == 'view-data' ? 'view' : 'edit';
		$data['poli'] = $this->model->data_poli()->result();
		$data['result'] = false;
		if ($action == 'view-data') {
			$data['riwayat'] = $this->model->riwayat_pasien($id)->result();
			$this->load->view('pasien/data-pasien', $data);
		} else {
			// print_r($data['pasien']);
			// exit;
			$this->load->view('pasien/edit-pasien', $data);
		}
	}

	public function update_pasien()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('noid', 'Nomor Identitas', 'required|exact_length[16]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('kota', 'Tempat lahir', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jenkel', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		if ($this->input->post('bpjs') == "on") {
			$this->form_validation->set_rules('nobpjs', 'Nomor BPJS', 'required|exact_length[16]');
		}
		$this->form_validation->set_rules('notelepon', 'Nomor Telepon', 'required|min_length[10]');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		if ($this->form_validation->run() == FALSE) {
			return false;
		} else {
			$id = $this->input->post('id_pasien');
			$noid = $this->input->post('noid');
			$nama = $this->input->post('nama');
			$kota = $this->input->post('kota');
			$tanggal = $this->input->post('tanggal');
			$jenkel = $this->input->post('jenkel');
			$alamat = $this->input->post('alamat');
			$bpjs = $this->input->post('bpjs');
			$nobpjs = $this->input->post('nobpjs');
			$notelepon = $this->input->post('notelepon');
			$pekerjaan = $this->input->post('pekerjaan');
			$dbdata = array(
				'no_ktp' => $noid,
				'nama' => $nama,
				'tempat' => $kota,
				'tgl_lahir' => $tanggal,
				'jenkel' => $jenkel,
				'alamat' => $alamat,
				'bpjs' => $bpjs == "on" ? 1 : 0,
				'no_bpjs' => $bpjs == "on" ? $nobpjs : "",
				'no_hp' => $notelepon,
				'pekerjaan' => $pekerjaan,
				'umur' => $this->getAge($tanggal)
			);
			$result = $this->model->update_pasien($dbdata, $id);
			if ($result) {
				redirect('pasien');
			} else {
				print_r($result);
			}
		}
	}

	function hapus_pasien()
	{
		$id = $this->uri->segment(3);
		$res = $this->model->hapus_pasien($id);
		if ($res) {
			redirect('pasien');
		}
	}

	function getAge($date)
	{
		return intval(date('Y', time() - strtotime($date))) - 1970;
	}

	// daftar

	function daftar()
	{
		$data['pasien'] = $this->model->data_pasien()->result();
		$data['poli'] = $this->model->data_poli()->result();
		$data['dokter'] = $this->model->data_dokter()->result();
		$data['pendaftaran'] = $this->model->data_pendaftaran()->result();
		$data['selesai'] = $this->model->selesai_pendaftaran()->result();
		$this->load->view('daftar/daftar', $data);
	}

	function simpan_daftar()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('pasien', 'Pasien', 'required');
		$this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
		$this->form_validation->set_rules('poli', 'poli', 'required');
		$this->form_validation->set_rules('dokter', 'Dokter', 'required');
		if ($this->form_validation->run() == FALSE) {
			redirect('daftar');
		} else {
			$pasien = $this->input->post('pasien');
			$keluhan = $this->input->post('keluhan');
			$poli = $this->input->post('poli');
			$dokter = $this->input->post('dokter');
			$nomor_daftar = $this->model->nomor_daftar()->row();
			$dbdata = array(
				'id_pendaftaran' => $nomor_daftar->NUM,
				'id_pasien' => $pasien,
				'id_poli' => $poli,
				'id_dokter' => $dokter,
				'keluhan' => $keluhan,
				'tgl_daftar' => date('Y-m-d')
			);
			$result = $this->model->simpan_daftar($dbdata);
			if ($result) {
				redirect('daftar');
			}
		}
	}

	// dokter
	public function dokter()
	{
		$data['data'] = $this->model->data_dokter()->result();
		$this->load->view('dokter/dokter', $data);
	}

	public function tambah_dokter($result = false)
	{
		$this->load->library('form_validation');
		$data['result'] = $result;
		$data['poli'] = $this->model->data_poli()->result();
		$this->load->view('dokter/tambah-dokter', $data);
	}

	public function simpan_dokter()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nip', 'NIP', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('kota', 'Tempat lahir', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('notelepon', 'Nomor Telepon', 'required|min_length[10]');
		$this->form_validation->set_rules('poli', 'Poli', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->tambah_dokter();
		} else {
			$nomor_dokter = $this->model->nomor_dokter()->row();
			$nip = $this->input->post('nip');
			$nama = $this->input->post('nama');
			$kota = $this->input->post('kota');
			$tanggal = $this->input->post('tanggal');
			$alamat = $this->input->post('alamat');
			$notelepon = $this->input->post('notelepon');
			$poli = $this->input->post('poli');
			$dbdata = array(
				'id_dokter' => $nomor_dokter->NUM,
				'nip' => $nip,
				'nama_dokter' => $nama,
				'tempat' => $kota,
				'tgl_lahir' => $tanggal,
				'alamat' => $alamat,
				'no_hp' => $notelepon,
				'id_poli' => $poli,
			);

			$result = $this->model->simpan_dokter($dbdata);
			if ($result) {
				$this->tambah_dokter($result);
			}
		}
	}

	public function action_dokter()
	{
		$this->load->library('form_validation');
		$action = $this->uri->segment(2);
		$id = $this->uri->segment(3);
		$where = "id_dokter = '" . $id . "'";
		$dokter = $this->model->data_dokter($where)->row();
		$data['dokter'] = $dokter;
		$data['action'] = $action == 'view-data' ? 'view' : 'edit';
		$data['poli'] = $this->model->data_poli()->result();
		$data['result'] = false;
		if ($action == 'view-data') {
			$this->load->view('dokter/data-dokter', $data);
		} else {
			$this->load->view('dokter/edit-dokter', $data);
		}
	}

	function update_dokter()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nip', 'NIP', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('kota', 'Tempat lahir', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('notelepon', 'Nomor Telepon', 'required|min_length[10]');
		$this->form_validation->set_rules('poli', 'Poli', 'required');
		if ($this->form_validation->run() == FALSE) {
			return false;
		} else {
			$id = $this->input->post('id_dokter');
			$nip = $this->input->post('nip');
			$nama = $this->input->post('nama');
			$kota = $this->input->post('kota');
			$tanggal = $this->input->post('tanggal');
			$alamat = $this->input->post('alamat');
			$notelepon = $this->input->post('notelepon');
			$poli = $this->input->post('poli');
			$dbdata = array(
				'nip' => $nip,
				'nama_dokter' => $nama,
				'tempat' => $kota,
				'tgl_lahir' => $tanggal,
				'alamat' => $alamat,
				'no_hp' => $notelepon,
				'id_poli' => $poli,
			);

			$result = $this->model->update_dokter($dbdata, $id);
			if ($result) {
				redirect('dokter');
			} else {
				print_r($result);
			}
		}
	}

	function hapus_dokter()
	{
		$id = $this->uri->segment(3);
		$res = $this->model->hapus_dokter($id);
		if ($res) {
			redirect('dokter');
		}
	}

	function data_dokter()
	{
		$poli = $this->input->post('id_poli');
		$where = "tb_poliklinik.id_poli = '" . $poli . "'";
		$res = $this->model->data_dokter($where)->result();
		echo json_encode($res);
	}

	//periksa
	function periksa()
	{
		$data['pendaftaran'] = $this->model->data_pendaftaran()->result();
		$data['selesai'] = $this->model->selesai_pendaftaran()->result();
		$this->load->view('periksa/periksa', $data);
	}

	function checkup($id = null)
	{
		$id = $id ?: $this->uri->segment(3);
		$where = "AND id_pendaftaran = '$id'";
		$pendaftaran = $this->model->data_pendaftaran($where)->row();
		$idpasien = $pendaftaran->id_pasien;
		$wherepasien = "id_pasien = '" . $idpasien . "'";
		$data['pendaftaran'] = $pendaftaran;
		$data['pasien'] = $this->model->data_pasien($wherepasien)->row();
		$data['riwayat'] = $this->model->riwayat_pasien($idpasien)->result();
		$data['resep'] = $this->model->data_resep(null)->result();
		$this->load->view('periksa/checkup', $data);
	}

	function simpan_resep()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('namaobat', 'Nama Obat', 'required');
		$this->form_validation->set_rules('jenisobat', 'Jenis Obat', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('id', 'Pasien', 'required');
		$this->form_validation->set_rules('id_daftar', 'Pendaftaran', 'required');
		$id = $this->input->post('id');
		$daftar = $this->input->post('id_daftar');
		if ($this->form_validation->run() == FALSE) {
			$this->checkup($id);
		} else {
			$nomor_resep = $this->model->nomor_resep()->row();
			$nama = $this->input->post('namaobat');
			$jenisobat = $this->input->post('jenisobat');
			$keterangan = $this->input->post('keterangan');
			$dbdata = array(
				'id_resep' => $nomor_resep->NUM,
				'nama_obat' => $nama,
				'jenis_obat' => $jenisobat,
				'keterangan' => $keterangan
			);

			$result = $this->model->simpan_resep($dbdata);
			if ($result) {
				redirect('periksa/check-up/' . $daftar);
			}
		}
	}

	function view_resep()
	{
		$id = $this->input->post('id_resep');
		$data = $this->model->data_resep($id)->row();
		echo json_encode($data);
	}

	function simpan_periksa()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_pasien', 'Nama Pasien', 'required');
		$this->form_validation->set_rules('id_daftar', 'Pendaftaran', 'required');
		$this->form_validation->set_rules('pemeriksaan', 'Pemeriksaan', 'required');
		$this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required');
		$this->form_validation->set_rules('resep', 'Resep', 'required');
		$this->form_validation->set_rules('pasien', 'Pasien', 'required');
		$id = $this->input->post('id_daftar');
		if ($this->form_validation->run() == FALSE) {
			$this->checkup($id);
		} else {
			$nomor_rmd = $this->model->nomor_rmd()->row();
			$resep = $this->input->post('resep');
			$pendaftaran = $this->input->post('id_daftar');
			$pemeriksaan = $this->input->post('pemeriksaan');
			$diagnosa = $this->input->post('diagnosa');
			$dbdata = array(
				'id_rmd' => $nomor_rmd->NUM,
				'id_resep' => $resep,
				'id_pendaftaran' => $pendaftaran,
				'tgl_periksa' => date('Y-m-d'),
				'pemeriksaan' => $pemeriksaan,
				'diagnosa' => $diagnosa
			);
			$result = $this->model->simpan_periksan($dbdata);
			if ($result) {
				redirect('periksa');
			}
		}
	}

	//poli
	function poli()
	{
	}
}
