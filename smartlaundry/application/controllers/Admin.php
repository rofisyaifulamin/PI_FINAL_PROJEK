<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function index(){
		$data['prosesloundry'] = $this->m_data->tampil_data_prosesloundry()->result();
		$data['transaksi'] = $this->m_data->tampil_data_transaksi()->result();

		$this->load->view('servis_admin/header');
		$this->load->view('servis_admin/body');
		$this->load->view('admin/tampilan', $data);
		$this->load->view('servis_admin/footer');
	}





	/*  Untuk Menempilkan Form Pendaftaran  */

	function formpendaftaran(){
		$this->load->view('servis_admin/header');
		$this->load->view('servis_admin/body');
		$this->load->view('admin/formpendaftaran');
		$this->load->view('servis_admin/footer');
	}

	function form_tambah(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'no_hp' => $no_hp
			);
		$this->m_data->input_data($data,'pelanggan');
		redirect('admin/daftarpelanggan');
	}
	/*---------------------------------------------*/

	



	/*Untuk Menampilkan Tabel daftar pelanggan*/
	
	function daftarpelanggan(){
		$data['pelanggan'] = $this->m_data->tampil_data_pelanggan()->result();

		$this->load->view('servis_admin/headertabel');
		$this->load->view('servis_admin/body');
		$this->load->view('admin/daftarpelanggan', $data);
		$this->load->view('servis_admin/footertabel');
	}

	function edit_pelanggan($id_pelanggan){
		$where = array('id_pelanggan' => $id_pelanggan);
		$data['pelanggan'] = $this->m_data->edit_data($where,'pelanggan')->result();

		$this->load->view('servis_admin/headertabel');
		$this->load->view('servis_admin/body');
		$this->load->view('admin/daftarpelanggan_edit', $data);
		$this->load->view('servis_admin/footertabel');
	}

	function update_pelanggan(){
		$id_pelanggan = $this->input->post('id_pelanggan');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'no_hp' => $no_hp
		);

		$where = array(
			'id_pelanggan' => $id_pelanggan
		);
 
		$this->m_data->update_data($where,$data,'pelanggan');
			redirect('admin/daftarpelanggan');
	}

	function hapus_pelanggan($id_pelanggan){
		$where = array('id_pelanggan' => $id_pelanggan);
		$this->m_data->hapus_data($where,'pelanggan');
		redirect('admin/daftarpelanggan');
	}

	/*-------------------------------------*/





	/*  HISTORY  */

	function history(){
		$data['history'] = $this->m_data->tampil_data_history()->result();
		$data['prosesloundry'] = $this->m_data->tampil_data_prosesloundry()->result();
		$data['pelanggan'] = $this->m_data->tampil_data_pelanggan()->result();


		$this->load->view('servis_admin/headertabel');
		$this->load->view('servis_admin/body');
		$this->load->view('admin/history', $data);
		$this->load->view('servis_admin/footertabel');
	}

	function hapus_history($id_history){
		$where = array('id_history' => $id_history);
		$this->m_data->hapus_data($where,'history');
		redirect('admin/history');
	}

	/*-------------------------------------*/





	/*  TRANSAKSI  */
	function transaksi(){
		$data['transaksi'] = $this->m_data->tampil_data_transaksi('transaksi')->result();

		$this->load->view('servis_admin/headertabel');
		$this->load->view('servis_admin/body');
		$this->load->view('admin/transaksi', $data);
		$this->load->view('servis_admin/footertabel');
	}

	/*-------------------------------------*/

	


	/* MANAGEMENT PELANGGAN */

	function managementpelanggan(){
		$data['prosesloundry'] = $this->m_data->tampil_data_prosesloundry('prosesloundry')->result();
		$data['pelanggan'] = $this->m_data->tampil_data_pelanggan('pelanggan')->result();

		$this->load->view('servis_admin/headertabel');
		$this->load->view('servis_admin/body');
		$this->load->view('admin/managementpelanggan', $data);
		$this->load->view('servis_admin/footertabel');
	}

	function managementpelanggan_tambah(){
		$data['pelanggan'] = $this->m_data->tampil_data_pelanggan()->result();
		$data['prosesloundry'] = $this->m_data->tampil_data_prosesloundry()->result();

		$this->load->view('servis_admin/headertabel');
		$this->load->view('servis_admin/body');
		$this->load->view('admin/managementpelanggan_tambah', $data);
		$this->load->view('servis_admin/footertabel');
	}

	function tambah_proses(){
		$id_pelanggan = $this->input->post('id_pelanggan');
		$sub_id = substr($id_pelanggan, 0, 10);
		$jumlah = $this->input->post('jumlah');
		$berat = $this->input->post('berat');
		$keterangan = $this->input->post('keterangan');
		$total = $this->input->post('total');

		$id_proses = $this->input->post('id_proses');
		$substr_nama = substr($id_pelanggan, 14);

		$data = array(
			'id_proses' => $id_proses,
			'id_pelanggan' => $sub_id,
			'jumlah' => $jumlah,
			'berat' => $berat,
			'keterangan' => $keterangan,
			'total' => $total
			);

		$data2 = array(
			'id_proses' => $id_proses,
			'id_pelanggan' => $id_pelanggan,
			'nama' => $substr_nama,
			'total' => $total
			);

		$this->m_data->input_data($data,'prosesloundry');
		$this->m_data->input_data($data2,'transaksi');
		redirect('admin/managementpelanggan');
	}

	function edit_proses($id_proses){
		$where = array('id_proses' => $id_proses);
		$data['prosesloundry'] = $this->m_data->edit_data($where,'prosesloundry')->result();
		$data['pelanggan'] = $this->m_data->tampil_data_pelanggan('pelanggan')->result();

		$this->load->view('servis_admin/headertabel');
		$this->load->view('servis_admin/body');
		$this->load->view('admin/managementpelanggan_edit',$data);
		$this->load->view('servis_admin/footertabel');
	}

	function update_proses(){
		$id_proses = $this->input->post('id_proses');
		$proses = $this->input->post('proses');
		$waktu = $this->input->post('waktu');
		$jumlah = $this->input->post('jumlah');
		$berat = $this->input->post('berat');
		$keterangan = $this->input->post('keterangan');
		$total = $this->input->post('total');

		$data = array(
			'proses' => $proses,
			'waktu' => $waktu,
			'jumlah' => $jumlah,
			'berat' => $berat,
			'keterangan' => $keterangan,
			'total' => $total
			);

		$where = array(
			'id_proses' => $id_proses
		);
 
		$this->m_data->update_data($where,$data,'prosesloundry');
			redirect('admin/managementpelanggan');
	}

	function ambil_proses($id_proses){
		$status = "Sudah Diambil";
		$proses = "Siap Diambil"; 

		$data = array(
			'proses' => $proses,
			'status' => $status
			);

		$where = array(
			'id_proses' => $id_proses
		);
 
		$this->m_data->update_data($where,$data,'prosesloundry');

		$data = array(
			'id_proses' => $id_proses
		);

		$this->m_data->input_data($data,'history');

		redirect('admin/managementpelanggan');
	}

	function hapus_proses($id_proses){
		$where = array('id_proses' => $id_proses);

		$this->m_data->hapus_data($where,'prosesloundry');
		$this->m_data->hapus_data($where,'transaksi');

		redirect('admin/managementpelanggan');
	}

	/*-------------------------------------*/




	/*ruang untuk pengaturan pengguna*/
	function managementpengguna(){
		$data['user'] = $this->m_data->tampil_data_pengguna()->result();

		$this->load->view('servis_admin/headertabel');
		$this->load->view('servis_admin/body');
		$this->load->view('admin/managementpengguna', $data);
		$this->load->view('servis_admin/footertabel');
	}

	function managementpengguna_tambah(){
		$this->load->view('servis_admin/headertabel');
		$this->load->view('servis_admin/body');
		$this->load->view('admin/managementpengguna_tambah');
		$this->load->view('servis_admin/footertabel');
	}

	function tambah_user(){
		$username = $this->input->post('username');
		$realname = $this->input->post('realname');
		$password = $this->input->post('password');
		$phone_number = $this->input->post('phone_number');

		$data = array(
			'username' => $username,
			'realname' => $realname,
			'password' => $password,
			'phone_number' => $phone_number
			);
		$this->m_data->input_data($data,'user');
		redirect('admin/managementpengguna');
	}

	function edit_user($username){
		$where = array('username' => $username);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();

		$this->load->view('servis_admin/headertabel');
		$this->load->view('servis_admin/body');
		$this->load->view('admin/managementpengguna_edit',$data);
		$this->load->view('servis_admin/footertabel');
	}

	function update_user(){
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$realname = $this->input->post('realname');
		$password = $this->input->post('password');
		$phone_number = $this->input->post('phone_number');

		$data = array(
		'username' => $username,
		'realname' => $realname,
		'password' => $password,
		'phone_number' => $phone_number
		);

		$where = array(
			'id_user' => $id_user
		);
 
		$this->m_data->update_data($where,$data,'user');
			redirect('admin/managementpengguna');
	}

	function hapus_user($username){
		$where = array('username' => $username);
		$this->m_data->hapus_data($where,'user');
		redirect('admin/managementpengguna');
	}

	/*-------------------------------------*/

}
?>