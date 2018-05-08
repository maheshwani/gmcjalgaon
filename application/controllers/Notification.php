<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {

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
		$where['recStatus'] = 1;
		$order = "DESC";
		$field  = "date";
		$data['notification'] = $this->master_model->getMaster('notification', $where,$join = FALSE, $order,$field);
		
		$data['meta_title'] = "Notification";
		$data['page'] = "notifications";
		$this->load->view('tpl', $data);
	}	
}
