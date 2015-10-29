<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Install_task extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'task_id' => array(
                                'type' => 'INT',
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'task_title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'task_domain' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'task_text' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'task_start_time' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                        ),

                ));
                $this->dbforge->add_key('task_id', TRUE);
                $this->dbforge->create_table('task');
        }

        public function down()
        {
                $this->dbforge->drop_table('task');
        }
}