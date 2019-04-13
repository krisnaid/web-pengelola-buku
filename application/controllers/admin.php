<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('m_data');
		$this->load->model('m_login');
        $autoload['helper'] = array('url','form');
		$this->load->library('form_validation');
	
	}

	function index(){

				if($this->session->userdata('status') != "login"){
			echo "<script>alert('Anda harus login dahulu!!');
    				window.location.href='".base_url("admin/login")."';</script>";
		}

		$this->load->view('.header.php');
		$this->load->view('admin/v_admin');

	}

	public function user($url=null)
	{
		if ($url == null) {
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('.header.php');
		$this->load->view('admin/user/v_user',$data);
		}elseif($url == 'tambah') {
		$this->load->view('.header.php');
		$this->load->view('admin/user/v_tambahuser');
		}elseif ($url == 'edit') {
		$id = $this->uri->segment('4');
		$where = array('id' => $id);
		$data['users'] = $this->m_data->edit_data($where,'users')->result();
		$this->load->view('.header.php');
		$this->load->view('admin/user/v_edituser', $data);
		}
	}

	public function buku($url=null)
	{
		if ($url == null) {
			//tampil data buku
			$data['buku'] = $this->m_data->tampil_buku()->result();

			//menampilkan jumlah buku
			$data['jumlah'] = $this->m_data->tampil_buku()->num_rows();

			$this->load->view('.header.php');
			$this->load->view('admin/buku/v_buku',$data);
		}elseif ($url == 'tambah') {
			//menampilkan kategori
			$data['kategori'] = $this->m_data->daftar_kategori()->result();
			$this->load->view('.header.php');
			$this->load->view('admin/buku/v_tambahbuku',$data);
		}elseif ($url == 'edit') {
			$id = $this->uri->segment('4');
			//$idk = $this->uri->segment('6');
			$where = array('id_buku'=>$id);
			//$where1 = array('kategori.id_kategori'=>$idk);
			$data['buku'] = $this->m_data->edit_data($where,'buku')->result();
			$data['kategori'] = $this->m_data->daftar_kategori()->result();
			$this->load->view('.header.php');
			$this->load->view('admin/buku/v_editbuku', $data);
		}
	}

	public function kategori($url=null)
	{
		if ($url == null) {
			//tampil data kategori
			$data['kategori'] = $this->m_data->tampil_kategori()->result();

			//menampilkan jumlah kategori
			$data['jumlah'] = $this->m_data->tampil_kategori()->num_rows();

			$this->load->view('.header.php');
			$this->load->view('admin/kategori/v_kategori',$data);
		}elseif ($url == 'tambah') {
			$this->load->view('.header.php');
			$this->load->view('admin/kategori/v_tambahkategori');
		}elseif ($url == 'edit') {
			$id = $this->uri->segment('4');
			$where = array('id_kategori' => $id);
			$data['kategori'] = $this->m_data->edit_data($where,'kategori')->result();
			$this->load->view('.header.php');
			$this->load->view('admin/kategori/v_editkategori', $data);
		}
	}

	public function login()
	{
		$this->load->view('admin/v_login');
	}

}

?>