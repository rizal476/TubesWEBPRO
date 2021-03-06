<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loggedHome extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->Model('user');	
        $this->load->Model('sepatuModel');
		$this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        if ($this->session->userdata('status') != "login"){
            redirect("home/login");
        }
	}

    public function index(){
        if ($this->session->userdata("email") == "admin@admin.com"){
            $this->load->view('loggedAdmin');
        }
        else {
            $this->load->view('loggedIn');
        }
    }

    public function listCustomer(){
		$data['customer'] = $this->user->getAllUser();
		$this->load->view('list_Customer', $data);
    }

    public function hapusUser($id){
        $this->user->hapusDataUser($id);
        redirect('loggedHome/listCustomer');
    }

    public function addSepatu(){
        $this->load->view('add_sepatu', array('error' => ' ' ));
    }

    public function lihatSepatu(){
		$data['sepatu'] = $this->sepatuModel->getSepatu();
		$this->load->view('list_sepatu', $data);
    }

    public function hapusSepatu($id){
        $this->sepatuModel->hapusSepatu($id);
        redirect('loggedHome/lihatSepatu');
    }

    public function ubahSepatu($id){
        $q["data"] = $this->sepatuModel->getSepatuById($id);
        $this->load->view('editSepatu',$q);
    }

    public function updateSepatu($id){
        $config['upload_path']          =  './uploads/';//isi dengan nama folder temoat menyimpan gambar
        $config['allowed_types']        =  'jpg|png';//isi dengan format/tipe gambar yang diterima
        $config['max_size']             =  2000;//isi dengan ukuran maksimum yang bisa di upload
        $config['max_width']            =  0;//isi dengan lebar maksimum gambar yang bisa di upload
        $config['max_height']           = 0;//isi dengan panjang maksimum gambar yang bisa di upload

        $this->load->library('upload', $config);
        $q["data"] = $this->sepatuModel->getSepatuById($id);
        // var_dump($q);
        if(isset($_FILES['userfile']) && !empty($_FILES['userfile']['name'])){
            if ( !$this->upload->do_upload('userfile')){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('editSepatu',$q);
            }
            else{
                $content = $this->upload->data();

                $q[0] = [
                    "id" => $q["data"][0]["id"],
                    "nama" => $this->input->post('sepatu', true),
                    "harga" => $this->input->post('harga', true),
                    "tipe" => $this->input->post('tipe', true),
                    "path" => "uploads/".$content["file_name"],
                ];
                // echo $q[0]["id"];
                // var_dump($q);
            }
        }
        else {
            $q[0] = [
                "id" => $q["data"][0]["id"],
                "nama" => $this->input->post('sepatu', true),
                "harga" => $this->input->post('harga', true),
                "tipe" => $this->input->post('tipe', true),
                "path" => $q["data"][0]["path"],
            ];
        }
        $temp = $this->input->post('tipe',true);
        if ($temp == "YAS" || $temp == "SN" || $temp == "APPAREL" || $temp == "DRESS" || $temp == "CLEARANCE") {
            $this->sepatuModel->ubahSepatu($q);
        }
		redirect(base_url('loggedHome/lihatSepatu'));
    }

    public function do_upload(){
		$config['upload_path']          =  './uploads/';//isi dengan nama folder temoat menyimpan gambar
        $config['allowed_types']        =  'jpg|png';//isi dengan format/tipe gambar yang diterima
        $config['max_size']             =  2000;//isi dengan ukuran maksimum yang bisa di upload
        $config['max_width']            =  0;//isi dengan lebar maksimum gambar yang bisa di upload
        $config['max_height']           = 0;//isi dengan panjang maksimum gambar yang bisa di upload

        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload('userfile')){
            $error = array('error' => $this->upload->display_errors());
			$this->load->view('add_sepatu');
        }
        else{
            $content = $this->upload->data();
            $path = "uploads/".$content["file_name"];

            $this->form_validation->set_rules('sepatu', 'Nama', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required');
            $this->form_validation->set_rules('tipe', 'Tipe', 'required');
            
            // conditon in form_validation, if user input form = false, then load page "tambah" again
            if ($this->form_validation->run() == FALSE){
                $this->load->view('add_sepatu');
            }
            
            //else, when successed {
            //call method "tambahDataMahasiswa" in Mahasiswa_model
            //use flashdata to to show alert "added success"
            //back to controller mahasiswa }
            else{
                $temp = $this->input->post('tipe',true);
                if ($temp == "YAS" || $temp == "SN" || $temp == "APPAREL" || $temp == "DRESS" || $temp == "CLEARANCE"){
                    $this->sepatuModel->tambahSepatu($path);
                }
                // echo "sukses";

                // $this->session->set_flashdata('flash','ditambahkan');
                 redirect(base_url('loggedHome/addSepatu'));

                // $hasil = $this->db->select(*)->from('sepatu')->where('sepatu',"asd")->get();
                
            }
            //echo "sukses";
            
            // echo $namaFoto;
            // $this->load->view('V_Upload_success',$content);
        }   
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
		$this->user->updateUser($q[0]['id']);
		redirect('loggedHome/profile');
	}
}
