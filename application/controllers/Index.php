<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Index extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('simple_html_dom');
		$this->load->helper('Scraper_helper');
		$this->load->model('MY_Model');
    }

    function index()
    {

        $output['one_cate'] = $this->MY_Model->select('cate');
        $output['cate'] = $this->MY_Model->get_categories();
        $output['products'] = $this->MY_Model->select_orderby('products','date','DESC');


        $this->load->view('index',$output);
    }



}