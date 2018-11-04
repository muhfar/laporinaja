<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class C_Laporan_Barang extends CI_Controller
{
	public function index()
	{
		$this->load->view('V_lapor_kehilangan');
	}

	
	function simpan_laporan(){
		date_default_timezone_set('Asia/Jakarta');
		$data['tanggal'] 		= date("Y-m-d H:i:s");
		$data['jenis']			= $this->input->post('jenis');
		$data['nama']			= $this->input->post('nama_barang');
		$data['spesifikasi']	= $this->input->post('spesifikasi');
		$data['lokasi']			= $this->input->post('lokasi');
		$data['kontak']			= $this->input->post('kontak');
		$data['id_user']		= $this->input->post('id_user');

		$this->load->model('User/M_Laporan_Barang');
		$this->M_Laporan_Barang->simpan_laporann($data);

		echo '<script>alert("You Have Successfully updated this Record!");</script>';
        redirect(base_url('C_Laporan_Barang'), 'refresh');
               

	}
}