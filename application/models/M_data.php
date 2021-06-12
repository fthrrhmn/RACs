<?php 
 
class M_data extends CI_Model{
	function data(){
		$data = $this->db->select('*')
						->from('mobil')
						-> where('stok >= 1')
						->get();
		return $data;
	}

	function data2(){
		$data = $this->db->select('*')
						->from('sewa')
						->join('customer', 'sewa.id_c = customer.id_c')
						->join('mobil', 'sewa.id_m = mobil.id_m')
						->where("status_s = 'Menunggu Konfirmasi' or status_s = 'Masa Sewa' or status_s = 'Menunggu Pembayaran'")
						->get();
		return $data;
	}

	function tambah(){
		$config['upload_path'] = './image/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
		$config['file_name'] = "reg".round(microtime(true));
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('foto_c')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	function f_karyawan(){
		$config['upload_path'] = './image/karyawan/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
		$config['file_name'] = "reg".round(microtime(true));
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('foto_u')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	function f_mobil(){
		$config['upload_path'] = './image/mobil/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
		$config['file_name'] = "reg".round(microtime(true));
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('foto_m')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	function foto(){
		$config['upload_path'] = './image/bayar/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
		$config['file_name'] = "reg".round(microtime(true));
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('foto_b')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	function detail($where, $table){
		$data = $this->db->select('*')
						->from($table)
						->where($where)
						->get();
		return $data;
	}

	function mobil($table){
		$data = $this->db->select('*')
						->from($table)
						->get();
		return $data;
	}

	function detail2($where, $table){
		$data = $this->db->select('*')
						->from($table)
						->join('customer', 'sewa.id_c = customer.id_c')
						->join('mobil', 'sewa.id_m = mobil.id_m')
						->join('bayar', 'sewa.id_s = bayar.id_s')
						->where($where)
						->get();
		return $data;
	}
	
	function add($data,$table) {
        $this->db->insert($table,$data);
    }

    function edit($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function sewa($where, $table){
		$data = $this->db->select('*')
						->from($table)
						->join('mobil', 'sewa.id_m = mobil.id_m')
						->where($where)
						->get();
		return $data;
	}

	function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}