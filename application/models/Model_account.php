<?php 

class Model_account extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}


    public function getDebitData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM debit_note WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM debit_note";
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
}