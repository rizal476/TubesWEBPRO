<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Model {
		public function tambahUser(){
			$data = [
				"nama_depan" => $this->input->post('nama_depan', true),
				"nama_belakang" => $this->input->post('nama_belakang', true),
				"email" => $this->input->post('email', true),
				"password" => $this->input->post('password', true),
			];
			$this->db->insert('user',$data);
		}

		public function cekLogin($table,$where){
			return $this->db->get_where('user',$where);
		}

		public function getUser($email){
			$q = $this->db->select('*')->from('user')->where('email',$email)->get();
			return $q->result_array();
		}

		public function getUserById($id){
			$q = $this->db->select('*')->from('user')->where('id',$id)->get();
			return $q->result_array();
		}

		public function updateUser($id){
			$data = [
				"nama_depan" => $this->input->post('nama_depan', true),
				"nama_belakang" => $this->input->post('nama_belakang', true),
				"email" => $this->input->post('email', true),
			];
			$this->db->where('id',$id);
			return $this->db->update('user',$data);
		}

		public function getAllUser(){
			$data = $this->db->get('user');
			return $data->result_array();
		}

		public function hapusDataUser($id){
			$this->db->where('id',$id);
			return $this->db->delete('user');
		}

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
}

