<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Task extends Application {

	function __construct()
	{
		parent::__construct();
		$this->layouts="dashboard";
	}

	function index()
	{
		$this->view='task/index';
	}

}