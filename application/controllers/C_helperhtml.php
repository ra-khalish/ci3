<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_helperhtml extends CI_Controller {
	function pureci()
	{
        $data=array(
            "judulapp"=>"Demo Helper HTML",
            "doctype"=>"html5",
            "metaauthor"=>array("name"=>"Author","content"=>"Betha"),
            "metarobot"=>array('name'=>'robots','content'=>'no-cache'),
            "metadesc"=>array('name'=>'description','content'=>'Demo Pure CI for html header'),
            "metakeyword"=>array('name'=>'keywords','content'=>'buku, CI, demo'),
            "metacontent"=>array('name'=>'Content-type','content'=>'text/html; charset=utf-8','type'=>'equiv'),
        );
        $this->load->view("v_c_view_pureci",$data);
    }
    
    function img(){
        $data["judulapp"]="Menampilkan Gambar dengan img()";
        $this->load->view("v_c_helperhtml_img",$data);
    }
}