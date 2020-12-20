<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Digikala extends CI_Controller {

    private $tbl_name = 'products';

    function __construct()
    {
        parent::__construct();

        $this->load->library('simple_html_dom');
		$this->load->helper('Scraper_helper');
		$this->load->model('MY_Model');

    }

    function index()
    {

        $this->load->view('panel/'.$this->tbl_name);
    }

    function update () {

        $meta_description = 'meta[name=description]';
        $products_title = 'h1[class=c-product__title]';
        $products_img = 'img[class=js-gallery-img]';
        $products_slide0 = 'div.js-img-main-1 img.pannable-image';
        $products_slide1 = 'div.js-img-main-2 img.pannable-image';
        $products_slide2 = 'div.js-img-main-3 img.pannable-image';
        $products_slide3 = 'div.js-img-main-4 img.pannable-image';
        $products_slide4 = 'div.js-img-main-5 img.pannable-image';
        $products_cond = 'div[class=c-product__params js-is-expandable]';
        $products_content = 'section.c-content-expert__summary';
        $products_guaranteed = 'div.c-product__guaranteed';
        $products_rating = 'div.c-product__engagement-rating';
        $products_params = 'div.c-params';



        $dkp = $this->input->post('products_code');
        $tag = $this->input->post('products_tag');
        $url = 'https://www.digikala.com/product/'.$dkp;
        $products_url = 'https://affstat.adro.co/click/a135cd72-06eb-4008-8903-9afa1da33e12/'.base64_encode('https://www.digikala.com/product/'.$dkp);

		//Scraper_helper::download_page($dkp,$tag,$url);
		$data = array(
			'products_code' => $dkp,
			'products_url' => $products_url
		);
		$result= $this->MY_Model->insert('products',$data);



		Scraper_helper::meta_site($dkp,$meta_description,'meta_description','products','products_code');
		Scraper_helper::Scraper_site($dkp,$products_title,'products_title','products','products_code');
		Scraper_helper::Scraper_site($dkp,$products_content,'products_content','products','products_code');
        Scraper_helper::Scraper_img_site($dkp,$products_slide0,'products_slide0','products','products_code');
        Scraper_helper::Scraper_img_site($dkp,$products_slide1,'products_slide1','products','products_code');
        Scraper_helper::Scraper_img_site($dkp,$products_slide2,'products_slide2','products','products_code');
        Scraper_helper::Scraper_img_site($dkp,$products_slide3,'products_slide3','products','products_code');
        Scraper_helper::Scraper_img_site($dkp,$products_slide4,'products_slide4','products','products_code');
        Scraper_helper::Scraper_site($dkp,$products_cond,'products_cond','products','products_code');
        Scraper_helper::Scraper_site($dkp,$products_guaranteed,'products_guaranteed','products','products_code');
        Scraper_helper::Scraper_site($dkp,$products_rating,'products_rating','products','products_code');
        Scraper_helper::Scraper_site($dkp,$products_params,'products_params','products','products_code');
        

        if ($result) {
           
            redirect('panel/Digikala/index');
            
         }else {
             redirect('panel/Digikala/index');
         }
 





    }



}



