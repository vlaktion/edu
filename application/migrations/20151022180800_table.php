<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_table extends CI_Migration {

	public function up()
	{
		// Drop table 'pages' if it exists
		$this->dbforge->drop_table('pages33', TRUE);

		// Table structure for table 'pages'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
			),
			'description' => array(
				'type' => 'VARCHAR',
				'constraint' => '200',
			),
			'keywords' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
			),
			'content' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('pages33');

		// Dumping data for table 'pages'
		$data = array(
			array(
				'id' => '1',
				'title' => 'Главная страница',
				'description' => 'Описание',
				'keywords' => '',
				'content' => 'Текст',
			),
		);
		$this->db->insert_batch('pages33', $data);
	}

	public function down()
	{
		$this->dbforge->drop_table('pages33', TRUE);
	}
}