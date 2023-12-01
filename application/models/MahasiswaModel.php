<?php

class MahasiswaModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getMahasiswa()
    {
        return $this->db->get('mahasiswa')->result();
    }
    function getNormalisasi()
    {
        return $this->db->get('normalisasi')->result();
    }

    function insert_Mahasiswa($data)
    {
        $data = array(
            'nama' => $data['nama'],
            'npm' => $data['npm'],
            'sks1' => $data['sks1'],
            'sks2' => $data['sks2'],
            'sks3' => $data['sks3'],
            'sks4' => $data['sks4'],
            'ipk1' => $data['ipk1'],
            'ipk2' => $data['ipk2'],
            'ipk3' => $data['ipk3'],
            'ipk4' => $data['ipk4'],
            'n1' => Normalisasi_SKS($data['sks1']),
            'n2' => Normalisasi_SKS($data['sks2']),
            'n3' => Normalisasi_SKS($data['sks3']),
            'n4' => Normalisasi_SKS($data['sks4']),
            'n5' => Normalisasi_IPS($data['ipk1']),
            'n6' => Normalisasi_IPS($data['ipk2']),
            'n7' => Normalisasi_IPS($data['ipk3']),
            'n8' => Normalisasi_IPS($data['ipk4'])

        );

        $this->db->insert('mahasiswa', $data);
    }

    function get_one($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('mahasiswa')->result();
    }

    function updateMahasiswa($data)
    {
        $data_update = array(
                'nama' => $data['nama'],
                'npm' => $data['npm'],
                'sks1' => $data['sks1'],
                'sks2' => $data['sks2'],
                'sks3' => $data['sks3'],
                'sks4' => $data['sks4'],
                'ipk1' => $data['ipk1'],
                'ipk2' => $data['ipk2'],
                'ipk3' => $data['ipk3'],
                'ipk4' => $data['ipk4'],
                'n1' => Normalisasi_SKS($data['sks1']),
                'n2' => Normalisasi_SKS($data['sks2']),
                'n3' => Normalisasi_SKS($data['sks3']),
                'n4' => Normalisasi_SKS($data['sks4']),
                'n5' => Normalisasi_IPS($data['ipk1']),
                'n6' => Normalisasi_IPS($data['ipk2']),
                'n7' => Normalisasi_IPS($data['ipk3']),
                'n8' => Normalisasi_IPS($data['ipk4'])
        );
        $this->db->where('id', $data['id']);
        $this->db->update('mahasiswa', $data_update);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
    function getDataFromTable() {
        $query = $this->db->get('basis_kasus');
        return $query->result();
    }
}
