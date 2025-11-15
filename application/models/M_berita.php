<?php

class M_berita extends CI_Model{

	function tampil_berita(){
		$this->db->select('*');
		$this->db->from('berita');

		$query= $this->db->get();

		$dataarray = $query->result_array();

		return $dataarray;

	}

	function simpan_berita($entrian){
		$config['upload_path'] = './assets/';
		$config['allowed_types'] = 'png|jpeg|webp|jpg';

		$this->upload->initialize($config);

		$this->upload->do_upload('gambar_berita');
		$uploadgambar = $this->upload->data();

		$entrian['gambar_berita']= $uploadgambar['file_nama'];
		$entrian['tanggal_berita'] = date("Y-m-d");
		$entrian['created_at'] = date("Y-m-d H:i:s");
		$entrian['updated'] = date("Y-m-d H:i:s");

		$disimpan = elements(array('judul_berita', 'isi_berita', 'url_berita', 'gambar_berita','status_berita', 'tanggal_berita', 'created_at', 'updated_at'), $entrian);

		$this->db->insert('berita', $disimpan);

	}

}

?>
