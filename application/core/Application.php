<?php

class Application extends MY_Controller
{	
	public $action = null;
	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('ion_auth','form_validation'));

    	if (!$this->ion_auth->logged_in() && ($this->uri->segment($this->uri->total_segments()) != 'login'))
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}

	}
}