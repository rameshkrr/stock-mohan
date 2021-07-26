<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

		$this->data['page_title'] = 'Account';

		$this->load->model('model_account');
	}

	/* 
	* redirect to the index page 
	*/
	public function index()
	{
		if(!in_array('viewAccount', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$this->render_template('account/index', $this->data);	
	}

    public function debit()
	{
		if(!in_array('viewAccount', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$this->render_template('account/debitlist', $this->data);	
	} 
	
	public function credit()
	{
		if(!in_array('viewAccount', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$this->render_template('account/creditlist', $this->data);	
	}

	public function create_debit()
	{
		if(!in_array('viewAccount', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$this->render_template('account/create_debit', $this->data);	
	}
	public function create_credit()
	{
		if(!in_array('viewAccount', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$this->render_template('account/create_credit', $this->data);	
	}

    public function create_debit_post()
	{
		if(!in_array('createAccount', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$response = array();

		$this->form_validation->set_rules('supplier_id', 'Supplier id', 'trim|required');
		$this->form_validation->set_rules('supplier_name', 'Supplier name', 'trim|required');
		$this->form_validation->set_rules('order_id', 'Order id', 'trim|required');
		$this->form_validation->set_rules('invoice_id', 'Invoice id', 'trim|required');
		$this->form_validation->set_rules('total_amt', 'total Amount', 'trim|required');
		$this->form_validation->set_rules('due_date', 'Due Date', 'trim|required');
		$this->form_validation->set_rules('balance_due', 'Balance Due', 'trim|required');
		$this->form_validation->set_rules('payment_date_1', 'Supplier email', 'trim|required');
		$this->form_validation->set_rules('payment_1', 'Gstin', 'trim|required');
		$this->form_validation->set_rules('payment_date_2', 'Account Number', 'trim|required');
		$this->form_validation->set_rules('payment_2', 'Account Holder Name', 'trim|required');
		$this->form_validation->set_rules('payment_date_3', 'IFSC', 'trim|required');
		$this->form_validation->set_rules('payment_3', 'Account Type', 'trim|required');
		$this->form_validation->set_rules('claims', 'Branch', 'trim|required');
		$this->form_validation->set_rules('remarks', 'Remarks', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'supplier_name' => $this->input->post('supplier_name'),
        		'order_id' => $this->input->post('order_id'),
        		'invoice_id' => $this->input->post('invoice_id'),
        		'total_amt' => $this->input->post('total_amt'),
        		'due_date' => $this->input->post('due_date'),
        		'balance_due' => $this->input->post('balance_due'),
        		'payment_date_1' => $this->input->post('payment_date_1'),
        		'payment_1' => $this->input->post('payment_1'),
        		'payment_date_2' => $this->input->post('payment_date_2'),
        		'payment_2' => $this->input->post('payment_2'),
        		'payment_date_3' => $this->input->post('payment_date_3'),
        		'payment_3' => $this->input->post('payment_3'),
        		'claims' => $this->input->post('claims'),
        		'remarks' => $this->input->post('remarks')
        	);

        	$create = $this->model_account->create($data);
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

}