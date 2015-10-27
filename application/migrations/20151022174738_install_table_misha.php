<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Install_table_misha extends CI_Migration {

	public function up()
	{
		// Drop table 'groups' if it exists
		$this->dbforge->drop_table('misha', TRUE);

		// Table structure for table 'groups'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'date' => array(
				'type' => 'VARCHAR',
				'constraint' => '20',
			),
			'comment' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('misha');

		// Dumping data for table 'groups'
		$data = array(
			array(
				'id' => '1',
				'date' => '15-08-15',
				'comment' => 'rtujrtujrstjsuhjrstjns'
			),
			array(
				'id' => '2',
				'date' => '15-08-15',
				'comment' => 'ryaeruhjrtstjistrjrjstjtr'
			)
		);
		$this->db->insert_batch('misha', $data);
	}

	public function down()
	{
		$this->dbforge->drop_table('misha', TRUE);
	}
}