<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_data extends CI_Controller {

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
	function index(){
		$data['mobil'] = $this->m_data->data()->result();
		if ($this->session->userdata('status') == "3") {
			$this->load->view('customer/header2');
			$this->load->view('customer/tables',$data);
			$this->load->view('customer/footer2');
		}else{
			$this->load->view('customer/header');
			$this->load->view('customer/tables',$data);
			$this->load->view('customer/footer');
		}
	}
	
	function register(){
		$this->load->view('customer/register');
	}

	function tambah() {
        if($this->input->post('submit')){
        	$nm_c = $this->input->post('nm_c');
        	$almt_c = $this->input->post('almt_c');
        	$telp_c = $this->input->post('telp_c');
        	$jk_c = $this->input->post('jk_c');
        	$ktp_c = $this->input->post('ktp_c');
        	$foto_c = $this->input->post('foto_c');
        	$user_c = $this->input->post('user_c');
		    $pass_c = $this->input->post('pass_c');
		    if(!preg_match("/^[0-9]*$/", $ktp_c)){
				?><script type="text/javascript">alert("Data KTP harus diisi dengan benar!"); window.location="http://localhost/car/c_data/register"</script> <?php
			}else{
				$upload = $this->m_data->tambah();
		    if($upload['result'] == "success"){
				$customer = array (
					    'nm_c' => $nm_c,
					    'almt_c' => $almt_c,
					    'telp_c' => $telp_c,
					    'jk_c' => $jk_c,
					    'ktp_c' => $ktp_c,
					    'user_c' => $user_c,
					    'foto_c' => $upload['file']['file_name'],
					    'pass_c' => md5($pass_c)
					);
				}else{
					$customer = array (
						    'nm_c' => $nm_c,
						    'almt_c' => $almt_c,
						    'telp_c' => $telp_c,
						    'jk_c' => $jk_c,
						    'ktp_c' => $ktp_c,
						    'user_c' => $user_c,
						    'pass_c' => md5($pass_c)
					);
				}
				$this->m_data->add($customer,'customer');
					?><script type="text/javascript">alert("Data Berhasil Ditambahkan"); window.location="http://localhost/car/"</script> <?php

			}
		}
    }

	function edit_profile(){
		if ($this->session->userdata('status') == "3") {
			$id_c = $this->session->userdata('id_c');
			$where = array(
				'id_c' => $id_c
			);
			$data['customer'] = $this->m_data->detail($where, 'customer')->result_array();
			$this->load->view('customer/header2');
			$this->load->view('customer/edit_profile', $data);
			$this->load->view('customer/footer2');
		}else{
			redirect('c_login');
		}
	}

	function update() {
        if($this->input->post('submit')){
        	$id_c = $this->session->userdata('id_c');
        	$nm_c = $this->input->post('nm_c');
        	$almt_c = $this->input->post('almt_c');
        	$telp_c = $this->input->post('telp_c');
        	$jk_c = $this->input->post('jk_c');
        	$ktp_c = $this->input->post('ktp_c');
        	$foto = $this->input->post('foto');
        	$pass = $this->input->post('pass');
        	$user_c = $this->input->post('user_c');
		    $pass_c = $this->input->post('pass_c');
		    if($pass_c == NULL){
		    	$customer2 = array (
				    'nm_c' => $nm_c,
				    'almt_c' => $almt_c,
				    'telp_c' => $telp_c,
				    'jk_c' => $jk_c,
				    'ktp_c' => $ktp_c,
				    'user_c' => $user_c,
				    'pass_c' => $pass
				);
		    }else{
		    	$customer2 = array (
				    'nm_c' => $nm_c,
				    'almt_c' => $almt_c,
				    'telp_c' => $telp_c,
				    'jk_c' => $jk_c,
				    'ktp_c' => $ktp_c,
				    'user_c' => $user_c,
				    'pass_c' => md5($pass_c)
				);

		    }
		    $where = array(
				'id_c' => $id_c
			);
		    $upload = $this->m_data->tambah();
		    if($upload['result'] == "success"){
		    	$customer = array (
				    'foto_c' => $upload['file']['file_name']
				);
				$path = './image/'.$foto;
				chmod($path, 0777);
				unlink($path);
		    }else{
		    	$customer = array (
					'foto_c' => $foto
				);
		    }
		    $this->m_data->edit($where, $customer2,'customer');
		    $this->m_data->edit($where, $customer,'customer');
		    ?><script type="text/javascript">alert("Data Berhasil Diupdate"); window.location="http://localhost/car/c_data/profile/"</script> <?php

		}
    }

	function profile(){
		if ($this->session->userdata('status') == "3") {
			$id_c = $this->session->userdata('id_c');
			$where = array(
				'id_c' => $id_c
			);
			$data['customer'] = $this->m_data->detail($where, 'customer')->result_array();
			$this->load->view('customer/header2');
			$this->load->view('customer/profile', $data);
			$this->load->view('customer/footer2');
		}else{
			redirect('c_login');
		}
	}

	function detail_mobil()
	{
		if ($this->session->userdata('status') == "3") {
			$id_m = $this->input->get('id');
			$where = array(
				'id_m' => $id_m
			);
			$data['mobil'] = $this->m_data->detail($where, 'mobil')->result_array();
			$this->load->view('customer/header2');
			$this->load->view('customer/detail',$data);
			$this->load->view('customer/footer2');
		}
		else{
			$id_m = $this->input->get('id');
			$where = array(
				'id_m' => $id_m
			);
			$data['mobil'] = $this->m_data->detail($where, 'mobil')->result_array();
			$this->load->view('customer/header');
			$this->load->view('customer/detail',$data);
			$this->load->view('customer/footer');
		}
	}

	function pesan()
	{
		if ($this->session->userdata('status') == "3") {
			$id_m = $this->input->get('id');
			$where = array(
				'id_m' => $id_m
			);
			$data['mobil'] = $this->m_data->detail($where, 'mobil')->result_array();
			$this->load->view('customer/header2');
			$this->load->view('customer/pesan', $data); 
			$this->load->view('customer/footer2');
		}else{
			redirect('c_login');
		}
	}
	function sewa()
	{
		if($this->input->post('submit')){
        	$tgl_s = $this->input->post('tgl_s');
        	$awal = $this->input->post('awal');
        	$akhir = $this->input->post('akhir');
        	$tarif = $this->input->post('tarif');
        	$id_c = $this->session->userdata('id_c');
        	$id_m = $this->input->post('id_m');
			$tglAwal = strtotime($awal);
			$tglAkhir = strtotime($akhir);
			$jeda = abs($tglAkhir - $tglAwal);
			$total = (floor($jeda/(60*60*24)))*$tarif;
			$stok = $this->input->post('stok');
			$sewa = array (
				'tgl_s' => $tgl_s,
			    'awal' => $awal,
			    'akhir' => $akhir,
			    'total' => $total,
			    'status_s' => "Menunggu Pembayaran",
			    'id_c' => $id_c,
			    'id_m' => $id_m
			);
			$this->m_data->add($sewa,'sewa');
			$mobil = array (
				'stok' => $stok-1
			);
			$where = array(
				'id_m' => $id_m
			);
			$this->m_data->edit($where, $mobil,'mobil');
			?><script type="text/javascript">alert("Mobil Berhasil Dipesan, Segara Lakukan Pembayaran :)"); window.location="http://localhost/car/c_data/bayar"</script> <?php
		}
	}

	function transaksi(){
		if ($this->session->userdata('status') == "3") {
			$id_c = $this->session->userdata('id_c');
			$where = array(
				'id_c' => $id_c
			);
			$data['sewa'] = $this->m_data->sewa($where, 'sewa')->result();
			$this->load->view('customer/header2');
			$this->load->view('customer/transaksi', $data);
			$this->load->view('customer/footer2');
		}else{
			redirect('c_login');
		}
	}

	function bayar(){
		if ($this->session->userdata('status') == "3") {
			$id_s = $this->input->get('id'); 
			$where = array(
				'id_s' => $id_s
			);
			$data['bayar'] = $this->m_data->detail($where, 'sewa')->result_array();
			$this->load->view('customer/header2');
			$this->load->view('customer/bayar', $data);
			$this->load->view('customer/footer2');
		}else{
			redirect('c_login');
		}
	}

	function pembayaran()
	{
		if($this->input->post('submit')){
			$id_s = $this->input->post('id_s');
        	$jum = $this->input->post('jum');
        	$tgl_b = $this->input->post('tgl_b');
        	$jns_b = $this->input->post('jns_b');
        	$total = $this->input->post('total');
        	if($jum<$total){
        		?><script type="text/javascript">alert("Jumlah yang dibayar kurang!"); window.location="<?php echo "http://localhost/car/c_data/bayar?id=".$id_s.""?>"</script> <?php
        	}else{
        		$upload = $this->m_data->foto();
			    if($upload['result'] == "success"){
					$bayar = array (
						'jum' => $jum,
					    'tgl_b' => $tgl_b,
					    'jns_b' => $jns_b,
					    'foto_b' => $upload['file']['file_name'],
					    'id_s' => $id_s
					);
					$this->m_data->add($bayar,'bayar');
					$sewa = array (
						'status_s' => "Menunggu Konfirmasi"
					);
					$where = array(
						'id_s' => $id_s
					);
					$this->m_data->edit($where, $sewa,'sewa');
					?><script type="text/javascript">alert("Terimakasih, Pembayaran Akan Diproses"); window.location="http://localhost/car/c_data"</script> <?php
				}else{
					$data['message'] = $upload['error'];
				}
        	}
		}
	}

	function batal(){
		if ($this->session->userdata('status') == "3") {
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
			?><script type="text/javascript">alert("Pesanan Dibatalkan"); window.location="http://localhost/car/c_data"</script> <?php
		}else{
			redirect('c_login');
		}
	}

}
