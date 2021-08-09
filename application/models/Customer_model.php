<?php

class Customer_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_customer($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('customer');
			return $query->result_array();
		}

		$query = $this->db->get_where('customer', array('id' => $id));
		return $query->row_array();
	}

    public function set_customers()
    {
        $this->load->helper('url');

        $data = array(
            'name' => $this->input->post('name'),
            'surname' => $this->input->post('surname'),
            'middle_name' => $this->input->post('middle_name'),
			'birth_date' => $this->input->post('birth_date'),
            'city' => 'Новочеркасск',
            'street' => $this->input->post('street'),
            'building' => $this->input->post('building'),
            'apartment' => $this->input->post('apartment'),
            'broom_counter' => $this->input->post('broom_counter')
        );

        return $this->db->insert('customer', $data);
    }

    public function delete_customers($id)
    {
        return $this->db->delete('customer', array('id' => $id));
    }

}
