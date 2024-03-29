<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_leo_table extends CI_Migration {

	public function up()
	{
		 $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'description' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('leo');

	}

	public function down()
	{
		$this->dbforge->drop_table('leo', TRUE);
		
	}
}