<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public $layout = 'layout/compile';

	public function __construct(){
		parent::__construct();
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	
	public function index()
	{
		$this->load->view('login');
	}
	public function home()
	{
		$data['page']=1;
		$this->load->view('layout/header', $data);
		
		$this->load->view('beranda');
		$this->load->view('layout/footer');
	}
public function event()
	{
		$data['page']=2;
		$this->load->view('layout/header', $data);
		$this->load->view('event');
		$this->load->view('layout/footer');
		
	}
public function modul()
	{
		$data['page']=3;
		$this->load->view('layout/header', $data);
		$this->load->view('modul');
		$this->load->view('layout/footer');
	}
public function subtest()
	{
		$data['page']=4;
		$this->load->view('layout/header', $data);
		$this->load->view('subtest');
		$this->load->view('layout/footer');
	}
public function data_pegawai()
	{
		$data['page']=5;
		$this->load->view('layout/header', $data);
		$this->load->view('data_pegawai');
		$this->load->view('layout/footer');
	}
public function daftar_pegawai()
	{
		$data['page']=6;
		$this->load->view('layout/header', $data);
		$this->load->view('daftar_pegawai');
		$this->load->view('layout/footer');
	}
public function event_statistik()
	{
		$data['page']=7;
		$this->load->view('layout/header', $data);
		$this->load->view('event_statistik');
		$this->load->view('layout/footer');
	}
public function tambah_event()
	{
		$data['page']=8;
		$this->load->view('layout/header', $data);
		$this->load->view('tambah_event');
		$this->load->view('layout/footer');
	}
public function edit_event()
	{
		$data['page']=9;
		$this->load->view('layout/header', $data);
		$this->load->view('edit_event');
		$this->load->view('layout/footer');
	}
	public function lihat_event()
	{
		$data['page']=10;
		$this->load->view('layout/header', $data);
		$this->load->view('lihat_event');
		$this->load->view('layout/footer');
	}
	public function tambah_modul()
	{
		$data['page']=10;
		$this->load->view('layout/header', $data);
		$this->load->view('tambah_modul');
		$this->load->view('layout/footer');
	}

		public function tambah_peserta()
	{
		$data['page']=11;
		$this->load->view('layout/header', $data);
		$this->load->view('tambah_peserta');
		$this->load->view('layout/footer');
	}
		public function event_log()
	{
		$data['page']=12;
		$this->load->view('layout/header', $data);
		$this->load->view('event_log');
		$this->load->view('layout/footer');
	}
}

