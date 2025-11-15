<?php

class Dashboard extends CI_controller
{
function index(){
	$data['halaman'] = "Halaman Admin";

	$this->load->view('/admin/dashboard', $data);
}
}

?>
