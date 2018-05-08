<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		if($this->input->post('login')){
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));

			$login_info=$this->master_model->get_row($email , $password , 'admin');
			//print_r($login_info);die;

			$data = $this->session->set_userdata('logged_in', $login_info);
			//print_r($data);die;
				if($login_info['id'] == 1)
				{
					redirect('login_success');			
				}else{
				 	$this->session->set_flashdata('message','Invalid usernam and password');	
			}
		}
		$data['meta_title'] = "Log In";
		$this->load->view('admin/login', $data);
	}
}
