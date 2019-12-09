<?php
class C_view extends CI_Controller{
    function normal(){
        $data["judulapp"]="Menampilkan variabel secara normal";
        $data["var1"]="Isi variabel 1";
        $data["ekstrakvar"]=array(
            "versi"=>"Versi",
            "frm"=>"Framework Codeigniter",
            "no"=>"3.1.4"
        );
        $this->load->view("v_c_view_normal",$data);
    }

    function short(){
        $data["judulapp"]="Menampilkan variabel cara short_open_tag";
        $data["var1"]="Isi variabel 1";
        $data["ekstrakvar"]=array(
            "versi"=>"Versi",
            "frm"=>"Framework Codeigniter",
            "no"=>"3.1.4"
        );
        $this->load->view("v_c_view_short",$data);
    }
}