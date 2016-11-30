<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {        
    
    function __construct(){
		parent::__construct();		
		$this->load->model('model_siswa');
		$this->load->helper('url');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->database();
        $this->load->library('form_validation');
        //load the login model
        $this->load->model('absensi');

	}
    
	public function index()
	{       
        $this->load->helper('url');
        $this->load->view('header');
        $datas['siswa']= $this->model_siswa->tampil_siswa();
        $this->load->view('data_siswa', $datas);
        $this->load->view('footer');
	}
    
    function tambah(){
        $nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
        $jk = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
      
         $datau = array(
            'username' => $username,
            'password' => $password,
            'tipe_user' => "Siswa"
            );
		$this->model_siswa->input_user($datau, 'user');
        $id_userr = $this->model_siswa->get_id();
        
		$datas = array(
			'nama_siswa' => $nama,
			'kelas_siswa' => $kelas,
            'jk_siswa' => $jk,
            'alamat_siswa' => $alamat,
            'telp_siswa' => $telp,
            'id_user' => $id_userr[0]->id_user
			);
        $status = $this->model_siswa->input_data($datas,'data_siswa');
        if($status ==0)
           {
            $this->session->set_flashdata("msg",'<script>$(document).ready(function(){swal("Sukses!", "Data berhasil ditambahkan", "success");});</script>');
            redirect('siswa','refresh');
           }
           else{
            $this->session->set_flashdata("msg",'<script>$(document).ready(function(){swal("Sesuatu Terjadi!", "Data gagal ditambahkan", "error");});</script>');
            redirect('siswa','refresh');
           }
    }
    
    function edit($id){
	$where = array('id_siswa' => $id);
	$data['siswa'] = $this->model_siswa->edit_data($where,'data_siswa')->result();
    $data['id_user'] = $this->model_siswa->get_id();
    $this->load->view('header');
	$this->load->view('edit_siswa',$data);
    $this->load->view('footer');
    }
    
    function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
        $jk = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');

		$data = array(
			'nama_siswa' => $nama,
			'kelas_siswa' => $kelas,
            'jk_siswa' => $jk,
            'alamat_siswa' => $alamat,
            'telp_siswa' => $telp
			);
        $where =array(
            'id_siswa' => $id
        );
		$status = $this->model_siswa->update_data($where,$data,'data_siswa');
        if($status ==0)
           {
            $this->session->set_flashdata("msg",'<script>$(document).ready(function(){swal("Sukses!", "Data berhasil diubah", "success");});</script>');
            redirect('siswa','refresh');
           }
           else{
            $this->session->set_flashdata("msg",'<script>$(document).ready(function(){swal("Sesuatu Terjadi!", "Data gagal diubah", "error");});</script>');
            redirect('siswa','refresh');
           }
		redirect('siswa');
    }
    
    function hapus($id){
        $where = array('id_siswa' => $id);
        $status = $this->model_siswa->hapus_data($where, 'data_siswa');
        if($status ==0)
           {
            $this->session->set_flashdata("msg",'<script>$(document).ready(function(){swal("Sukses!", "Data berhasil dihapus", "success");});</script>');
            redirect('siswa','refresh');
           }
           else{
            $this->session->set_flashdata("msg",'<script>$(document).ready(function(){swal("Sesuatu Terjadi!", "Data gagal dihapus", "error");});</script>');
            redirect('siswa','refresh');
           }
        redirect('siswa');
    }
    
    
}