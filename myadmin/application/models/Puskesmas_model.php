<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Puskesmas_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  function nomor_pasien()
  {
    return $this->db->query("SELECT CASE
        WHEN NUM < 10 THEN
          CONCAT('PSEN000',NUM)
        WHEN NUM < 100 THEN
          CONCAT('PSEN00',NUM)
        WHEN NUM < 1000 THEN
          CONCAT('PSEN0',NUM)
        WHEN NUM < 10000 THEN
          CONCAT('PSEN',NUM)
        ELSE
          'PSEN0001'
      END AS NUM
      
      FROM (
          SELECT RIGHT(id_pasien, 4)+1 AS NUM
          FROM `tb_pasien`
          ORDER BY id_pasien DESC
          LIMIT 1
      ) AS Source");
  }

  public function simpan_pasien($data)
  {
    $this->db->insert('tb_pasien', $data);
    return $this->db->affected_rows();
  }

  function data_pasien($where = "1=1")
  {
    $this->db->select('*');
    $this->db->from('tb_pasien');
    $this->db->where($where);
    return $this->db->get();
  }

  function riwayat_pasien($id)
  {
    $this->db->select('tgl_periksa, keluhan, pemeriksaan, diagnosa, nama_dokter, jenis_poli');
    $this->db->from('tb_rekam_medis');
    $this->db->join('tb_pendaftaran', 'tb_pendaftaran.id_pendaftaran = tb_rekam_medis.id_pendaftaran');
    $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pendaftaran.id_dokter');
    $this->db->join('tb_poliklinik', 'tb_poliklinik.id_poli = tb_dokter.id_poli');
    $this->db->where('id_pasien', $id);
    return $this->db->get();
  }

  public function update_pasien($data, $id)
  {
    $this->db->where("id_pasien", $id);
    $this->db->update("tb_pasien", $data);
    return $this->db->affected_rows();
  }

  public function hapus_pasien($id)
  {
    $this->db->where('id_pasien', $id);
    $this->db->delete('tb_pasien');
    return $this->db->affected_rows();
  }

  // dokter

  function nomor_dokter()
  {
    return $this->db->query("SELECT CASE
        WHEN NUM < 10 THEN
          CONCAT('DKTR000',NUM)
        WHEN NUM < 100 THEN
          CONCAT('DKTR00',NUM)
        WHEN NUM < 1000 THEN
          CONCAT('DKTR0',NUM)
        WHEN NUM < 10000 THEN
          CONCAT('DKTR',NUM)
        ELSE
          'DKTR0001'
      END AS NUM
      
      FROM (
          SELECT RIGHT(id_dokter, 4)+1 AS NUM
          FROM `tb_dokter`
          ORDER BY id_dokter DESC
          LIMIT 1
      ) AS Source");
  }

  function data_dokter($where = "1=1")
  {
    $this->db->select('*');
    $this->db->from('tb_dokter');
    $this->db->join('tb_poliklinik', 'tb_dokter.id_poli = tb_poliklinik.id_poli');
    $this->db->where($where);
    return $this->db->get();
  }

  public function simpan_dokter($data)
  {
    $this->db->insert('tb_dokter', $data);
    return $this->db->affected_rows();
  }

  public function update_dokter($data, $id)
  {
    $this->db->where("id_dokter", $id);
    $this->db->update("tb_dokter", $data);
    return $this->db->affected_rows();
  }

  public function hapus_dokter($id)
  {
    $this->db->where('id_dokter', $id);
    $this->db->delete('tb_dokter');
    return $this->db->affected_rows();
  }

  function data_poli()
  {
    $this->db->select('*');
    $this->db->from('tb_poliklinik');
    return $this->db->get();
  }

  // daftar
  public function data_pendaftaran($additionalwhere = null)
  {
    return $this->db->query("SELECT
        tb_pendaftaran.`id_pendaftaran`,
        tb_pendaftaran.`id_pasien`,
        `tgl_daftar`,
        `nama`,
        `jenis_poli`,
        `nama_dokter`,
        `keluhan` 
      FROM
        `tb_pendaftaran`
        LEFT JOIN `tb_pasien` ON `tb_pasien`.`id_pasien` = `tb_pendaftaran`.`id_pasien`
        LEFT JOIN `tb_dokter` ON `tb_dokter`.`id_dokter` = `tb_pendaftaran`.`id_dokter`
        LEFT JOIN `tb_poliklinik` ON `tb_dokter`.`id_poli` = `tb_poliklinik`.`id_poli` 
        WHERE tb_pendaftaran.id_pendaftaran NOT IN (SELECT id_pendaftaran FROM tb_rekam_medis)
        $additionalwhere
      ORDER BY
        `id_pendaftaran` DESC");
  }

  function selesai_pendaftaran()
  {
    $this->db->select('tb_pendaftaran.id_pendaftaran, tgl_daftar, nama, jenis_poli, nama_dokter, keluhan');
    $this->db->from('tb_pendaftaran');
    $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pendaftaran.id_pasien', 'left');
    $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pendaftaran.id_dokter', 'left');
    $this->db->join('tb_poliklinik', 'tb_dokter.id_poli = tb_poliklinik.id_poli', 'left');
    $this->db->join('tb_rekam_medis', 'tb_rekam_medis.id_pendaftaran = tb_pendaftaran.id_pendaftaran');
    $this->db->order_by('id_pendaftaran', 'desc');
    return $this->db->get();
  }
  function nomor_daftar()
  {
    return $this->db->query("SELECT CASE
        WHEN NUM < 10 THEN
          CONCAT('DFTR000',NUM)
        WHEN NUM < 100 THEN
          CONCAT('DFTR00',NUM)
        WHEN NUM < 1000 THEN
          CONCAT('DFTR0',NUM)
        WHEN NUM < 10000 THEN
          CONCAT('DFTR',NUM)
        ELSE
          'DFTR0001'
      END AS NUM
      
      FROM (
          SELECT RIGHT(id_pendaftaran, 4)+1 AS NUM
          FROM `tb_pendaftaran`
          ORDER BY id_pendaftaran DESC
          LIMIT 1
      ) AS Source");
  }

  function simpan_daftar($data)
  {
    $this->db->insert('tb_pendaftaran', $data);
    return $this->db->affected_rows();
  }

  // resep
  function data_resep($where)
  {
    $this->db->select('*');
    $this->db->from('tb_resep');
    if ($where) {
      $this->db->where('id_resep', $where);
    }
    $this->db->order_by('id_resep', 'desc');
    return $this->db->get();
  }

  function nomor_resep()
  {
    return $this->db->query("SELECT CASE
      WHEN NUM < 10 THEN
        CONCAT('RESP000',NUM)
      WHEN NUM < 100 THEN
        CONCAT('RESP00',NUM)
      WHEN NUM < 1000 THEN
        CONCAT('RESP0',NUM)
      WHEN NUM < 10000 THEN
        CONCAT('RESP',NUM)
      ELSE
        'RESP0001'
    END AS NUM
    
    FROM (
        SELECT RIGHT(id_resep, 4)+1 AS NUM
        FROM `tb_resep`
        ORDER BY id_resep DESC
        LIMIT 1
    ) AS Source");
  }

  function simpan_resep($data)
  {
    $this->db->insert('tb_resep', $data);
    return $this->db->affected_rows();
  }

  function nomor_rmd()
  {
    return $this->db->query("SELECT CASE
      WHEN NUM < 10 THEN
        CONCAT('RMED000',NUM)
      WHEN NUM < 100 THEN
        CONCAT('RMED00',NUM)
      WHEN NUM < 1000 THEN
        CONCAT('RMED0',NUM)
      WHEN NUM < 10000 THEN
        CONCAT('RMED',NUM)
      ELSE
        'RMED0001'
    END AS NUM
    
    FROM (
        SELECT RIGHT(id_rmd, 4)+1 AS NUM
        FROM `tb_rekam_medis`
        ORDER BY id_rmd DESC
        LIMIT 1
    ) AS Source");
  }

  function simpan_periksan($data)
  {
    $this->db->insert('tb_rekam_medis', $data);
    return $this->db->affected_rows();
  }
}
