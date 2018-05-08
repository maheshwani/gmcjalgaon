<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Para_clinical extends CI_Controller {

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
		$data['meta_title'] = "Para Clinical";
		$data['page'] = "para_clinical";
		$this->load->view('tpl', $data);
	}
	
	public function pathalogy()
	{
		$data['meta_title'] = "Pathalogy";
		$data['page'] = "para/pathology";
		$this->load->view('tpl', $data);
	}
	
	public function microbiology()
	{
		$data['meta_title'] = "Microbiology";
		$data['page'] = "para/microbiology";
		$this->load->view('tpl', $data);
	}
	
	public function pharmacology()
	{
		$data['meta_title'] = "pharmacology";
		$data['page'] = "para/pharmacology";
		$this->load->view('tpl', $data);
	}
	
	public function fmt()
	{
		$data['meta_title'] = "F.M. & T";
		$data['page'] = "para/fmt";
		$this->load->view('tpl', $data);
	}
	
	public function psm()
	{
		$data['meta_title'] = "PSM";
		$data['page'] = "para/psm";
		$this->load->view('tpl', $data);
	}
	
}
