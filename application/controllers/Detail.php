<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Detail extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('simple_html_dom');
		$this->load->helper('Scraper_helper');
        $this->load->model('MY_Model');
        $this->load->helper('url');

    }

    function index()
    {

        $output['cate'] = $this->MY_Model->get_categories();
        $products_id = $this->uri->segment(3);
        $output['products'] = $this->MY_Model->select_single('products',$products_id);




        $this->load->view('site/detail',$output);
    }



}