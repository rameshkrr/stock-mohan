<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Welcome extends CI_Controller {

        public function __construct (){
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('file');
            $this->load->helper('download');
            $this->load->library('pdf');
            $this->load->model('model_orders');
            $this->load->model('model_products');
            $this->load->model('model_company');
            $this->load->model('model_customer');
            $this->load->model('model_stores');
        }

        public function index() {
            $this->load->view('welcome');
        }

        function create_download() {
            $paper = 'a4'; $orientation = 'portrait';
            //Set folder to save PDF to
            $this->pdf->folder('assets/pdf/');

            //Set the filename to save/download as
            $filename = $paper.'-'.$orientation.'.pdf';
            $this->pdf->filename($filename);

            //Set the paper defaults portrait/landscape
            $this->pdf->paper($paper, $orientation);

            //Load html view
            $data = array(
                'margin' => '40px',
                'title' => 'PDF Created '.ucfirst($paper).' '.ucfirst($orientation),
                'message' => 'Hello World!'
            );
            $order_id = 40;
            $order =$this->db->where('id',$order_id)->get('orders')->row();
            $data['order'] = $order;
            $data['company'] = $this->db->where('id',1)->get('company')->row();
            $data['products'] = $this->db->select('products.*,orders_item.qty as product_qty,orders_item.amount as product_amount')->from('orders_item')->join('products','products.id = orders_item.product_id','left')->where('order_id',$order_id)->get()->result();
            $orders_item = $this->model_orders->getOrdersItemData($order->id);
                foreach($orders_item as $k => $v) {
                    $result['order_item'][] = $v;
                }   
            // $doc = $this->load->view('template/orderinvoice',$data,TRUE);
            $this->pdf->html($this->load->view('template/inv', $data, true));

            //PDF was successfully download and view
            if($this->pdf->create('download')) {
                redirect();
            }
        }

        function create_view() {
            $paper = 'a4';$orientation = 'portrait';
            //Set folder to save PDF to
            $this->pdf->folder('assets/pdf/');

            //Set the filename to save/download as
            $filename = $paper.'-'.$orientation.'.pdf';
            $this->pdf->filename($filename);

            //Set the paper defaults portrait/landscape
            $this->pdf->paper($paper, $orientation);

            //Load html view
            $data = array(
                'margin' => '40px',
                'title' => 'PDF Created '.ucfirst($paper).' '.ucfirst($orientation),
                'message' => 'Hello World!'
            );
            $this->pdf->html($this->load->view('exemple-pdf', $data, true));

            //PDF was successfully saved and view
            if($this->pdf->create('save')) {
                $this->output->set_content_type('application/pdf')->set_output(file_get_contents('assets/pdf/'.$filename));
            }
        }
    }