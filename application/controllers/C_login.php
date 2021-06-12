<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {
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
		$this->load->view('customer/login');
	}

	function aksi_login()
	{
		$password = $this->input->post('password');
		$username = $this->input->post('username');
		$where = array(
			'user_c' => $username,
			'pass_c' => md5($password)
		);
		$cek = $this->m_login->cek($where,'customer');

		$data['customer'] = $this->m_login->datauser($where, 'customer');
		if ($cek != null) {
			$data_session = array(
				'user_c' => $data['customer'][0]['user_c'],
				'status' => "3",
				'id_c' => $data['customer'][0]['id_c']
			);
			$this->session->set_userdata($data_session);
			redirect('c_data');
		}else {
			?><script type="text/javascript">alert("Username dan Password Salah!"); window.location="http://localhost/car/c_login"</script> <?php
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('c_data');
	}
	
}
