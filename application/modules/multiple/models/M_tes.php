<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tes extends CI_Model {

	public function view()
	{
		return $this->db->get('siswa')->result();
	}

	public function save_batch($data)
	{
		return $this->db->insert_batch('siswa', $data);
	}
}

/* End of file M_tes.php */
/* Location: ./application/modules/multiple/models/M_tes.php */