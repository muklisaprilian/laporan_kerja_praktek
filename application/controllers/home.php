<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('username'))
		{
			redirect('login');
		}
	}
	public function index(){
		 $d['title'] = 'Selamat Datang Di Aplikasi Administrasi IRP &minus; App';
         $d['judul'] = 'Selamat Datang Di Aplikasi Administrasi IRP';
         $d['username'] = $this->session->userdata('username');
          $this->load->view('admin/index', $d);
	}
}