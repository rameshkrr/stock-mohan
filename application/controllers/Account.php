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
		$this->load->model('model_orders');
		$this->load->model('model_company');
		$this->load->model('model_supplier');
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

    public function creditdata(){
		$order_id = $this->uri->segment(3);
		if(empty($order_id)){
			redirect('dashboard', 'refresh');
		}
		$this->form_validation->set_rules('payment_date[]', 'Payment date', 'trim|required');
		
        if ($this->form_validation->run() == TRUE) {        	
        	
        	$order_id = $this->input->post('order_id');
			$Order = $this->db->where('id',$order_id)->get('orders')->row();
			$OrderTotal = $Order->net_amount;
			$PaymentTotal = 0;
			// echo '<pre>';print_r($this->input->post());exit;
			$payment_date = count($this->input->post('payment_date'));
			// print_r($this->input->post());exit;
	    	for($x = 0; $x < $payment_date; $x++) {
				if(!empty($this->input->post('orders_payment_id')[$x])){
					$items = array(
						'order_id' => $order_id,
						'payment_date' => $this->input->post('payment_date')[$x],
						'paid_by' => $this->input->post('paid_by')[$x],
						'amount' => $this->input->post('amount')[$x],
						'remarks' => $this->input->post('remarks')[$x],
					);
					$PaymentTotal = $PaymentTotal+$this->input->post('amount')[$x];
					$this->db->where('id',$this->input->post('orders_payment_id')[$x])->update('orders_payment', $items);
				}else{
					$items = array(
						'order_id' => $order_id,
						'payment_date' => $this->input->post('payment_date')[$x],
						'paid_by' => $this->input->post('paid_by')[$x],
						'amount' => $this->input->post('amount')[$x],
						'remarks' => $this->input->post('remarks')[$x],
					);
					$PaymentTotal = $PaymentTotal+$this->input->post('amount')[$x];
					$this->db->insert('orders_payment', $items);
				}
	    	}
			$Balance = $OrderTotal - $PaymentTotal;
			$this->db->where('id',$order_id)->update('orders',array('balance_amount'=>$Balance));
			
			$this->session->set_flashdata('success', 'Successfully saved');
        		redirect('account/creditdata/'.$order_id, 'refresh');
        }
        else {

		$company = $this->model_company->getCompanyData(1);
		$this->data['company_data'] = $company;
		$this->data['is_vat_enabled'] = ($company['vat_charge_value'] > 0) ? true : false;
		$this->data['is_service_enabled'] = ($company['service_charge_value'] > 0) ? true : false;
		$result = array();
        	$orders_data = $this->model_orders->getOrdersData($order_id);

    		$result['order'] = $orders_data;
    		$orders_item = $this->model_orders->getOrdersPaymentData($order_id);

    		foreach($orders_item as $k => $v) {
    			$result['payment_item'][] = $v;
    		}

    		$this->data['order_data'] = $result;
		$this->render_template('account/creditdata', $this->data);	
		}
	}

	public function debitdata(){
		$debit_id = $this->uri->segment(3);
		$debitdata = $this->db->where('id',$debit_id)->get('debit_note')->row();
		
		// if(empty($debit_id)){
		// 	redirect('dashboard', 'refresh');
		// }
		
		$response = array();
		
		// $this->form_validation->set_rules('supplier_id', 'Supplier id', 'trim|required');
		// $this->form_validation->set_rules('supplier_name', 'Supplier name', 'trim|required');
		$this->form_validation->set_rules('order_number', 'Order id', 'trim|required');
		// $this->form_validation->set_rules('invoice_id', 'Invoice id', 'trim|required');
		// $this->form_validation->set_rules('total_amt', 'total Amount', 'trim|required');
		// $this->form_validation->set_rules('due_date', 'Due Date', 'trim|required');
		// $this->form_validation->set_rules('balance_due', 'Balance Due', 'trim|required');
		// $this->form_validation->set_rules('payment_date1', 'Supplier email', 'trim|required');
		// $this->form_validation->set_rules('payment_1', 'Gstin', 'trim|required');
		// $this->form_validation->set_rules('payment_date2', 'Account Number', 'trim|required');
		// $this->form_validation->set_rules('payment_2', 'Account Holder Name', 'trim|required');
		// $this->form_validation->set_rules('payment_date3', 'IFSC', 'trim|required');
		// $this->form_validation->set_rules('payment_3', 'Account Type', 'trim|required');
		// $this->form_validation->set_rules('claims', 'Branch', 'trim|required');
		// $this->form_validation->set_rules('remarks', 'Remarks', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
			if($this->input->post('debit_id')){
				$data = array(
					'order_number' => $this->input->post('order_number'),
					'invoice_no' => $this->input->post('invoice_number'),
					'supplier_id' => $this->input->post('supplier_id'),
					'total_amt' => $this->input->post('total_amount'),
					'due_amount' => $this->input->post('due_amount'),
					'balance_due' => $this->input->post('balance_amount'),
					'payment_date_1' => $this->input->post('payment_date_1'),
					'payment_1' => $this->input->post('payment_1'),
					'payment_date_2' => $this->input->post('payment_date_2'),
					'payment_2' => $this->input->post('payment_2'),
					'payment_date_3' => $this->input->post('payment_date_3'),
					'payment_3' => $this->input->post('payment_3'),
					'claims' => $this->input->post('claims'),
					'remarks' => $this->input->post('remarks')
				);

				$create = $this->db->where('id',$this->input->post('debit_id'))->update('debit_note',$data);
				if($create == true) {
					$this->session->set_flashdata('success', 'Successfully saved');
					redirect('account/debitdata/'.$this->input->post('debit_id'), 'refresh');
				}
				else {
					$this->session->set_flashdata('errors', 'Error occurred!!');
					redirect('account', 'refresh');
				}
			}
        }
        else {
			$this->data['supplier'] = $this->model_supplier->getSupplierData();
			$this->data['debitdata'] = $debitdata;
        	$this->render_template('account/update_debit', $this->data);
        }  
	}
	
    public function debit()
	{
		if(!in_array('viewDebit', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$this->render_template('account/debitlist', $this->data);	
	} 
	
	public function fetchCreditData(){
		$result = array('data' => array());

		$data = $this->model_orders->getOrdersData();

		foreach ($data as $key => $value) {

			$count_total_item = $this->model_orders->countOrderItem($value['id']);
			$date = date('d-m-Y', $value['date_time']);
			$time = date('h:i a', $value['date_time']);

			$date_time = $date . ' ' . $time;

			// button
			$buttons = '';

			// if(in_array('viewOrder', $this->permission)) {
			// 	$buttons .= '<a target="__blank" href="'.base_url('orders/printDiv/'.$value['id']).'" class="btn btn-default"><i class="fa fa-print"></i></a>';
			// }

			if(in_array('updateOrder', $this->permission)) {
				$buttons .= ' <a href="'.base_url('account/creditdata/'.$value['id']).'" class="btn btn-default"><i class="fa fa-pencil"></i></a>';
			}


			$result['data'][$key] = array(
				$value['customer_name'],
				'OR'.$value['order_number'],
				'INV'.$value['order_number'],
				$value['net_amount'],
				$value['due_amount'],
				$value['balance_amount'],
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}

	public function fetchDebitData(){
		$result = array('data' => array());

		$data = $this->model_orders->getDebitsData();

		foreach ($data as $key => $value) {

			$count_total_item = $this->model_orders->countOrderItem($value['id']);
			


			// button
			$buttons = '';

			// if(in_array('viewOrder', $this->permission)) {
			// 	$buttons .= '<a target="__blank" href="'.base_url('orders/printDiv/'.$value['id']).'" class="btn btn-default"><i class="fa fa-print"></i></a>';
			// }

			if(in_array('updateOrder', $this->permission)) {
				$buttons .= ' <a href="'.base_url('account/debitdata/'.$value['id']).'" class="btn btn-default"><i class="fa fa-pencil"></i></a>';
			}


			$result['data'][$key] = array(
				$value['supplier_name'],
				'OR'.$value['order_number'],
				'INV'.$value['order_number'],
				$value['total_amt'],
				$value['due_amount'],
				$value['balance_due'],
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}

	public function credit()
	{
		if(!in_array('viewCredit', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$this->render_template('account/creditlist', $this->data);	
	}



	public function create_debit()
	{
		if(!in_array('createDebit', $this->permission)) {
			redirect('dashboard', 'refresh');
		}
		$response = array();
		
		// $this->form_validation->set_rules('supplier_id', 'Supplier id', 'trim|required');
		// $this->form_validation->set_rules('supplier_name', 'Supplier name', 'trim|required');
		$this->form_validation->set_rules('order_number', 'Order id', 'trim|required');
		// $this->form_validation->set_rules('invoice_id', 'Invoice id', 'trim|required');
		// $this->form_validation->set_rules('total_amt', 'total Amount', 'trim|required');
		// $this->form_validation->set_rules('due_date', 'Due Date', 'trim|required');
		// $this->form_validation->set_rules('balance_due', 'Balance Due', 'trim|required');
		// $this->form_validation->set_rules('payment_date1', 'Supplier email', 'trim|required');
		// $this->form_validation->set_rules('payment_1', 'Gstin', 'trim|required');
		// $this->form_validation->set_rules('payment_date2', 'Account Number', 'trim|required');
		// $this->form_validation->set_rules('payment_2', 'Account Holder Name', 'trim|required');
		// $this->form_validation->set_rules('payment_date3', 'IFSC', 'trim|required');
		// $this->form_validation->set_rules('payment_3', 'Account Type', 'trim|required');
		// $this->form_validation->set_rules('claims', 'Branch', 'trim|required');
		// $this->form_validation->set_rules('remarks', 'Remarks', 'trim|required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
			
        	$data = array(
				'order_number' => $this->input->post('order_number'),
        		'invoice_no' => $this->input->post('invoice_number'),
        		'supplier_id' => $this->input->post('supplier_id'),
        		'total_amt' => $this->input->post('total_amount'),
        		'due_amount' => $this->input->post('due_amount'),
        		'balance_due' => $this->input->post('balance_amount'),
        		'payment_date_1' => $this->input->post('payment_date_1'),
        		'payment_1' => $this->input->post('payment_1'),
        		'payment_date_2' => $this->input->post('payment_date_2'),
        		'payment_2' => $this->input->post('payment_2'),
        		'payment_date_3' => $this->input->post('payment_date_3'),
        		'payment_3' => $this->input->post('payment_3'),
        		'claims' => $this->input->post('claims'),
        		'remarks' => $this->input->post('remarks')
        	);

        	$create = $this->db->insert('debit_note',$data);
        	if($create == true) {
        		$this->session->set_flashdata('success', 'Successfully saved');
        		redirect('account/creditdata/'.$order_id, 'refresh');
        	}
        	else {
        		$this->session->set_flashdata('errors', 'Error occurred!!');
        		redirect('account', 'refresh');
        	}
        }
        else {
			$this->data['supplier'] = $this->model_supplier->getSupplierData();
        	$this->render_template('account/create_debit', $this->data);
        }        
			
	}

	public function fetchDebitsData()
	{
		$result = array('data' => array());

		$data = $this->model_orders->getDebitsData();

		foreach ($data as $key => $value) {

			$count_total_item = $this->model_orders->countOrderItem($value['id']);
			$date = date('d-m-Y', $value['date_time']);
			$time = date('h:i a', $value['date_time']);

			$date_time = $date . ' ' . $time;

			// button
			$buttons = '';

			if(in_array('viewOrder', $this->permission)) {
				$buttons .= '<a target="__blank" href="'.base_url('orders/printDiv/'.$value['id']).'" class="btn btn-default"><i class="fa fa-print"></i></a>';
			}

			if(in_array('updateOrder', $this->permission)) {
				$buttons .= ' <a href="'.base_url('orders/update/'.$value['id']).'" class="btn btn-default"><i class="fa fa-pencil"></i></a>';
			}

			if(in_array('deleteOrder', $this->permission)) {
				$buttons .= ' <button type="button" class="btn btn-default" onclick="removeFunc('.$value['id'].')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>';
			}

			if($value['paid_status'] == 1) {
				$paid_status = '<span class="label label-success">Paid</span>';	
			}
			else {
				$paid_status = '<span class="label label-warning">Not Paid</span>';
			}

			$result['data'][$key] = array(
				$value['bill_no'],
				$value['customer_name'],
				$value['customer_phone'],
				$date_time,
				$count_total_item,
				$value['net_amount'],
				$paid_status,
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}
}