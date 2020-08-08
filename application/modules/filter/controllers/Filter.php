<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_filter');
	}
	public function index()
	{
		$this->load->view('index');
	}

	public function action($start,$end)
	{
		$query = "tgl_input between '".$start."' and '".$end."'";
		$data	= $this->M_filter->get_data($query)->result();

		echo json_encode($data);
	}

}

/* End of file Filter.php */
/* Location: ./application/modules/filter/controllers/Filter.php */