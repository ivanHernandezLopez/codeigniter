<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Model {

	public function get_all()
	{
		return $this->db->get("usuarios")->result_object();
	}
}