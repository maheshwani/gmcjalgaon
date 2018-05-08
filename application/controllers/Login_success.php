<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_success extends CI_Controller {

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
		$logged_in = $this->session->userdata('logged_in');
		
		if(empty($logged_in)){
			redirect('admin');
		}else{				
			$data['meta_title'] = "Home";
			$data['page'] = "admin/home";
			$this->load->view('admin/tpl', $data);
		}
	}

	function logout()
	{		
		$this->session->unset_userdata('logged_in');
		redirect('admin');
	}

	function gallery()
	{
		if($this->input->post('submit'))
		{
			$data['date'] = date("Y-m-d H:i:sa");
			$data['recStatus'] = '1';

			$id=$this->master_model->insert($data , 'gallery');	

			/*Image Upload*/
				$update_data['name'] = $this->input->post('img_name');

				//$update_data['name'].='-'.date("Y-m-d Hisa");//use for concat name and date.
				$update_data['name']=date("Y-m-d Hisa");//use for concat name and date.
				//print_r($update_data['name']);die;
				if (!empty($_FILES['profileimg']['name']))
				{

					$category_image = strtolower(str_replace(array(
							" ",
							"'"
					), '-', trim($update_data['name'])));

					//echo $category_image;die;
	 				$filename = $this->uploadbkImage('profileimg', $category_image);

					$update_data  = array(
							"image" => $filename
					);
					$where['id'] = $id;
					$this->master_model->update($update_data , 'gallery' ,$where);
				}
			$this->session->set_flashdata('message','Added Successfully');
		}
		
		$data['gallery_list'] = $this->master_model->getMaster('gallery');
		
		$data['meta_title'] = "Add Gallery";
		$data['page'] = "admin/gallery";
		$this->load->view('admin/tpl', $data);
	}

	function notification()
	{
		if($this->input->post('submit'))
		{
			$data['notification_title'] = $this->input->post('notification_title');
			$data['date'] = date("Y-m-d H:i:sa");
			$data['recStatus'] = '1';

			$id=$this->master_model->insert($data , 'notification');	

			/*Image Upload*/
				$update_data['name'] = $this->input->post('img_name');

				//$update_data['name'].='-'.date("Y-m-d Hisa");//use for concat name and date.
				$update_data['name']=date("Y-m-d Hisa");//use for concat name and date.
				//print_r($update_data['name']);die;
				if (!empty($_FILES['profileimg']['name']))
				{

					$category_image = strtolower(str_replace(array(
							" ",
							"'"
					), '-', trim($update_data['name'])));

					//echo $category_image;die;
	 				$filename = $this->uploadbkImage('profileimg', $category_image);

					$update_data  = array(
							"notification" => $filename
					);
					$where['id'] = $id;
					$this->master_model->update($update_data , 'notification' ,$where);
				}
			$this->session->set_flashdata('message','Added Successfully');
		}
		
		$data['notification_list'] = $this->master_model->getMaster('notification');
		
		$data['meta_title'] = "Add Notification";
		$data['page'] = "admin/notification";
		$this->load->view('admin/tpl', $data);
	}
	
	function tender()
	{
		if($this->input->post('submit'))
		{
			$data['tender_title'] = $this->input->post('tender_title');
			$data['date'] = date("Y-m-d H:i:sa");
			$data['recStatus'] = '1';

			$id=$this->master_model->insert($data , 'tender');	

			/*Image Upload*/
				$update_data['name'] = $this->input->post('img_name');

				//$update_data['name'].='-'.date("Y-m-d Hisa");//use for concat name and date.
				$update_data['name']=date("Y-m-d Hisa");//use for concat name and date.
				//print_r($update_data['name']);die;
				if (!empty($_FILES['profileimg']['name']))
				{

					$category_image = strtolower(str_replace(array(
							" ",
							"'"
					), '-', trim($update_data['name'])));

					//echo $category_image;die;
	 				$filename = $this->uploadbkImage('profileimg', $category_image);

					$update_data  = array(
							"tender" => $filename
					);
					$where['id'] = $id;
					$this->master_model->update($update_data , 'tender' ,$where);
				}
			$this->session->set_flashdata('message','Added Successfully');
		}
		$data['tender_list'] = $this->master_model->getMaster('tender');
		//echo "<pre>";print_r($data['tender_list']);die;
		$data['meta_title'] = "Add Tender";
		$data['page'] = "admin/tender";
		$this->load->view('admin/tpl', $data);
	}
	
	function quotation()
	{
		if($this->input->post('submit'))
		{
			$data['quotation_title'] = $this->input->post('quotation_title');
			$data['date'] = date("Y-m-d H:i:sa");
			$data['recStatus'] = '1';

			$id=$this->master_model->insert($data , 'quotation');	

			/*Image Upload*/
				$update_data['name'] = $this->input->post('img_name');

				//$update_data['name'].='-'.date("Y-m-d Hisa");//use for concat name and date.
				$update_data['name']=date("Y-m-d Hisa");//use for concat name and date.
				//print_r($update_data['name']);die;
				if (!empty($_FILES['profileimg']['name']))
				{

					$category_image = strtolower(str_replace(array(
							" ",
							"'"
					), '-', trim($update_data['name'])));

					//echo $category_image;die;
	 				$filename = $this->uploadbkImage('profileimg', $category_image);
					
					$update_data  = array(
							"quotation" => $filename
					);
					$where['id'] = $id;
					$this->master_model->update($update_data , 'quotation' ,$where);
				}
			$this->session->set_flashdata('message','Added Successfully');
		}
		
		$data['quotation_list'] = $this->master_model->getMaster('quotation');
		
		$data['meta_title'] = "Add Quotation";
		$data['page'] = "admin/quotation";
		$this->load->view('admin/tpl', $data);
	}

	//@Upload bookkeeper profile image function
	//Upload Bookkeeper profile image and in database
	
	public function uploadbkImage($logo, $new_logo_name){
		//Configure
		//set the path where the files uploaded will be copied. NOTE if using linux, set the folder to permission 777
		
		//echo IMAGE_PATHBK;
		$config['upload_path'] = IMAGE_PATHBK;
	
		$config['file_name']   = $new_logo_name;
		// echo "<br>";
		// echo $new_logo_name;die;
		// set the filter image types
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		$config['max_size'] = 5000;//set image size 1mb.	
		
		//load the upload library
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->set_allowed_types('*');
		$data['upload_data'] = '';
		
		//if not successful, set the error message
		if (!$this->upload->do_upload($logo)) { 
			$data = array(
			'msg' => $this->upload->display_errors()
			);
			print_r($data);die;
		} else {
			//else, set the success message
			$data = array(
			'msg' => "Upload success!"
			);
			$data['upload_data'] = $this->upload->data();
			//$this->resizeLogo($data['upload_data']);
			return $data['upload_data']['file_name'];
		}

		return $data['upload_data']['file_name']; 
	}

	public function delete()
	{
		$id = explode('/', $this->input->get('id'));
		
		//print_r($id);die;
		$data['recStatus'] = 2;
		$where['id'] = $id[0];
		$this->master_model->update($data, $id[1], $where);
		$this->session->set_flashdata("insert","Delete Successfully.");

		if ($id[1] == 'gallery') {
			redirect('Login_success/gallery');
		}elseif ($id[1] == 'notification') {
			redirect('index.php/Login_success/notification');
		}elseif ($id[1] == 'quotation') {
			redirect('index.php/Login_success/quotation');
		}elseif ($id[1] == 'tender') {
			redirect('index.php/Login_success/tender');
		}
	}

}
