<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
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
		if ($this->session->userdata('status_u') == "Admin") {
			$where = array(
				'status_u' => "Karyawan"
			);
			$data['karyawan'] = $this->m_data->detail($where, 'users')->result();
			$this->load->view('admin/header3');
			$this->load->view('admin/karyawan', $data);
			$this->load->view('admin/footer3');
		}else{
			redirect('c_karyawan');
		}
	}

	function detail(){
		if ($this->session->userdata('status_u') == "Admin") {
			$id_u = $this->session->userdata('id_u');
			$where = array(
				'id_u' => $id_u
			);
			$data['karyawan'] = $this->m_data->detail($where, 'users')->result_array();
			$this->load->view('admin/header3');
			$this->load->view('admin/profile', $data);
			$this->load->view('admin/footer3');
		}else{
			redirect('c_karyawan');
		}
	}

	function hapus(){
		if ($this->session->userdata('status_u') == "Admin") {
			$id_u = $this->input->get('id');
			$where = array(
				'id_u' => $id_u
			);
			$this->m_data->delete($where,'users');
			?><script type="text/javascript">alert("Data Berhasil Dihapus"); window.location="http://localhost/car/c_admin"</script> <?php
		}else{
			redirect('c_karyawan');
		}
	}

	public function transaksi()
	{
		if ($this->session->userdata('status_u') == "Admin") {
			$data['sewa'] = $this->m_data->data2()->result();
			$this->load->view('admin/header3');
			$this->load->view('admin/transaksi', $data);
			$this->load->view('admin/footer3');
		}else{
			redirect('c_karyawan');
		}
	}

	function detail2(){
		if ($this->session->userdata('status_u') == "Admin") {
			$id_s = $this->input->get('id');
			$where = array(
				'sewa.id_s' => $id_s
			);
			$data['sewa'] = $this->m_data->detail2($where, 'sewa')->result_array();
			$this->load->view('admin/header3');
			$this->load->view('admin/detail', $data);
			$this->load->view('admin/footer3');
		}else{
			redirect('c_karyawan');
		}
	}

	function mobil()
	{
		if ($this->session->userdata('status_u') == "Admin") {
			$data['mobil'] = $this->m_data->mobil('mobil')->result();
			$this->load->view('admin/header3');
			$this->load->view('admin/mobil', $data);
			$this->load->view('admin/footer3');
		}else{
			redirect('c_karyawan');
		}
	}

	function detail3(){
		if ($this->session->userdata('status_u') == "Admin") {
			$id_m = $this->input->get('id');
			$where = array(
				'id_m' => $id_m
			);
			$data['mobil'] = $this->m_data->detail($where, 'mobil')->result_array();
			$this->load->view('admin/header3');
			$this->load->view('admin/detail_mobil',$data);
			$this->load->view('admin/footer3');
		}else{
			redirect('c_karyawan');
		}
	}

	public function tambah_karyawan()
	{
		if ($this->session->userdata('status_u') == "Admin") {
			$this->load->view('admin/header3');
			$this->load->view('admin/tambah_karyawan');
			$this->load->view('admin/footer3');
		}else{
			redirect('c_karyawan');
		}
	}

	function tambah() {
        if($this->input->post('submit')){
        	$nm_u = $this->input->post('nm_u');
        	$almt_u = $this->input->post('almt_u');
        	$telp_u = $this->input->post('telp_u');
        	$jk_u = $this->input->post('jk_u');
        	$ktp_u = $this->input->post('ktp_u');
        	$foto_u = $this->input->post('foto_u');
        	$user_u = $this->input->post('user_u');
		    $pass_u = $this->input->post('pass_u');
		    $upload = $this->m_data->f_karyawan();
		    if($upload['result'] == "success"){
				$karyawan = array (
					    'nm_u' => $nm_u,
					    'almt_u' => $almt_u,
					    'telp_u' => $telp_u,
					    'jk_u' => $jk_u,
					    'ktp_u' => $ktp_u,
					    'user_u' => $user_u,
					    'foto_u' => $upload['file']['file_name'],
					    'status_u' => "Karyawan",
					    'pass_u' => md5($pass_u)
				);
				$this->m_data->add($karyawan,'users');
				?><script type="text/javascript">alert("Data Berhasil Ditambahkan"); window.location="http://localhost/car/c_admin"</script> <?php
			}else{
				$data['message'] = $upload['error'];
			}
		}
    }

}
