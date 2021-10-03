<?php
defined('BASEPATH') or exit('No direct script access allowed');

class contact extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		#load model vào controller
		$this->load->model('contactmodel');
		$this->load->library('session');
		$this->load->helper('url'); // cần load thư viện này để sử dụng hàm base_url
	}


	public function index()
	{

		#gọi hàm getContacts của contact_model thông qua thuộc tính của biến $this
		$data['contacts'] = $this->contactmodel->getContacts();
		//kết quả từ model sang cho biến mảng data truyền qua cho view thông qua load > view


		$this->load->view('contact_list', $data);
	}




	public function add()
	{
		$this->load->view('contact_add');
	}

	public function edit($id)
	{
		$data['contact_item'] = $this->contactmodel->getContact($id);
		$this->load->view('contact_edit', $data);
	}

	// hàm thực hiện lưu thông tin vào database;  $id = 0 : trong trường hợp thêm mới
	public function save($id = 0)
	{
		$postData = array(
			'name' => $this->input->post('name'),
			'phone1' => $this->input->post('phone1'),
			'phone2' => $this->input->post('phone2'),
			'email' => $this->input->post('email'),
			'fb' => $this->input->post('fb'),
			'company' => $this->input->post('company')
		);

		if ($id == 0) // thêm mới
			$this->contactmodel->addContact($postData);
		else // cập nhật
			$this->contactmodel->updateContact($postData, $id);

		redirect(base_url('/'));
	}
	public function update($id)
	{
		

	
			$this->contactmodel->updateContact($id);
			$this->session->set_flashdata('success', "Updated Successfully!");
			redirect(base_url('/'));
		
	}


	public function del($id)
	{
		$contact = $this->contactmodel->deleteContact($id);
		$this->session->set_flashdata('success', "Deleted Successfully!");
		redirect(base_url('/'));
	}
}
