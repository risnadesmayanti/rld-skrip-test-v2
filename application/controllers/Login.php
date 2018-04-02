<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		// $this->session->sess_destroy();
		$this->load->view('user/dashboard');
		$this->session->sess_destroy();

	}
	public function debug(){
		echo date("Y-m-d");
	}
	public function proses_tambah_user(){
		$post = $this->input->post();
		// var_dump($post);
		if($post['a1'] != "1"){
			$this->session->set_flashdata('error','Anda harus memilih Ya pada pernyataan pertama');
			$this->session->keep_flashdata('error');

			// $this->load->view('user/dashboard');
			// redirect('/','refresh');
		}else{
			$substr = substr($post['jabatan'],-1);
			if($substr == 'A'){
				$post['tipe'] = 1;
				$post['jabatan'] = substr($post['jabatan'],0,-1);
			}else{
				$post['tipe'] = 2;
				// $post['jabatan'] = substr($post['jabatan'],0,-1);
			}
			$post['date_access'] = date("Y-m-d");
			$iid = $this->User->insert($post);
			$userdata = [
			'id'=> $iid,
			// 'username' => $post['username'],
			// 'email' => $post['email'],
			'univ' => $post['kategori'],
			'tipe' => $post['tipe'],
			'jabatan' => $post['jabatan'], 
			'counter' => 0
			];
			$this->session->set_userdata($userdata);
			redirect('index.php/isi_kuisioner');
		}
	}
	// public function admin_page(){
	// 	$this->load->view('user_page');
	// }
	// public function isi_kuisioner(){
	// 	$this->load->view('user/kuisioner');
	// }

	public function login(){
		$insert = $this->input->post();
		// var_dump($insert);
		$this->User->insert($insert);
	}
	public function logout(){
		$post = $this->input->post();
		$this->User->insertrating($post);
		$this->session->sess_destroy();
		redirect('index.php/login');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */