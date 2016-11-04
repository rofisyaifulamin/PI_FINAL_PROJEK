<?php 
 
class umum extends CI_Controller{
 
	function __construct(){
			parent::__construct();
			$this->load->model('m_data');
			$this->load->helper('url');
	}
 
	function index(){
		$this->load->view('servis_umum/header');
		$this->load->view('tampilan_umum/dashboard');
		$this->load->view('servis_umum/footer');
	}

	function profil(){
		$this->load->view('servis_umum/header');
		$this->load->view('tampilan_umum/profil');
		$this->load->view('servis_umum/footer');
	}

	function ceklaundry(){
		$id_proses = $this->input->post('id_proses');

		$where = array( 'id_proses' => $id_proses);
		$data['prosesloundry'] = $this->m_data->edit_data($where,'prosesloundry')->result();

		$data['pelanggan'] = $this->m_data->tampil_data_pelanggan('pelanggan')->result();



		$this->load->view('servis_umum/header');
		$this->load->view('tampilan_umum/ceklaundry', $data);
		$this->load->view('servis_umum/footer');
	}

	function hasil_pencarian(){
		$id_pelanggan = $this->input->post('id_pelanggan');

		$where = array( 'id_pelanggan' => $id_pelanggan);
		$data['pelanggan'] = $this->m_data->edit_data($where,'pelanggan')->result();

		$where = array( 'id_pelanggan' => $id_pelanggan);
		$data['prosesloundry'] = $this->m_data->edit_data($where,'prosesloundry')->result();

		$this->load->view('servis_umum/header');
		$this->load->view('servis_umum/body');
		$this->load->view('tampilan_umum/hasil_pencarian', $data);
		$this->load->view('servis_umum/footer');
	}
	
	function kontak(){
		$this->load->view('servis_umum/header');
		$this->load->view('tampilan_umum/kontak');
		$this->load->view('servis_umum/footer');
	}

 
}
?>