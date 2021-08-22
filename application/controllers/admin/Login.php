<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function index(){
		$method = $_SERVER['REQUEST_METHOD'];
		if($method == 'GET'){
			$this->load->view('admin/login.php');
		} else if($method == 'POST'){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' => $username
			);
			$this->load->model('Admin_model');
			$data = $this->Admin_model->cek_login("admin", $where);

			if($data != null){
				$data_session = array(
					'admin_user' => $username
				);
		 
				$this->session->set_userdata($data_session);
		 
				redirect(site_url("index.php/admin/dashboard"));
			}
		}
	}
}
