<?php 
class Berita extends CI_Controller{

    public function index(){
        $data['halaman'] = "Halaman Berita";

        $this->load->view("admin/berita/berita", $data);
    }

    public function tambahBerita(){
        $this->load->model('M_berita');
        
        $data['halaman'] = "Halaman Tambah Berita";

        if($this->input->post()){
            $entrian = $this->input->post();
            $this->M_berita->simpan_berita($entrian);
            redirect("admin/berita");
        }

        $this->load->view("admin/berita/tambahberita", $data);
    }


}

?>
