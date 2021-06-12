<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_karyawan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('karyawan/login');
	}

	function aksi_login()
	{
		$password = $this->input->post('password');
		$username = $this->input->post('username');
		$where = array(
			'user_u' => $username,
			'pass_u' => md5($password)
		);
		$cek = $this->m_login->cek($where,'users');

		$data['karyawan'] = $this->m_login->datauser($where, 'users');
		if ($cek != null) {
			$data_session = array(
				'user_u' => $data['karyawan'][0]['user_u'],
				'status_u' => $data['karyawan'][0]['status_u'],
				'id_u' => $data['karyawan'][0]['id_u']
			);
			$this->session->set_userdata($data_session);

			if($this->session->userdata('status_u') == "Karyawan"){
				redirect('c_karyawan/home');
			} 
			else{
				redirect('c_admin');
			}
		}else {
			?><script type="text/javascript">alert("Username dan Password Salah!"); window.location="http://localhost/car/c_karyawan/"</script> <?php
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('c_karyawan');
	}

	function home(){
		$data['sewa'] = $this->m_data->data2()->result();
		if ($this->session->userdata('status_u') == "Karyawan") {
			$this->load->view('karyawan/header2');
			$this->load->view('karyawan/transaksi',$data);
			$this->load->view('karyawan/footer2');
		}else{
			redirect('c_karyawan');
		}
	}

	function detail(){
		if ($this->session->userdata('status_u') == "Karyawan") {
			$id_s = $this->input->get('id');
			$where = array(
				'sewa.id_s' => $id_s
			);
			$data['sewa'] = $this->m_data->detail2($where, 'sewa')->result_array();
			$this->load->view('karyawan/header2');
			$this->load->view('karyawan/detail', $data);
			$this->load->view('karyawan/footer2');
		}else{
			redirect('c_karyawan');
		}
	}

	function status(){
		$id_s = $this->input->get('id');
		$where = array(
			'id_s' => $id_s
		);
		$status_s = $this->input->post('status_s');
		$stok = $this->input->post('stok');
		$id_m = $this->input->post('id_m');
		$sewa = array (
			'status_s' => $status_s 
		);
		$this->m_data->edit($where, $sewa,'sewa');
		if($status_s == "Selesai"){
			$where2 = array(
				'id_m' => $id_m
			);
			$mobil = array (
				'stok' => $stok+1
			);
			$this->m_data->edit($where2, $mobil,'mobil');
		}
		?><script type="text/javascript">alert("Data Berhasil Diupdate"); window.location="http://localhost/car/c_karyawan/home/"</script> <?php
	}

	function profile(){
		if ($this->session->userdata('status_u') == "Karyawan") {
			$id_u = $this->session->userdata('id_u');
			$where = array(
				'id_u' => $id_u
			);
			$data['karyawan'] = $this->m_data->detail($where, 'users')->result_array();
			$this->load->view('karyawan/header2');
			$this->load->view('karyawan/profile', $data);
			$this->load->view('karyawan/footer2');
		}else{
			redirect('c_karyawan');
		}
	}

	function edit_profile(){
		if ($this->session->userdata('status_u') == "Karyawan") {
			$id_u = $this->session->userdata('id_u');
			$where = array(
				'id_u' => $id_u
			);
			$data['karyawan'] = $this->m_data->detail($where, 'users')->result_array();
			$this->load->view('karyawan/header2');
			$this->load->view('karyawan/edit_profile', $data);
			$this->load->view('karyawan/footer2');
		}else{
			redirect('c_karyawan');
		}
	}

	function update() {
        if($this->input->post('submit')){
        	$id_u = $this->session->userdata('id_u');
        	$nm_u = $this->input->post('nm_u');
        	$almt_u = $this->input->post('almt_u');
        	$telp_u = $this->input->post('telp_u');
        	$jk_u = $this->input->post('jk_u');
        	$ktp_u = $this->input->post('ktp_u');
        	$foto = $this->input->post('foto');
        	$user_u = $this->input->post('user_u');
        	$pass = $this->input->post('pass');
		    $pass_u = $this->input->post('pass_u');
		    if($pass_u == NULL){
		    	$karyawan2= array (
				    'nm_u' => $nm_u, 
				    'almt_u' => $almt_u,
				    'telp_u' => $telp_u,
				    'jk_u' => $jk_u,
				    'ktp_u' => $ktp_u,
				    'user_u' => $user_u,
				    'pass_u' => $pass
				);

		    }else{
		    	$karyawan2= array (
				    'nm_u' => $nm_u, 
				    'almt_u' => $almt_u,
				    'telp_u' => $telp_u,
				    'jk_u' => $jk_u,
				    'ktp_u' => $ktp_u,
				    'user_u' => $user_u,
				    'pass_u' => md5($pass_u)
				);

		    }
		    $where = array(
				'id_u' => $id_u
			);
		    
		    $upload = $this->m_data->f_karyawan();
		    if($upload['result'] == "success"){
		    	$karyawan = array (
				    'foto_u' => $upload['file']['file_name']
				);
				$path = './image/karyawan/'.$foto;
				chmod($path, 0777);
				unlink($path);
		    }else{
		    	$karyawan = array (
					'foto_u' => $foto
				);
		    }
		    $this->m_data->edit($where, $karyawan2,'users');
		    $this->m_data->edit($where, $karyawan,'users');
		    ?><script type="text/javascript">alert("Data Berhasil Diupdate"); window.location="http://localhost/car/c_karyawan/profile/"</script> <?php
		}
    }
    function mobil(){
		$data['mobil'] = $this->m_data->mobil('mobil')->result();
		if ($this->session->userdata('status_u') == "Karyawan") {
			$this->load->view('karyawan/header2');
			$this->load->view('karyawan/mobil',$data);
			$this->load->view('karyawan/footer2');
		}else{
			redirect('c_karyawan');
		}
	}

	function detail_mobil(){
		if ($this->session->userdata('status_u') == "Karyawan") {
			$id_m = $this->input->get('id');
			$where = array(
				'id_m' => $id_m
			);
			$data['mobil'] = $this->m_data->detail($where, 'mobil')->result_array();
			$this->load->view('karyawan/header2');
			$this->load->view('karyawan/detail_mobil',$data);
			$this->load->view('karyawan/footer2');
		}else{
			redirect('c_karyawan');
		}
	}

	function edit_mobil(){
		if ($this->session->userdata('status_u') == "Karyawan") {
			$id_m = $this->input->get('id');
			$where = array(
				'id_m' => $id_m
			);
			$data['mobil'] = $this->m_data->detail($where, 'mobil')->result_array();
			$this->load->view('karyawan/header2');
			$this->load->view('karyawan/edit_mobil',$data);
			$this->load->view('karyawan/footer2');
		}else{
			redirect('c_karyawan');
		}
	}

	function update_mobil() {
        if($this->input->post('submit')){
        	$id_m = $this->input->post('id_m');
        	$nm_m = $this->input->post('nm_m');
        	$tarif = $this->input->post('tarif');
        	$plat = $this->input->post('plat');
        	$merk = $this->input->post('merk');
        	$kapasitas = $this->input->post('kapasitas');
        	$foto = $this->input->post('foto');
        	$stok = $this->input->post('stok');
		    $tambahan = $this->input->post('tambahan');
		    $where = array(
				'id_m' => $id_m
			);
		    $mobil2 = array (
				    'nm_m' => $nm_m,
				    'tarif' => $tarif,
				    'plat' => $plat,
				    'merk' => $merk,
				    'kapasitas' => $kapasitas,
				    'stok' => $stok,
				    'tambahan' => $tambahan
			);
		    $upload = $this->m_data->f_mobil();
		    if($upload['result'] == "success"){
		    	$mobil = array (
				    'foto_m' => $upload['file']['file_name']
				);
				$path = './image/mobil/'.$foto;
				chmod($path, 0777);
				unlink($path);
		    }else{
		    	$mobil = array (
					'foto_m' => $foto
				);
		    }
		    $this->m_data->edit($where, $mobil2,'mobil');
		    $this->m_data->edit($where, $mobil,'mobil');
		    ?><script type="text/javascript">alert("Data Berhasil Diupdate"); window.location="http://localhost/car/c_karyawan/mobil/"</script> <?php
		}
    }

    function tambah_mobil(){
		if ($this->session->userdata('status_u') == "Karyawan") {
			$this->load->view('karyawan/header2');
			$this->load->view('karyawan/tambah_mobil');
			$this->load->view('karyawan/footer2');
		}else{
			redirect('c_karyawan');
		}
	}

	function add_mobil() {
        if($this->input->post('submit')){
        	$nm_m = $this->input->post('nm_m');
        	$tarif = $this->input->post('tarif');
        	$plat = $this->input->post('plat');
        	$merk = $this->input->post('merk');
        	$kapasitas = $this->input->post('kapasitas');
        	$stok = $this->input->post('stok');
		    $tambahan = $this->input->post('tambahan');
		    $upload = $this->m_data->f_mobil();
		    if($upload['result'] == "success"){
				$mobil = array (
					    'nm_m' => $nm_m,
					    'tarif' => $tarif,
					    'plat' => $plat,
					    'merk' => $merk,
					    'kapasitas' => $kapasitas,
					    'stok' => $stok,
					    'tambahan' => $tambahan,
					    'foto_m' => $upload['file']['file_name']
				);
				$this->m_data->add($mobil,'mobil');
				?><script type="text/javascript">alert("Data Berhasil Ditambahkan"); window.location="http://localhost/car/c_karyawan/mobil"</script> <?php
			}else{
				$data['message'] = $upload['error'];
			}
		}
    }

    function hapus_mobil(){
		if ($this->session->userdata('status_u') == "Karyawan") {
			$id_m = $this->input->get('id');
			$where = array(
				'id_m' => $id_m
			);
			$this->m_data->delete($where,'mobil');
			?><script type="text/javascript">alert("Data Berhasil Dihapus"); window.location="http://localhost/car/c_karyawan/mobil"</script> <?php
		}else{
			redirect('c_karyawan');
		}
	}

	function batal(){
		if ($this->session->userdata('status_u') == "Karyawan") {
			$id_s = $this->input->get('id'); 
			$where = array(
				'id_s' => $id_s
			);
			$data['customer'] = $this->m_data->detail($where, 'sewa')->result_array();
			$id_m = $data['customer'][0]['id_m'];
			$where2 = array(
				'id_m' => $id_m
			);
			$data1['mobil'] = $this->m_data->detail($where2, 'mobil')->result_array();
			$stok = $data1['mobil'][0]['stok'];
			$mobil = array(
				'stok' => $stok+1
			);
			$this->m_data->edit($where2, $mobil,'mobil');
			$this->m_data->delete($where, 'sewa');
			?><script type="text/javascript">alert("Pesanan Dibatalkan"); window.location="http://localhost/car/"</script> <?php
		}else{
			redirect('c_login');
		}
	}
}
