<?php

function panggil($namafile){
	$ci =& get_instance();

	return $ci->load->view($namafile);
}

?>
