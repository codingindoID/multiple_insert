<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multiple extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_tes');
	}
	public function index()
	{
		$data['siswa'] = $this->M_tes->view();

    	$this->load->view('index', $data); 
    }

    public function form()
    {
    	$this->load->view('form'); 
    }

    public function save()
    {
	    $nis 		= $this->input->post('nis'); 
	    $nama 		= $this->input->post('nama'); 
	    $telp 		= $this->input->post('telp'); 
	    $alamat 	= $this->input->post('alamat'); 
	    
	    /*buat array kosongan untuk menampung data*/
	    $data = array();
	    
	    $index = 0; 
	    foreach($nis as $datanis){ 
	    	/*push data kedalam array kosong tadi*/
	    	array_push($data, array(
	    		'nis'		=>$datanis,
	        	'nama'		=>$nama[$index], 
	        	'telp'		=>$telp[$index], 
	        	'alamat'	=>$alamat[$index], 
	   		 ));

	    	$index++;
	    }
	    
	    $sql = $this->M_tes->save_batch($data); 
	    
	    // Cek apakah query insert nya sukses atau gagal
	    if($sql){ // Jika sukses
	    	echo "<script>alert('Data berhasil disimpan');window.location = '".base_url('multiple')."';</script>";
	    }else{ // Jika gagal
	    	echo "<script>alert('Data gagal disimpan');window.location = '".base_url('multiple/form')."';</script>";
	    }
	}

}

/* End of file Multiple.php */
/* Location: ./application/modules/multiple/controllers/Multiple.php */