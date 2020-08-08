<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_filter extends CI_Model {

	function get_data($where)
	{
		$this->db->where($where);
		return $this->db->get('tb_filter');
	}	

}

/* End of file M_filter.php */
/* Location: ./application/modules/filter/models/M_filter.php */