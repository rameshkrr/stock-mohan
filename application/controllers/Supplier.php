<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

		$this->data['page_title'] = 'Supplier';

		$this->load->model('model_supplier');
	}

	/* 
	* It only redirects to the manage product page and
	*/
	public function index()
	{
		if(!in_array('viewSupplier', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$result = $this->model_supplier->getSupplierData();

		$this->data['results'] = $result;

		$this->render_template('supplier/index', $this->data);
	}

    public function fetchSupplierData()
	{
		$result = array('data' => array());

		$data = $this->model_supplier->getSupplierData();
		foreach ($data as $key => $value) {

			// button
			$buttons = '';

			if(in_array('viewBrand', $this->permission)) {
				$buttons .= '<button type="button" class="btn btn-default" onclick="editBrand('.$value['id'].')" data-toggle="modal" data-target="#editBrandModal"><i class="fa fa-pencil"></i></button>';	
			}
			
			if(in_array('deleteBrand', $this->permission)) {
				$buttons .= ' <button type="button" class="btn btn-default" onclick="removeBrand('.$value['id'].')" data-toggle="modal" data-target="#removeBrandModal"><i class="fa fa-trash"></i></button>
				';
			}				

			

			$result['data'][$key] = array(
				$value['supplier_name'],
				$value['contact_person'],
				$value['supplier_address'],
				$value['phone'],
				$value['email'],
				$value['gstin'],
				
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}

    public function basic()
	{
		if(!in_array('createSupplier', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$result = $this->model_supplier->getSupplierData();

		$this->data['results'] = $result;

		$this->render_template('supplier/basic', $this->data);
	}

    public function create_basic()
	{

		if(!in_array('createSupplier', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$response = array();

		$this->form_validation->set_rules('supplier_name', 'Supplier name', 'trim|required');
		$this->form_validation->set_rules('contact_person', 'Contact Person', 'trim|required');
		$this->form_validation->set_rules('supplier_address', 'Supplier Address', 'trim|required');
		$this->form_validation->set_rules('phone', 'Supplier phone', 'trim|required');
		$this->form_validation->set_rules('email', 'Supplier email', 'trim|required');
		$this->form_validation->set_rules('gstin', 'Gstin', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'supplier_name' => $this->input->post('supplier_name'),
        		'contact_person' => $this->input->post('contact_person'),
        		'supplier_address' => $this->input->post('supplier_address'),
        		'phone' => $this->input->post('phone'),
        		'email' => $this->input->post('email'),
        		'gstin' => $this->input->post('gstin'),

        	);

        	$create = $this->model_supplier->create($data);
        	if($create == true) {
        		$response['success'] = true;
        		$response['messages'] = 'Succesfully created';
        	}
        	else {
        		$response['success'] = false;
        		$response['messages'] = 'Error in the database while creating the brand information';			
        	}
        }
        else {
        	$response['success'] = false;
        	foreach ($_POST as $key => $value) {
        		$response['messages'][$key] = form_error($key);
        	}
        }        
        echo json_encode($response);

	}

    public function fetchSupplerDataById($id)
	{
		if($id) {
			$data = $this->model_supplier->getSupplierData($id);
			echo json_encode($data);
		}

		return false;
	}

    public function update($id)
	{
		if(!in_array('updateSupplier', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$response = array();

		if($id) {
			$this->form_validation->set_rules('supplier_name', 'Supplier name', 'trim|required');
            $this->form_validation->set_rules('contact_person', 'Contact Person', 'trim|required');
            $this->form_validation->set_rules('supplier_address', 'Supplier Address', 'trim|required');
            $this->form_validation->set_rules('phone', 'Supplier phone', 'trim|required');
            $this->form_validation->set_rules('email', 'Supplier email', 'trim|required');
            $this->form_validation->set_rules('gstin', 'Gstin', 'trim|required');

			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

	        if ($this->form_validation->run() == TRUE) {
	        	$data = array(
                    'supplier_name' => $this->input->post('supplier_name'),
                    'contact_person' => $this->input->post('contact_person'),
                    'supplier_address' => $this->input->post('supplier_address'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'gstin' => $this->input->post('gstin'),
    
                );

	        	$update = $this->model_supplier->update($data, $id);
	        	if($update == true) {
	        		$response['success'] = true;
	        		$response['messages'] = 'Succesfully updated';
	        	}
	        	else {
	        		$response['success'] = false;
	        		$response['messages'] = 'Error in the database while updated the brand information';			
	        	}
	        }
	        else {
	        	$response['success'] = false;
	        	foreach ($_POST as $key => $value) {
	        		$response['messages'][$key] = form_error($key);
	        	}
	        }
		}
		else {
			$response['success'] = false;
    		$response['messages'] = 'Error please refresh the page again!!';
		}

		echo json_encode($response);
	}

    public function remove()
	{
		if(!in_array('deleteSupplier', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		
		$supplier_id = $this->input->post('su_id');
		$response = array();
		if($supplier_id) {
			$delete = $this->model_supplier->remove($supplier_id);

			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = "Successfully removed";	
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Error in the database while removing the brand information";
			}
		}
		else {
			$response['success'] = false;
			$response['messages'] = "Refersh the page again!!";
		}

		echo json_encode($response);
	}
	

}