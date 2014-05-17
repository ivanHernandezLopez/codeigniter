<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mysql extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("estados");
	}

	public function index()
	{
		
		$estados = $this->estados->get_all();
		foreach($estados->result() as $q)
			echo $q->nom_largo."<br/>";
	}
}
