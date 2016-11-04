<?php

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('data_diri');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	/*----- ini buat tampilan Management Pengguna*/	
	function tampil_data_pengguna(){
		return $this->db->get('user');
	}

	/*----- ini buat tampilan Management Pelanggan*/	
	function tampil_data_pelanggan(){
		return $this->db->get('pelanggan');
	}

	/*----- ini buat tampilan Management Pelanggan*/	
	function tampil_data_prosesloundry(){
		return $this->db->get('prosesloundry');
	}

	/* --- ini untuk menampilkan history  --- */
	function tampil_data_history(){
		return $this->db->get('history');
	}

	/* --- ini untuk menampilkan transaksi  --- */
	function tampil_data_transaksi(){
		return $this->db->get('transaksi');
	}	



}

?>