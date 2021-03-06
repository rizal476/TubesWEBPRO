<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->Model('user');	
		$this->load->Model('sepatuModel');	
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index(){
		$data['sepatu'] = $this->sepatuModel->getSepatu();
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

	public function YAS(){
		$data['sepatu'] = $this->sepatuModel->getSepatuByTipe("YAS");
		$this->load->view('sepatu',$data);
		// var_dump($data["sepatu"]);
	}

	public function SN(){
		$data['sepatu'] = $this->sepatuModel->getSepatuByTipe("SN");
		$this->load->view('sn',$data);
	}

	public function APPAREL(){
		$data['sepatu'] = $this->sepatuModel->getSepatuByTipe("APPAREL");
		$this->load->view('apparel',$data);
	}

	public function DRESS(){
		$data['sepatu'] = $this->sepatuModel->getSepatuByTipe("DRESS");
		$this->load->view('dress',$data);
	}

	public function clearance(){
		$data['sepatu'] = $this->sepatuModel->getSepatuByTipe("CLEARANCE");
		$this->load->view('clearence',$data);
	}

}
