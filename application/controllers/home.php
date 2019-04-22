<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->Model('user');	
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index(){
		$data['sepatu'] = $this->user->getSepatu();
		$this->load->view('body_home',$data);
	}

	public function search(){
		$this->load->view('search');
	}

	public function createAccount(){
		$this->load->view('create_account');
	}

	public function login(){
		$this->load->view('login');
	}

	public function payment(){
		$this->load->view('payment');
	}

	public function forgotPass(){
		$this->load->view('forgotpass');
	}

	public function about(){
		$this->load->view('about');
	}

	public function tambah(){
		$data['judul'] = '';
		
		//echo ($data["nama_depan"]);
		//from library form_validation, set rules for nama, nim, email = required
		$this->form_validation->set_rules('nama_depan', 'Nama', 'required');
		$this->form_validation->set_rules('nama_belakang', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		

		//conditon in form_validation, if user input form = false, then load page "tambah" again
		if ($this->form_validation->run() == FALSE){
			$this->load->view('create_account',$data);
		}
		
		//else, when successed {
		//call method "tambahDataMahasiswa" in Mahasiswa_model
		//use flashdata to to show alert "added success"
		//back to controller mahasiswa }
		else{
		$this->user->tambahUser();
			
			// $this->session->set_flashdata('flash','ditambahkan');
			redirect('home');
		}
	}

	public function aksiLogin(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' =>$password
			);
		$cek = $this->user->cekLogin("user",$where)->num_rows();
		if($cek > 0){
			$q = $this->user->getUser($email);
			$data_session = array(
				'nama' => $q[0]["nama_depan"]." ".$q[0]["nama_belakang"],
				'email' => $email,
				'nama_depan' => $q[0]["nama_depan"],
				'nama_belakang' => $q[0]["nama_belakang"],
				'status' => "login",
				'id' => $q[0]["id"]
				);
			
			$this->session->set_userdata($data_session);
			redirect(base_url("loggedHome"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}

	public function profile(){
		$q = $this->user->getUserById($this->session->userdata('id'));
		// echo $this->session->userdata('id');
		// var_dump($q);
			$data_session = array(
				'nama' => $q[0]["nama_depan"]." ".$q[0]["nama_belakang"],
				'email' => $q[0]["email"],
				'nama_depan' => $q[0]["nama_depan"],
				'nama_belakang' => $q[0]["nama_belakang"],
				'status' => "login",
				'id' => $q[0]["id"]
				);
			
			$this->session->set_userdata($data_session);
		$this->load->view('profile');
	}

	public function editProfile(){
		$this->load->view('editProfile');
	}

	public function updateProfile(){
		$q = $this->user->getUser($this->session->userdata('email'));
		//var_dump($q);
		$this->user->updateUser($q[0]['id']);
			// $this->session->set_flashdata('flash','ditambahkan');
		redirect('home/profile');
	}

	public function sepatu(){
		$data['sepatu'] = $this->user->getSepatu();
		$this->load->view('sepatu',$data);
	}

}
