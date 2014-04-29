<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estados extends CI_Model {

	public function get_all()
	{
		return $this->db->get("estados");
	}
}