<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loggedHome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->Model('user');	
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
        $data['judul'] = '';
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

    public function cekFoto(){
        $data['sepatu'] = $this->user->getSepatu();
        $this->load->view('cekFoto',$data);
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
            
            // conditon in form_validation, if user input form = false, then load page "tambah" again
            if ($this->form_validation->run() == FALSE){
                $this->load->view('add_sepatu');
            }
            
            //else, when successed {
            //call method "tambahDataMahasiswa" in Mahasiswa_model
            //use flashdata to to show alert "added success"
            //back to controller mahasiswa }
            else{
                $this->user->tambahSepatu($path);
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
}
