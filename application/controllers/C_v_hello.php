<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_v_hello extends CI_Controller {
	function index()
	{
        $this->load->view("v_c_hello");
	}
}