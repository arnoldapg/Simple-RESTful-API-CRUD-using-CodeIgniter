<?php
defined('BASEPATH') OR exit('No direct script allowed');

/*----------------------------------------REQUIRE THIS PLUGIN----------------------------------------*/
require APPPATH . '/libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;

class Kontak extends REST_Controller{
	/*----------------------------------------CONSTRUCTOR----------------------------------------*/
	function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}

	/*----------------------------------------GET KONTAK----------------------------------------*/
	function index_get(){
		$id = $this->get('id');
		
		if($id == ''){
			$kontak = $this->db->get('telepon')->result();
		}
		else{
			$this->db->where('id', $id);
			$kontak = $this->db->get('telepon')->result();
		}

		$this->response($kontak, 200);
	}

	function index_post(){
		$data = array(
			'id'	=>	$this->post('id'),
			'nama'	=>	$this->post('nama'),
			'nomor'	=>	$this->post('nomor'),
		);
		$insert = $this->db->insert('telepon', $data);
		
		if($insert){
			$this->response($data, 200);
		}
		else{
			$this->response(array('status' => 'fail', 502));
		}
	}

	function index_put(){
		$id = $this->put('id');
		$data = array(
			'id'	=>	$this->put('id'),
			'nama'	=>	$this->put('nama'),
			'nomor'	=>	$this->put('nomor'),
		);
		
		$this->db->where('id', $id);
		$update = $this->db->update('telepon', $data);

		if($update){
			$this->response($data, 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	function index_delete(){
		$id = $this->delete('id');

		$this->db->where('id', $id);
		
		$delete = $this->db->delete('telepon');

		if($delete){
			$this->response(array('status' => 'success'), 201);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}
}
?>