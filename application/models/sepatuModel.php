<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sepatuModel extends CI_Model {
		public function tambahSepatu($path){
			$data = [
				"nama" => $this->input->post('sepatu', true),
				"harga" => $this->input->post('harga', true),
				"path" => $path,
			];
			$this->db->insert('sepatu',$data);
		}

		public function getSepatu(){
			$data = $this->db->get('sepatu');
			return $data->result_array();
        }
        
        public function hapusSepatu($id){
            $this->db->where('id',$id);
			return $this->db->delete('sepatu');
        }

        public function getSepatuById($id){
			$q = $this->db->select('*')->from('sepatu')->where('id',$id)->get();
			return $q->result_array();
        }
        
        public function ubahSepatu($q){
            $data = [
				"nama" => $q[0]["nama"],
				"harga" => $q[0]["harga"],
				"path" => $q[0]["path"],
			];
			$this->db->where('id',$q[0]["id"]);
			return $this->db->update('sepatu',$data);
        }
}

