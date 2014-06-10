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

	public function edit()
	{
		$id = $this->uri->segment(3);
		$parametros["msg"] = "";		
		if($_POST)
		{
			$parametros["msg"] = "Error MySQL: Intente nuevamente";
			$sql = $this->usuarios->actualizar($_POST,$id);
			if($sql){
				$parametros["msg"] = "Registro actualizado correctamente";
			}
		}
		$parametros["usuario"] = $this->usuarios->seleccionar($id);
		$this->load->view("crud/editar_usuarios",$parametros);
	}

}
