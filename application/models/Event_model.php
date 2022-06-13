<?php

class Event_model extends CI_Model {
  public function get_all_event() {
    $this->load->database();
    $query = $this->db->query('SELECT e.id_event, e.nama_event, e.poster, e.detail_event,
                                e.lokasi, e.waktu, e.harga_tiket, k.kategori
                                FROM events e, kategori k
                                WHERE e.id_kategori = k.id_kategori 
                                ORDER BY e.id_event');
    return $query->result();
  }

  public function get_kategori_by_id($id_kategori) {
    $this->load->database();
    $query = $this->db->query("SELECT * FROM kategori
                                WHERE id_kategori = '$id_kategori'");
    return $query->result();
  }

  public function get_event() {
    $this->load->database();
    $query = $this->db->query("SELECT e.id_event, e.id_kategori, k.kategori, e.nama_event, e.poster, e.detail_event, e.lokasi, e.waktu, e.harga_tiket 
                                FROM events e, kategori k
                                WHERE e.id_kategori = k.id_kategori
                                ORDER BY e.id_event");
    return $query->result();
  }

  public function get_Logevent() {
    $this->load->database();
    $query = $this->db->query("SELECT e.id_event, e.id_kategori, k.kategori, e.nama_event, e.poster, e.detail_event, e.lokasi, e.waktu, e.harga_tiket 
                                FROM events e, kategori k
                                WHERE e.id_kategori = k.id_kategori
                                ORDER BY e.id_event");
    return $query->result();
  }

  public function get_event_by_kategori($id_kategori) {
    $this->load->database();
    $query = $this->db->query("SELECT e.id_event, e.nama_event, e.poster, e.detail_event,
                                e.lokasi, e.waktu, e.harga_tiket, k.kategori
                                FROM events e, kategori k
                                WHERE e.id_kategori = k.id_kategori 
                                AND e.id_kategori = '$id_kategori'
                                ORDER BY e.id_event");
    return $query->result();
  }

  public function get_event_search($search) {
    $this->load->database();
    $query = $this->db->query("SELECT e.id_event, e.nama_event, e.poster, e.detail_event,
                                e.lokasi, e.waktu, e.harga_tiket, k.kategori
                                FROM events e, kategori k
                                WHERE e.id_kategori = k.id_kategori 
                                AND e.nama_event LIKE '%$search%'
                                ORDER BY e.id_event");
    return $query->result();
  }

  public function get_event_by_id($id_event) {
    $this->load->database();
    $query = $this->db->query("SELECT e.id_event, e.nama_event, e.poster, e.detail_event,
                                e.lokasi, e.waktu, e.harga_tiket, k.kategori
                                FROM events e, kategori k
                                WHERE e.id_kategori = k.id_kategori 
                                AND e.id_event = '$id_event'
                                ORDER BY e.id_event");
    return $query->result();
  }

  public function get_user_by_id($id_user){
    $this->load->database();
    $query = $this->db->query("SELECT id_user, username, company, email, password, alamat, foto_user, tgl_lahir, (YEAR(NOW())-YEAR(tgl_lahir)) AS umur, nama_depan, nama_belakang, CONCAT(CONCAT(nama_depan,' '),nama_belakang) AS nama_user, about, city, country, saldo FROM users WHERE id_user = '$id_user'");
    return $query->result();
  }

  public function add_user($username,$password,$email) {
    $this->load->database();
    $this->db->query("INSERT INTO users (username, password, email, tgl_lahir)
                      VALUES ('$username', '$password', '$email', '1981-01-01')");
  }

  public function update_user($id_user, $username, $company, $email, $nama_depan, $nama_belakang, $alamat, $city, $country, $about) {
    $this->load->database();
    $this->db->query("UPDATE users SET username = '$username', company = '$company', email='$email', nama_depan ='$nama_depan',
                       nama_belakang = '$nama_belakang', alamat='$alamat', city='$city', country='$country', about='$about'
                      WHERE id_user = '$id_user'");
  }

  public function check_user($username, $password) {
    $this->load->database();
    $query = $this->db->query("SELECT id_user, username, password, foto_user, tgl_lahir FROM users WHERE username = '$username' AND password = '$password'");
    return $query->result();
  }

  public function add_transaction($id_event,$nama,$no_telp,$jumlah_tiket,$total) {
    $this->load->database();
    $this->db->query("INSERT INTO transaksi (id_event, nama, no_telp, jumlah_tiket, waktu_transaksi, nominal_transaksi, status)
                      VALUES ('$id_event', '$nama', '$no_telp', '$jumlah_tiket', NOW(), '$total', 0)");
    $query = $this->db->query("SELECT id_transaksi FROM transaksi
                              ORDER BY id_transaksi DESC LIMIT 1");
    return $query->result();
  }

  public function  get_transaction($id_user){
    $this->load->database();
    $query = $this->db->query();
    return $query->result();
  }

  public function add_contact($nama, $email, $pesan){
    $this->load->database();
    $this->db->query("INSERT INTO contact (nama, email, pesan)
                      VALUES ('$nama','$email','$pesan')");
  }


}


