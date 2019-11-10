<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['judul'] = "Log History No Hp";
		$data['log'] =  $this->db->get('log')->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/logs', $data);
		$this->load->view('templates/footer');
	}

}

/* End of file Log.php */
/* Location: ./application/controllers/Log.php */