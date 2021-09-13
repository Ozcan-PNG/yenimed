<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function index()
	{
		$this->load->view('Front/home');
	}

	public function hakkimizda()
	{
		$this->load->view('Front/hakkimizda');
	}

	public function iletisim()
	{
		$this->load->view('Front/iletisim');
	}

	public function galeri()
	{
		$this->load->view('Front/galeri');
	}

	public function doktorlar()
	{
		$this->load->view('Front/doktorlar');
	}

	public function randevu()
	{
		$this->load->view('Front/randevu');
	}
	
	public function blog()
	{
		$this->load->view('Front/blog');
	}
//Kategori Detay
	public function sacekimi()
	{
		$this->load->view('Front/sacekimi');
	}

		public function canlidestek()
	{
		$this->load->view('Front/canlidestek');
	}
}
