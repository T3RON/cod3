<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scraper extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('simple_html_dom');
		$this->load->helper('Scraper_helper');
		$this->load->model('MY_Model');
	}

	public function index()
	{



	


		//$data['cities'] = $this->MY_Model->select('cities',$id);



		Scraper_helper::Scraper_digikala('div[class=c-product__params js-is-expandable]');
		Scraper_helper::Scraper_digikala('h1[class=c-product__title]');
		Scraper_helper::Scraper_digikala('div[class=c-product__seller-price-pure js-price-value]');
		Scraper_helper::Scraper_img_digikala('dkp-1901393','img[class=js-gallery-img]','data-zoom-image');
	}


}
