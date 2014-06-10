<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Model {

	public function get_all()
	{
		return $this->db->get("usuarios")->result_object();
	}

	public function insertar($post)
	{
		$data = array(
				"name"	=> $post["name"],
				"email"	=> $post["email"],
				"web"	=> $post["web"],
			);
		return $this->db->insert("usuarios",$data);
	}

	public function seleccionar($id)
	{
		return $this->db->get_where("usuarios",array("id_user"=>$id))->result_object();
	}

	public function actualizar($post,$id)
	{
		$data = array(
				"name"	=> $post["name"],
				"email"	=> $post["email"],
				"web"	=> $post["web"],
			);
		$this->db->where('id_user', $id);
        return $this->db->update('usuarios', $data);
	}
}