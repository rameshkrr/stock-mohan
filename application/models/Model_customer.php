<?php 

class Model_customer extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

    public function getCustomerData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM customers WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM customers";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

    public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('customers', $data);
			return ($insert == true) ? true : false;
		}
	}

    public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('customers', $data);
			return ($update == true) ? true : false;
		}
	}

    public function remove($id)
	{
		if($id) {
			$this->db->where('id', $id);
			$delete = $this->db->delete('customers');
			return ($delete == true) ? true : false;
		}
	}

	public function countTotalCustomers(){
		$sql = "SELECT * FROM customers";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}
	
}