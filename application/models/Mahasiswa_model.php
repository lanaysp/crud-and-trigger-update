<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_model {

    public function getAllMhs()
    {
        return $this->db->get('mahasiswa')->result();
    }

    public function hapusDataMahasiswa($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('mahasiswa', ['id' => $id]);
    }

    public function getMhsById($id)
    {
       return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

     public function updateMhs()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "nim" => $this->input->post('nim', true),
            "nama_mhs" => $this->input->post('nama_mhs', true),
            "jenkel_mhs" => $this->input->post('jenkel_mhs', true),
            "alamat_lengkap" => $this->input->post('alamat_lengkap', true),
            "no_hp" => $this->input->post('no_hp', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }
}