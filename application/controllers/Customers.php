<?php

class Customers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('customer_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['customers'] = $this->customer_model->get_customer();
		$data['title'] = 'Customer list';

		$this->load->view('templates/header', $data);
		$this->load->view('customers/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id = NULL)
	{
		$data['customer_item'] = $this->customer_model-->get_customer($id);

		if (empty($data['customer_item']))
		{
			show_404();
		}

		$data['title'] = $data['customer_item']['title'];

		$this->load->view('templates/header', $data);
		$this->load->view('customers/view', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create customer';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('surname', 'Surname', 'required');
        $this->form_validation->set_rules('street', 'Street', 'required');
        $this->form_validation->set_rules('building', 'Building', 'required');
        $this->form_validation->set_rules('broom_counter', 'Broom counter', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('customers/create');
			$this->load->view('templates/footer');

		}
		else
		{
			$this->customer_model->set_customers();
			redirect('customers/', 'refresh');
		}
	}
}
