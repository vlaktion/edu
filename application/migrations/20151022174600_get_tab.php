<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Get_tab extends CI_Migration {

	public function up()
	{
		// Drop table 'groups' if it exists
		$this->dbforge->drop_table('groups', TRUE);

		// Table structure for table 'groups'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '20',
			),
			'description' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'key' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('groups');


// Dumping data for table 'groups'
		$data = array(
			array(
				'id' => '1',
				'name' => 'admin',
				'description' => 'Administrator'
			),
			array(
				'id' => '2',
				'name' => 'members',
				'description' => 'General User'
			),
			array(
				'id' => '3',
				'name' => 'members',
				'description' => 'General User'
			)
		);
		$this->db->insert_batch('groups', $data);
		
		

	}

	public function down()
	{
		
		$this->dbforge->drop_table('groups', TRUE);
	
	}
}