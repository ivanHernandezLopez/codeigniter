<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("usuarios");

	}

	public function index()
	{
		$datos["usuarios"] = $this->usuarios->get_all();
		$this->load->view('crud/lista_usuarios',$datos);
	}

}
