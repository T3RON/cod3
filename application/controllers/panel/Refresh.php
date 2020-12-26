<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Refresh extends CI_Controller {

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

        $output['products'] = $this->MY_Model->select('products');

        $this->load->view('panel/Digikala',$output);
    }

    function update () {

        $products_price = 'div.c-product__seller-price-pure.js-price-value';
        $products = $this->MY_Model->select('products');

        foreach($products as $products_value) { 

            $dkp = $products_value->products_code;
            Scraper_helper::Scraper_site($dkp,$products_price,'products_price','products','products_code');
            echo $products_value->products_title . "    [Updated]"."<br>";
        }

    }

    function delete () { 
        $id = $this->uri->segment(3);
        $result= $this->MY_Model->delete('products');
        if ($result) {
            redirect('panel/Digikala/index');
         }else {
             redirect('panel/Digikala/index');
         }
    }



}



