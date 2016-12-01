<?php
class Absensi extends CI_model{
    public function __construct(){
        $this->load->database();
    }

    public function getData(){
        $query = $this->db->get('data');
        
        return $query->result_array();
    }
    
    //get the username & password from tbl_usrs
    function get_user($usr, $pwd)
    {
        $sql = "select * from user where username = '" . $usr . "' and password = '" . $pwd . "' ";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function getAbsensi(){
        $sql = "select * from absensi 
            join user on absensi.id_user = user.id_user 
            where absensi.id_user = '" . $_SESSION['id_user'] . "' ";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function addAbsence(){
        
        date_default_timezone_set("Asia/Jakarta");
        $date = date("Y-m-d");
        $time = date("h:i:s");
        
        $sql = "INSERT INTO absensi(`id_absensi`, `id_user`, `tanggal_absen`, `jam_absen`, `status`) 
        VALUES (null,'".$_SESSION['id_user']."','" . $date . "' , '" . $time . "', true)";
        $query = $this->db->query($sql);
    }
    
    public function verifyAbsence(){
        $date = date("Y-m-d");
        $sql = "select * from absensi 
            join user on absensi.id_user = user.id_user 
            where absensi.id_user = '" . $_SESSION['id_user'] . "' and absensi.tanggal_absen = '" . $date . "' order by jam_absen desc limit 2";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function deleteAbsence($id, $jam){
        $sql = "delete from absensi where id_user = '". $id ."' and jam_absen = '" . $jam . "' ";
        $query = $this->db->query($sql);
    }
    
    public function login_siswa($username)
    {
        $sql = "select * from data_siswa join user on data_siswa.id_user = user.id_user where user.username = '".$username."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function login_guru($username)
    {
        $sql = "select * from data_guru join user on data_guru.id_user = user.id_user where user.username = '".$username."'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
?>