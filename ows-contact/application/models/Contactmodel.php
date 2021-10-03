<?php
class contactmodel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	#lấy 20 bản ghi đầu tiên trong bảng contacts ra và trả về dưới dạng mảng.
	public function getContacts()
	{
		$query = $this->db->get('contacts', 20);
		return $query->result();
	}

	public function getContact($id)
	{
		$query = $this->db->get_where('contacts', array('id' => $id));
		return $query->first_row(); // chỉ lấy bản ghi đầu tiên
	}

	//Thêm

	public function addContact($data = array())
	{
		$insert = $this->db->insert('contacts', $data);
		if ($insert) {
			return $this->db->insert_id(); // trả về id mới, nếu insert thành công
		} else {
			return false; // trả về false nếu insert thất bại
		}
	}


	public function updateContact($id)
	{
		$data = [
			'name'   => $this->input->post('name'),
			'phone1' => $this->input->post('phone1'),
			'phone2' => $this->input->post('phone2'),
			'email' => $this->input->post('email'),
			'fb' => $this->input->post('fb'),
			'company' => $this->input->post('company')
		];

		$result = $this->db->where('id', $id)->update('contacts', $data);
		return $result;
	}


	public function deleteContact($id)
	{

		$result = $this->db->delete('contacts', array('id' => $id));
		return $result;
	}
}
