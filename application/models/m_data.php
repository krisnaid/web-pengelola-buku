<?php 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('users');
	}
	function tampil_kategori(){
		return $this->db->get('kategori');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function cek_tambah($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function tampil_buku(){
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->join('kategori', 'kategori.id_kategori = buku.id_kategori', 'inner');
		$this->db->order_by('id_buku', 'asc');
		$query =  $this->db->get();
		if(!$query)
		{
			return false;
		}
		else
		{
			return $query;
		}

	}
	function daftar_kategori(){
		return $this->db->get('kategori');
	}
	function insert_data($data1){
		$this->db->insert("buku", $data1);
	}
}
?>