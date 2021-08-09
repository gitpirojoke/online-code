<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_customer_table extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => 25,
			),
			'surname' => array(
				'type' => 'VARCHAR',
				'constraint' => 50,
			),
			'middle_name' => array(
				'type' => 'VARCHAR',
				'constraint' => 25,
				'null' => TRUE,
			),

			'birth_date' => array(
				'type' => 'DATE',
			),
			'city' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
			),
			'street' => array(
				'type' => 'CHAR',
				'constraint' => 100,
			),
			'building' => array(
				'type' => 'VARCHAR',
				'constraint' => 10,
			),
			'apartment' => array(
				'type' => 'VARCHAR',
				'constraint' => 5,
				'null' => TRUE,
			),
			'broom_counter' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'constraint' => 5,
				'null' => TRUE,
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('customer');
	}

	public function down()
	{
		$this->dbforge->drop_table('customer');
	}
}
