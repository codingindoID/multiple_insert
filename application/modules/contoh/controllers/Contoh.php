<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_contoh');
	}
	public function index()
	{
		$data['siswa']		= $this->M_contoh->view()->result();
		$this->load->view('index',$data);
	}

	public function add()
	{
		$data = array(
			'nis' => $this->input->post('nis'), 
			'nama' => $this->input->post('nama'), 
			'telp' => $this->input->post('telp'), 
			'alamat' => $this->input->post('alamat') 
		);

		$cek = $this->M_contoh->post($data);
		if(!$cek){
			echo json_encode(array(
				'success'=> 'terkirim'
			));
		}else{
			echo json_encode(array(
				'success'=> 'gagal'
			));
		}
	}

}

/* End of file contoh.php */
/* Location: ./application/controllers/contoh.php */