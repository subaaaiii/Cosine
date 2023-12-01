<?php 

class Basis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('BasisKasusModel');
    }

    //menampilkan data mahasiswa 
    function index()
    {
        //ambil data
        $data['judul'] = "Data Basis Kasus";
        $data['basis'] = $this->BasisKasusModel->getBasis();
        $this->load->view('v_basis', $data);
    }
    
    function insert(){
        if($this->input->post()){
            $data_input_user = $this->input->post();

            $this->BasisKasusModel->insert_Basis($data_input_user);
            redirect('basis/index');
        }else{
            $data['judul'] = "Input Data Basis Kasus";
            $this->load->view('v_form_basis', $data);
        }
    }

    public function update($id = null){
        if($this->input->post()){
            $update_data = $this->input->post();
            $this->BasisKasusModel->updateBasis($update_data);
            redirect('basis');
        }else{
            $data['judul'] = 'Update Data Basis Kasus';
            $data['basis'] = $this->BasisKasusModel->get_one($id);
            $this->load->view('v_update_basis', $data);
        }
    }
    public function delete($id){
            $this->BasisKasusModel->delete($id);
            redirect('basis');
    }
}