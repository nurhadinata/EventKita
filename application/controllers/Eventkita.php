<?php

class Eventkita extends CI_Controller {

  public function index(){
    $this->load->helper('url');
    $this->load->view('View_LandingPage');
  }

  public function home() {
    session_start();
    $this->load->helper('url');
    $this->load->view('View_Homepage');
  }

  public function event() {
    $this->load->helper('url');
    $this->load->model('Event_model');
    $events = $this->Event_model->get_event();
    $data ['events']=$events; 
    $this->load->view('View_Event', $data);
  }

  public function Logevent() {
    $this->load->helper('url');
    $this->load->model('Event_model');
    $events = $this->Event_model->get_Logevent();
    $data ['events']=$events; 
    $this->load->view('View_LogEvent', $data);
  }

  public function event_by_kategori($kategori) {
    $this->load->helper('url');
    $this->load->model('Event_model');
    $events = $this->Event_model->get_event_by_kategori($kategori);
    $data ['events']=$events; 
    $this->load->view('View_Event', $data);
  }

  public function event_search() {
    $this->load->helper('url');
    $search = $this->input->post('search');
    $this->load->model('Event_model');
    $events = $this->Event_model->get_event_search($search);
    $data['search']=$search;
    $data ['events']=$events; 
    $this->load->view('View_Event', $data);
  }

  public function event_detail($id_event) {
    $this->load->helper('url');
    $this->load->model('Event_model');
    $events = $this->Event_model->get_event_by_id($id_event);
    $data ['events']=$events; 
    $this->load->view('View_TicketDetails', $data);
  }

  public function event_buy($id_event){
    $this->load->helper('url');
    $this->load->model('Event_model');
    $events = $this->Event_model->get_event_by_id($id_event);
    $data ['events']=$events; 
    $this->load->view('View_Buy', $data);
  }

  public function transaction_process($id_event){
    $nama = $this->input->post('nama');
    $no_telp = $this->input->post('no_telp');
    $jumlah_tiket = $this->input->post('jumlah_tiket');
    $harga = $this->input->post('harga');
    $total = $harga*$jumlah_tiket;

    $this->load->helper('url');
    $this->load->model('Event_model');

    $transaksi= $this->Event_model->add_transaction($id_event,$nama,$no_telp,$jumlah_tiket,$total);
    $id_transaksi=$transaksi[0]->id_transaksi;
    redirect(base_url("eventkita/payment/$id_transaksi"), 'refresh');
  }

  public function payment($id_transaksi){
    $this->load->helper('url');
    $this->load->model('Event_model');
    $data['id_transaksi']=$id_transaksi;
    $this->load->view('View_Buy2', $data);
  }

  public function get_transaction($id_user) {
    $this->load->helper('url');
    $this->load->model('Event_model');
    $transaction = $this->Event_model->get_transaction($id_user);
    $data ['transaction'] = $transaction;
    $this->load->view('transaction_view', $data);
  }

  public function register() {
    $this->load->helper('url');
    $this->load->view('View_Register');
  }

  public function register_process() {
    session_start();
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $email = $this->input->post('email');

    $this->load->helper('url');
    $this->load->model('Event_model');

    $this->Event_model->add_user($username,$password,$email);
    $data['user'] = $this->Event_model->check_user($username,$password);
    $_SESSION['user']=$data['user'];
    redirect(base_url("eventkita/home"), 'refresh');
  }

  public function login() {
    $this->load->helper('url');
    $this->load->view('View_Login');
  }

  public function login_process() {
    session_start();
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    
    $this->load->helper('url');
    $this->load->model('Event_model');
    $data['user'] =  $this->Event_model->check_user($username,$password);
    if($data['user']!=null){
      $_SESSION['user']= $data['user'];
      redirect(base_url("eventkita/home"), 'refresh');
    }else{
      redirect(base_url("eventkita/login"), 'refresh');
    }
  }

  public function user(){
    session_start();
    $this->load->helper('url');
    $this->load->model('Event_model');
    $id = $_SESSION['user'][0]->id_user;
    $user = $this->Event_model->get_user_by_id($id);
    $data['user'] = $user; 
    $this->load->view('View_Profile', $data);
  }

  public function user_update() {
    $id_user = $this->input->post('id_user');
    $company = $this->input->post('company');
    $username = $this->input->post('username');
    $email = $this->input->post('email');
    $nama_depan = $this->input->post('nama_depan');
    $nama_belakang = $this->input->post('nama_belakang');
    $alamat = $this->input->post('alamat');
    $city = $this->input->post('city');
    $country = $this->input->post('country');
    $about =$this->input->post('about');

    $this->load->helper('url');
    $this->load->model('Event_model');

    $this->Event_model->update_user($id_user, $username, $company, $email, $nama_depan, $nama_belakang, $alamat, $city, $country, $about);
    redirect(base_url("eventkita/user"), 'refresh');
  }

  public function add_transaction($id_user, $id_event){
    
  }

  public function contact(){
    $this->load->helper('url');
    $this->load->view('View_Contact');
  }

  public function Logcontact(){
    $this->load->helper('url');
    $this->load->view('View_LogContact');
  }

  public function contact_process(){
    $name = $this->input->post('nama');
    $email = $this->input->post('email');
    $pesan = $this->input->post('pesan');

    $this->load->helper('url');
    $this->load->model('Event_model');

    $this->Event_model->add_contact($nama,$email,$pesan);
    redirect(base_url(), 'refresh');
  }

  public function map(){
    $this->load->helper('url');
    $this->load->view('View_Map');
  }

  public function logout(){
    session_start() ;
    $this->load->helper('url');
    session_destroy();
    redirect('base_url()','refresh'); 
  }
}

