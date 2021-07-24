<?php 

class Model_products extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/* get the brand data */
	public function getProductData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM products where id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM products ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function getFilteredProductData($post)
	{
		$WHERE = [];
		// if(!empty($post['FilterDateFrom'])){
		// 	$WHERE[] = ' created_date > "'.date('Y-m-d H:i:s',strtotime($post['FilterDateFrom'])).'"';
		// }
		// if(!empty($post['FilterDateTo'])){
		// 	$WHERE[] = ' created_date < "'.date('Y-m-d H:i:s',strtotime($post['FilterDateTo'])).'"';
		// }
		// if(!empty($post['FilterSalesRep'])){
		// 	$WHERE[] = ' sales_rep = '.$post['FilterSalesRep'];
		// }
		$sql = "SELECT * FROM products ";
		if(!empty($WHERE)){
			$sql .= " WHERE ".implode(' AND ',$WHERE);
		}
		$sql .= " ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getSalesReps(){
		$group = $this->db->where('group_name','SalesRep')->get('groups')->row();
		if($group){
			$this->db->select('users.*');
			$this->db->from('user_group');
			$this->db->join('users','users.id = user_group.user_id','left');
			$this->db->where('group_id',$group->id);
			return $this->db->get()->result_array();
		}
	}

	public function getActiveProductData()
	{
		$sql = "SELECT * FROM products WHERE availability = ? ORDER BY id DESC";
		$query = $this->db->query($sql, array(1));
		return $query->result_array();
	}

	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('products', $data);
			return ($insert == true) ? true : false;
		}
	}

	public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('products', $data);
			return ($update == true) ? true : false;
		}
	}

	public function remove($id)
	{
		if($id) {
			$this->db->where('id', $id);
			$delete = $this->db->delete('products');
			return ($delete == true) ? true : false;
		}
	}

	public function countTotalProducts()
	{
		$sql = "SELECT * FROM products";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

}