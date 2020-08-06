<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_contoh extends CI_Model {

	public function view()
	{
		return $this->db->get('siswa');
	}

	function post($data)
	{
		$this->db->insert('siswa', $data);
	}

}

/* End of file M_contoh.php */
/* Location: ./application/modules/contoh/models/M_contoh.php */