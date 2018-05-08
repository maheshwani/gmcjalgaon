<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clinical extends CI_Controller {

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
	
		$data['meta_title'] = "Clinical";
		$data['page'] = "clinical";
		$this->load->view('tpl', $data);
	}	
	
	public function anesthesia()
	{
		$data['meta_title'] = "Anesthesia";
		$data['page'] = "clinical/anesthesia";
		$this->load->view('tpl', $data);
	}
	
	public function dentistry()
	{
		$data['meta_title'] = "Dentistry";
		$data['page'] = "clinical/dentistry";
		$this->load->view('tpl', $data);
	}
	
	public function ent()
	{
		$data['meta_title'] = "ENT";
		$data['page'] = "clinical/ent";
		$this->load->view('tpl', $data);
	}
	
	public function medicine()
	{
		$data['meta_title'] = "Medicine";
		$data['page'] = "clinical/medicine";
		$this->load->view('tpl', $data);
	}
	
	public function opthalmology()
	{
		$data['meta_title'] = "Opthalmology";
		$data['page'] = "clinical/opthalmology";
		$this->load->view('tpl', $data);
	}
	
	public function obstetrics()
	{
		$data['meta_title'] = "Obstetrics";
		$data['page'] = "clinical/obstetrics";
		$this->load->view('tpl', $data);
	}
	
	public function orthopedics()
	{
		$data['meta_title'] = "Orthopedics";
		$data['page'] = "clinical/orthopedics";
		$this->load->view('tpl', $data);
	}
	
	public function pediatrics()
	{
		$data['meta_title'] = "Pediatrics";
		$data['page'] = "clinical/pediatrics";
		$this->load->view('tpl', $data);
	}
	
	public function psychiatry()
	{
		$data['meta_title'] = "Psychiatry";
		$data['page'] = "clinical/psychiatry";
		$this->load->view('tpl', $data);
	}
	
	public function radiology()
	{
		$data['meta_title'] = "Radiology";
		$data['page'] = "clinical/radiology";
		$this->load->view('tpl', $data);
	}
	
	public function skin_vd()
	{
		$data['meta_title'] = "Skin & VD";
		$data['page'] = "clinical/skin_vd";
		$this->load->view('tpl', $data);
	}
	
	public function surgery()
	{
		$data['meta_title'] = "Surgery";
		$data['page'] = "clinical/surgery";
		$this->load->view('tpl', $data);
	}
	
	public function tb_chest()
	{
		$data['meta_title'] = "TB & Chest";
		$data['page'] = "clinical/tb_chest";
		$this->load->view('tpl', $data);
	}
}
