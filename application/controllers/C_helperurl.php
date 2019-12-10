<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_helperurl extends CI_Controller {
	function link()
	{
        $data["judulapp"]="Menampilkan Link dengan anchor() dan anchor_popup()";
        $this->load->view("v_c_helperurl_link",$data);
	}
}