<?php 
/**
 * 
 */
class Buku extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	function tambahbuku(){
		$config['file_name'] = $this->input->post("foto");
		$config['upload_path'] = './img/buku';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = 10000;

		$this->load->library('upload', $config);
		$this->upload->overwrite = true;

		$this->form_validation->set_rules("nama_buku", "Nama Barang", "required|alpha|max_length[30]");
		$this->form_validation->set_rules("deskripsi_buku", "Harga Barang", "required|alpha_numeric|max_length[30]");
		$this->form_validation->set_rules("kategori", "Keterangan Barang", "required");

		if($this->form_validation->run()){
			if ( ! $this->upload->do_upload('upload_image')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('.header.php');
				$this->load->view('admin/buku/v_tambahbuku', $error);
			}else{
				$this->load->model("m_data");
				$data = array(
					"judul_buku"=>$this->input->post("nama_buku"),
					"deskripsi"=>$this->input->post("deskripsi_buku"),
					"foto"=>$this->upload->data('file_name'),
					"id_kategori"=>$this->input->post("kategori")
				);
	
				$this->m_data->insert_data($data);
	
				redirect(base_url() . "admin/buku");
			}
		}else{
			$this->add_form();
		}
	}
}
 ?>