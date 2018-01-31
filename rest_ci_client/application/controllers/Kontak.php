<?php
class Kontak extends CI_Controller{
	var $api = "";

	function __construct(){
		parent::__construct();
		$this->api = "http://localhost/rest_ci/index.php";
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	function index(){
		$data['dataKontak'] = json_decode($this->curl->simple_get($this->api.'/kontak'));
		$this->load->view('kontak/list', $data);
	}

	function create(){
		if(isset($_POST['submit'])){
			$data = array(
				'id'	=>	$this->input->post('id'),
				'nama'	=>	$this->input->post('nama'),
				'nomor' =>	$this->input->post('nomor')
			);

			$insert = $this->curl->simple_post($this->api.'/kontak', $data, array(CURLOPT_BUFFERSIZE => 10));

			if($insert){
				$this->session->set_flashdata('hasil', 'Insert data berhasil');
			}
			else{
				$this->session->set_flashdata('hasil', 'Insert data gagal');
			}

			redirect('kontak');
		}
		else{
			$this->load->view('kontak/create');
		}
	}

	function edit(){
		if(isset($_POST['submit'])){
			$data = array(
				'id'	=>	$this->input->post('id'),
				'nama'	=>	$this->input->post('nama'),
				'nomor' =>	$this->input->post('nomor')
			);

			$update = $this->curl->simple_put($this->api.'/kontak', $data, array(CURLOPT_BUFFERSIZE => 10));

			if($update){
				$this->session->set_flashdata('hasil', 'Update data berhasil');
			}
			else{
				$this->session->set_flashdata('hasil', 'Update data gagal');
			}

			redirect('kontak');
		}
		else{
			$param = array('id' => $this->uri->segment(3));
			$data['dataKontak'] = json_decode($this->curl->simple_get($this->api.'/kontak', $param));

			$this->load->view('kontak/edit', $data);
		}
	}

	function delete($id){
		if(empty($id)){
			redirect('kontak');
		}
		else{
			$delete = $this->curl->simple_delete($this->api.'/kontak', array('id'=> $id), array(CURLOPT_BUFFERSIZE => 10));

			if($delete){
				$this->session->set_flashdata('hasil', 'Data berhasil dihapus');
			}
			else{
				$this->session->set_flashdata('hasil', 'Data gagal dihapus');
			}

			redirect('kontak');
		}
	}
}
?>