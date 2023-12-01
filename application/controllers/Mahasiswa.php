<?php 

class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel');
    }

    //menampilkan data mahasiswa 
    function index()
    {
        //ambil data
        $data['judul'] = "Data Mahasiswa";
        $data['mhs'] = $this->MahasiswaModel->getMahasiswa();
        $data['basis_kasus'] = $this->MahasiswaModel->getDataFromTable();
        $this->load->view('v_mahasiswa', $data);
    }
    
    function insert(){
        if($this->input->post()){
            $data_input_user = $this->input->post();

            $this->MahasiswaModel->insert_Mahasiswa($data_input_user);
            redirect('mahasiswa/index');
        }else{
            $data['judul'] = "Input Data Mahasiswa";
            $this->load->view('v_form', $data);
        }
    }

    public function update($id = null){
        if($this->input->post()){
            $update_data = $this->input->post();
            $this->MahasiswaModel->updateMahasiswa($update_data);
            redirect('mahasiswa');
        }else{
            $data['judul'] = 'Update Data Mahasiswa';
            $data['mahasiswa'] = $this->MahasiswaModel->get_one($id);
            $this->load->view('v_update', $data);
        }
    }
    public function delete($id){
            $this->MahasiswaModel->delete($id);
            redirect('mahasiswa');
    }
}