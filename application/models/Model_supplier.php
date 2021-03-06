<?php 

class Model_supplier extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

    public function getSupplierData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM supplier_basic WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM supplier_basic";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

    public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('supplier_basic', $data);
			return ($insert == true) ? true : false;
		}
	}

    public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('supplier_basic', $data);
			return ($update == true) ? true : false;
		}
	}

    public function remove($id)
	{
		if($id) {
			$this->db->where('id', $id);
			$delete = $this->db->delete('supplier_basic');
			return ($delete == true) ? true : false;
		}
	}

	public function countTotalSupplier()
	{
		$sql = "SELECT * FROM supplier_basic";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}
	
}