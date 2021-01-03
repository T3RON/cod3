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
        $this->load->helper('url');
		$this->load->helper('Scraper_helper');
		$this->load->model('MY_Model');

    }

    function index()
    {

        $output['products'] = $this->MY_Model->select_limit_orderby('products',7,'date','DESC');
        $output['sub_cate'] = $this->MY_Model->select('sub_cate');
        $output['cate'] = $this->MY_Model->select('cate');

        $this->load->view('panel/Digikala',$output);
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
        $products_price = 'div.c-product__seller-price-pure.js-price-value';



        $dkp = "dkp-".$this->input->post('products_code');
        $tag = "digikala";
        // $tag = $this->input->post('products_tag');
        $url = 'https://www.digikala.com/product/'.$dkp;
        $products_url = 'https://affstat.adro.co/click/a135cd72-06eb-4008-8903-9afa1da33e12/'.base64_encode('https://www.digikala.com/product/'.$dkp);

		//Scraper_helper::download_page($dkp,$tag,$url);
		$data = array(
			'products_code' => $dkp,
			'products_tag' => $tag,
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
        Scraper_helper::Scraper_price($dkp,$products_price,'products_price','products','products_code');
        

        if ($result) {
           
            redirect('panel/Digikala/index');
            
         }else {
             redirect('panel/Digikala/index');
         }
 





    }

    function get_sub_cate() {
        $cate_id = $this->input->post('id',TRUE);
        $data = $this->MY_Model->select_single_where('sub_cate','cate',$cate_id);
        echo json_encode($data);
    }

    function delete () { 
        $id = $this->uri->segment(4);
        $result= $this->MY_Model->delete('products',$id);
        if ($result) {
            redirect('panel/Digikala/index');
         }else {
             redirect('panel/Digikala/index');
         }
    }



}



