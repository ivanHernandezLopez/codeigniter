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

	public function add()
	{
		$parametros["msg"] = "";		
		if($_POST)
		{
			$parametros["msg"] = "Error MySQL: Intente nuevamente";
			$sql = $this->usuarios->insertar($_POST);
			if($sql){
				$parametros["msg"] = "Registro insertado correctamente";
			}
		}
		$this->load->view("crud/agregar_usuarios",$parametros);
	}

}
