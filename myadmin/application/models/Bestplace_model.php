<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bestplace_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function tempat()
  {
    $this->db->select('*');
    $this->db->from('tbl_tempat');
    return $this->db->get();
  }

  public function data_tempat($where)
  {
    $this->db->select('*');
    $this->db->from('tbl_tempat');
    $this->db->where($where);
    return $this->db->get();
  }

  public function tiket_pertempat($where)
  {
    $this->db->select('*');
    $this->db->from('tbl_tiket');
    $this->db->where($where);
    return $this->db->get();
  }

  public function kategori()
  {
    return $this->db->query("SELECT * FROM tbl_kategori");
  }

  public function kategori_pertempat($id_tempat)
  {
    return $this->db->query("SELECT tkt.id_kategori, nama_kategori
    FROM `tbl_tempat`
    LEFT JOIN tbl_kategori_tempat tkt ON tkt.id_tempat = tbl_tempat.id_tempat
    LEFT JOIN tbl_kategori ON tbl_kategori.id_kategori = tkt.id_kategori
    WHERE tbl_tempat.id_tempat = '$id_tempat'");
  }

  public function all_kategori_pertempat($id_tempat)
  {
    return $this->db->query("SELECT tbl_kategori.id_kategori, nama_kategori, COALESCE(tbl_tempat.id_tempat,0) as kategori
    FROM tbl_kategori
    LEFT JOIN tbl_kategori_tempat tkt ON tkt.id_kategori = tbl_kategori.id_kategori
    LEFT JOIN (SELECT * FROM tbl_tempat WHERE id_tempat = '$id_tempat') AS tbl_tempat ON tbl_tempat.id_tempat = tkt.id_tempat");
  }

  public function simpan_tempat($data)
  {
    $this->db->insert('tbl_tempat', $data);
    return $this->db->insert_id();
  }

  public function simpan_tiket($data)
  {
    $this->db->insert('tbl_tiket', $data);
    return $this->db->insert_id();
  }
  public function simpan_kategori_tempat($data)
  {
    $this->db->insert('tbl_kategori_tempat', $data);
    return $this->db->insert_id();
  }
  public function simpan_foto_tempat($data)
  {
    $this->db->insert('tbl_image', $data);
    return $this->db->insert_id();
  }

  public function simpan_kategori($data)
  {
    $this->db->insert('tbl_kategori', $data);
    return $this->db->insert_id();
  }

  // ------------------------------------------------------------------------

}

/* End of file Bestplace_model.php */
/* Location: ./application/models/Bestplace_model.php */