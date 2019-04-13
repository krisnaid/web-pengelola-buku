<?php 
/**
 * 
 */
class Crud extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->model('m_login');
        $autoload['helper'] = array('url','form');
		$this->load->library('form_validation');
	}

	function tambah_aksi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');


		$where = array(
			'username' => $username
		);
		$cek = $this->m_data->cek_tambah("users",$where)->num_rows();
		if($cek == 0){

			$data = array(
				'username' => $username,
				'password' => md5($password),
				'email' => $email
			);
			$this->m_data->input_data($data,'users');
			redirect('admin/user');
		}else{
			echo "Terdapat username yang sama, silahkan<a href='".base_url('admin/user')."'>kembali</a>";
		}
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'users');
		redirect('admin/user');
	}

	function hapusbuku($id){
		$where = array('id_buku' => $id);
		$this->m_data->hapus_data($where,'buku');
		redirect('admin/buku');
	}

	function update(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$email = $this->input->post('email');

		$where = array(
			'username' => $username
		);
		$cek = $this->m_data->cek_tambah("users",$where)->num_rows();
		if($cek == 0){

			$data = array(
				'username' => $username,
				'email' => $email,
			);

			$where = array(
				'id' => $id
			);

			$this->m_data->update_data($where,$data,'users');
			redirect('admin/user');
		}else{
			echo "Terdapat username yang sama, silahkan<a href='".base_url('admin/user/edit/'.$id)."'>kembali</a>";
		}
	}


	function tambahbuku(){
		$config['file_name'] = $this->input->post("nama_buku");
		$config['upload_path'] = './img/buku';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = 10000;

		$this->load->library('upload', $config);
		$this->upload->overwrite = true;

			if ( ! $this->upload->do_upload('foto')){
				$this->load->view('.header.php');
				$this->load->view('admin/buku/v_tambahbuku');
			}else{
				$this->load->model("m_data");
				$data1 = array(
					"judul_buku"=>$this->input->post("nama_buku"),
					"deskripsi"=>$this->input->post("deskripsi_buku"),
					"foto"=>$this->upload->data('file_name'),
					// "foto"=>$this->input->data('file_name'),
					"id_kategori"=>$this->input->post("kategori")
				);
	
				$this->m_data->insert_data($data1);
	
				redirect(base_url() . "admin/buku");
			}
	}

	function updatebuku(){
		$id = $this->input->post('id');
		$config['file_name'] = $this->input->post("nama_buku");
		$config['upload_path'] = './img/buku';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = 10000;

		$this->load->library('upload', $config);
		$this->upload->overwrite = true;

			if ( ! $this->upload->do_upload('foto')){
				$this->load->model("m_data");
				$where = array(
					'id_buku' => $id
				);
				$data = array(
					"judul_buku"=>$this->input->post("nama_buku"),
					"deskripsi"=>$this->input->post("deskripsi_buku"),
					"id_kategori"=>$this->input->post("kategori")
				);
	
				$this->m_data->update_data($where,$data,'buku');
	
				redirect(base_url() . "admin/buku");
			}else{
				$this->load->model("m_data");
				$where = array(
					'id_kategori' => $id
				);
				$data = array(
					"judul_buku"=>$this->input->post("nama_buku"),
					"deskripsi"=>$this->input->post("deskripsi_buku"),
					"foto"=>$this->upload->data('file_name'),
					// "foto"=>$this->input->data('file_name'),
					"id_kategori"=>$this->input->post("kategori")
				);
	
				$this->m_data->update_data($where,$data,'buku');
				redirect(base_url() . "admin/buku");
			}
	}

}
?>