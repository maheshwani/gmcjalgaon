<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pre_clinical extends CI_Controller {

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
		$data['meta_title'] = "Pre Clinical";
		$data['page'] = "pre_clinical";
		$this->load->view('tpl', $data);
	}	
	
	public function anatomy()
	{
		$data['meta_title'] = "Anatomy";
		$data['page'] = "pre/anatomy";
		$this->load->view('tpl', $data);
	}
	
	public function physiology()
	{
		$data['meta_title'] = "Physiology";
		$data['page'] = "pre/physiology";
		$this->load->view('tpl', $data);
	}
	
	public function biochemistry()
	{
		$data['meta_title'] = "Biochemistry";
		$data['page'] = "pre/biochemistry";
		$this->load->view('tpl', $data);
	}
}
