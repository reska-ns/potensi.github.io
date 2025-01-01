<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	
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
	public function verifikasi()
	{
		
			$this->load->view('/tes/verifikasi');
	
	}

    	public function subtes_1()
	{
		
			$this->load->view('tes/subtes_1');
	
	}

    	public function subtes_2()
	{
		
			$this->load->view('tes/subtes_2');
	
	}    	
    public function subtes_3()
	{
		
			$this->load->view('tes/subtes_3');
	
	} 
       	public function subtes_4()
	{
		
			$this->load->view('tes/subtes_4');
	
	} 
       	public function subtes_5()
	{
		
			$this->load->view('tes/subtes_5');
	
	}    	
    public function subtes_6()
	{
		
			$this->load->view('tes/subtes_6');
	
	}
    	public function subtes_7()
	{
		
			$this->load->view('tes/subtes_7');
	
	}
   	public function selamat_datang()
	{
		
			$this->load->view('tes/selamat_datang');
	
	}
	public function subtes_1_soal()
	{
		
			$this->load->view('tes/subtes_1_soal');
	
	}
	public function subtes_1_soal_20()
	{
		
			$this->load->view('tes/subtes_1_soal_20');
	
	}
	public function subtes_2_soal()
	{
		
			$this->load->view('tes/subtes_2_soal');
	
	}
	public function subtes_3_soal()
	{
		
			$this->load->view('tes/subtes_3_soal');
	
	}
	public function subtes_4_soal()
	{
		
			$this->load->view('tes/subtes_41_soal');
	
	}
	public function subtes_5_soal()
	{
		
			$this->load->view('tes/subtes_5_soal');
	
	}
	public function subtes_6_soal()
	{
		
			$this->load->view('tes/subtes_61_soal');
	
	}
	public function subtes_7_soal()
	{
		
			$this->load->view('tes/subtes_7_soal');
	
	}

	
}
