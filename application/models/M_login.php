<?php 
 
class M_login extends CI_Model{	
	function cek($where,$table){
		$query = $this->db->get_where($table,$where);
		return $query->row_array();
	}

	function datauser($where, $table){
		$query = $this->db->select('*')
						->from($table)
						->where($where)
						->get();
		return $query->result_array();
	}
}