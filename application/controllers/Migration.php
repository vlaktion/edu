<?php

class Migration extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('migration');
	}

    public function index()
    {
        

        echo '<a href="' . base_url('migration/run/0') . '">rollback</a><br>';
        foreach($this->migration->find_migrations() as $version => $migration) {
        	echo '<a href="' . base_url('migration/run/' . $version) . '">' . $migration . '</a><br>';
        }
    }

    public function run($version)
    {
    	if($this->migration->version($version)) {
    		echo 'success!';
    	} else {
    		echo $this->migration->error_string();
    	}
    	echo ' <br><a href="' . base_url('migration') . '">back</a>';

    }
}