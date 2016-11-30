<?php
    class Model_guru extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }
        
    public function tampil_guru(){
        $query = $this->db->get('data_guru');
        return $query ->result_array();
    }    
        
        
    public function input_data($data,$table){
		$this->db->insert($table,$data);
	}
        
   public function input_user($data,$table){
		$this->db->insert($table,$data);
	}
        
   public function get_id(){
        $sql = "SELECT * FROM user ORDER BY id_user DESC LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }
        
    function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
    }    
    
    function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
        
    function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    
}

?>