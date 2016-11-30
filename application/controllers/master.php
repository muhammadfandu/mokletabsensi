<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          //load the login model
          $this->load->model('absensi');
     }
    
	 public function index()
     {
        $this->load->helper('url');
		$this->load->view('welcome_message');
     }

    
    public function home(){
        //get the posted values
          $username = $this->input->post("identification");
          $password = $this->input->post("credential");

          //set validations
          $this->form_validation->set_rules("identification", "Username", "trim|required");
          $this->form_validation->set_rules("credential", "Password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->helper('url');
               $this->load->view('header');
               $this->load->view('home');
               $this->load->view('footer');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {
                    //check if username and password is correct
                    $usr_result = $this->absensi->get_user($username, $password);
                    if ($usr_result > 0) //active user record is present
                    {
//                        echo "<pre>";
//                        print_r($usr_result);
//                        echo "</pre>";
                         //set the session variables
                         $sessiondata = array(
                              'username' => $username,
                              'loginuser' => TRUE,
                              'id_user' => $usr_result[0]->id_user,
                              'tipe_user' => $usr_result[0]->tipe_user
                         );
                         $this->session->set_userdata($sessiondata);
                        
                        //Insert absence data
                        $this->absensi->addAbsence();
                        $verifying = $this->absensi->verifyAbsence();
                        
//                        echo "<pre>";
//                        print_r($verifying);
//                        echo "</pre>";
                        
                        if($verifying[0]->tanggal_absen == $verifying[1]->tanggal_absen){
                            $this->absensi->deleteAbsence($_SESSION['id_user'], $verifying[0]->jam_absen);
//                            print_r("deleted");
                        }
                        
                        $verifying = $this->absensi->verifyAbsence();
                        
//                        echo "<pre>";
//                        print_r($verifying);
//                        echo "</pre>";
                        
                        if($_SESSION['tipe_user'] == 'Admin'){
                            $this->session->set_flashdata('msg', 
                                                          '<script>$(document).ready(function(){
                                                                 swal("Sukses!", "Anda login sebagai Admin!", "success");
                                                            });</script>');
                            redirect("master/management");
                        }
                        else{
                            $this->session->set_flashdata('msg', 
                                                          '<script>$(document).ready(function(){
                                                                 swal("Sukses!", "Login berhasil", "success");
                                                            });</script>');
                            redirect("master/dashboard");
                        }
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                         redirect('master/home');
                    }
               }
               else
               {
                    redirect('master/home');
               }
          }
    }
    
    public function logout(){
        session_destroy();
        redirect('master/home');
    }
    
    public function view(){
        
        $data['a']="Var1";
        $data['b']="Var2";
        $data['c']="Var3";
        
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('kode',$data);
        $this->load->view('footer');
    }
    
    public function database(){
        
        $this->load->model('absensi');
        
        $data['data'] = $this->absensi->getData();
        
//        echo "<pre>";
//        print_r($data);
//        echo "</pre>";
        
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('kode',$data);
        $this->load->view('footer');
    }
    
    public function dashboard(){
        
//        echo "<pre>";
//        print_r($_SESSION);
//        echo "</pre>";
        
        $this->load->model('absensi');
        
        $data['data'] = $this->absensi->getAbsensi();
        
//        echo "<pre>";
//        print_r($data);
//        echo "</pre>";
        
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('dashboard', $data);
        $this->load->view('footer');
    }
    
    public function management(){
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('management');
        $this->load->view('footer');
    }
}
