<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->db->get('mahasiswa')->result_array();
        $this->load->model('Mahasiswa_model');

        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('nama_mhs', 'Nama', 'required');
        $this->form_validation->set_rules('jenkel_mhs', 'Jeniskelamin', 'required');
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'Hp', 'required');

         if ($this->form_validation->run() == false) {

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');

   } else {
           $data = [
                'id' => $this->input->post('id'),
                'nim' => $this->input->post('nim'),
                'nama_mhs' => $this->input->post('nama_mhs'),
                'jenkel_mhs' => $this->input->post('jenkel_mhs'),
                'alamat_lengkap' => $this->input->post('alamat_lengkap'),
                'no_hp' => $this->input->post('no_hp')
            ];

            
            $this->session->set_flashdata('flash', 'Ditambahkan');
            $this->db->insert('mahasiswa', $data);
            redirect('mahasiswas');
        }
    }


    public function geteditmhs()
    {
       $this->load->model('Mahasiswa_model', 'mhs');
        echo json_encode($this->mhs->getMhsById($_POST['id'])); 
    }

     public function updatemhs()
    {
        $this->load->model('Mahasiswa_model', 'mhs');
        $this->mhs->updateMhs();
        $this->session->set_flashdata('flash', 'The menu was successfully updated!');
        redirect('mahasiswas');
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswas');
    }

}


/* End of file Mahasiswas.php */
/* Location: ./application/controllers/Mahasiswas.php */