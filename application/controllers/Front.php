<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->viewData = new stdClass();
		//bütün veya birden çok sayfada aynı veri kullanacaksam buraya yazıyorum
		$sonuc = $this->dtbs->listele('sosyal_medya');
		$this->viewData->sosyal_medya = $sonuc;
		$sonuc = $this->dtbs->cek(1,'hakkimizda');
		$this->viewData->hakkimizda = $sonuc;
		$sonuc = $this->dtbs->cek(1,'meta');
		$this->viewData->meta = $sonuc;
		$sonuc = $this->dtbs->listele('referanslar');
		$this->viewData->referanslar = $sonuc;
		$sonuc = $this->dtbs->cek(1,'iletisim');
		$this->viewData->iletisim = $sonuc;
	}

	public function index()
	{
		$sonuc = $this->dtbs->listele('slider');
		$this->viewData->sliders = $sonuc;
		$this->load->view('Front/home',$this->viewData);
	}

	public function hakkimizda()
	{
		$this->load->view('Front/hakkimizda',$this->viewData);
	}

	public function iletisim()
	{
		$this->load->view('Front/iletisim',$this->viewData);
	}

	public function galeri()
	{
		$this->load->view('Front/galeri',$this->viewData);
	}

	public function doktorlar()
	{
		$sonuc = $this->dtbs->listele('doktorlar');
		$this->viewData->doktorlar = $sonuc;
		$this->load->view('Front/doktorlar',$this->viewData);
	}

	public function randevu()
	{
		$this->load->view('Front/randevu',$this->viewData);
	}
	
	public function blog()
	{
		$sonuc = $this->dtbs->listele('blog');
		$this->viewData->bloglar = $sonuc;
		$this->load->view('Front/blog',$this->viewData);
	}
//Kategori Detay
	public function sacekimi()
	{
		$this->load->view('Front/sacekimi',$this->viewData);
	}

	public function canlidestek()
	{
		$this->load->view('Front/canlidestek',$this->viewData);
	}
}
