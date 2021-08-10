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
            'name' => mb_convert_case(mb_strtolower($this->input->post('name'),'utf-8'),MB_CASE_TITLE,'utf-8'),
            'surname' => mb_convert_case(mb_strtolower($this->input->post('surname'),'utf-8'),MB_CASE_TITLE,'utf-8'),
            'middle_name' => mb_convert_case(mb_strtolower($this->input->post('middle_name'),'utf-8'),MB_CASE_TITLE,'utf-8'),
			'birth_date' => $this->input->post('birth_date'),
            'city' => 'Новочеркасск',
            'street' => mb_convert_case(mb_strtolower($this->input->post('street'),'utf-8'),MB_CASE_TITLE,'utf-8'),
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
