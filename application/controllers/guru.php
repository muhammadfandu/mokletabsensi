<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {        
    
    function __construct(){
		parent::__construct();		
		$this->load->model('model_guru');
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
        $this->load->view('header');
        $data['guru']= $this->model_guru->tampil_guru();
        $this->load->view('data_guru', $data);
        $this->load->view('footer');
	}
    
    
    function tambah(){
        $nama = $this->input->post('nama');
		$mapel = $this->input->post('mapel');
        $jk = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
      
         $datau = array(
            'username' => $username,
            'password' => $password,
            'tipe_user' => "Guru"
            );
		$this->model_guru->input_user($datau, 'user');
        $id_userr = $this->model_guru->get_id();

		$data = array(
			'nama_guru' => $nama,
			'mapel_guru' => $mapel,
            'jk_guru' => $jk,
            'alamat_guru' => $alamat,
            'telp_guru' => $telp,
            'id_user' => $id_userr[0]->id_user
			);
		$this->model_guru->input_data($data,'data_guru');
		redirect('guru');
    }
    
    function edit($id){
    $this->load->view('header');
	$where = array('id_guru' => $id);
	$data['guru'] = $this->model_guru->edit_data($where,'data_guru')->result();
    $data['id_guru'] = $this->model_guru->get_id();
	$this->load->view('edit_guru',$data);
        $this->load->view('footer');
    }
    
    function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
		$mapel = $this->input->post('mapel');
        $jk = $this->input->post('jenis_kelamin');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $user = $this->input->post('user');

		$data = array(
			'nama_guru' => $nama,
			'mapel_guru' => $mapel,
            'jk_guru' => $jk,
            'alamat_guru' => $alamat,
            'telp_guru' => $telp,
            'id_user' => $user
			);
        $where =array(
            'id_guru' => $id
        );
		$this->model_guru->update_data($where,$data,'data_guru');
		redirect('guru');
    }
    
     function hapus($id){
	$where = array('id_guru' => $id);
	$this->model_guru->hapus_data($where, 'data_guru');
    redirect('guru');
    }
    
    
}