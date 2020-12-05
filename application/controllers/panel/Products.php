<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 07/04/2019
 * Time: 04:13 AM
 */

class Products extends CI_Controller {

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

    function insert () {
        $data = array(
            'products_code' => 'dkp-'.$this->input->post('products_code'),
            'status_id' =>$this->input->post('status_id')
        );

        $dkp = $this->input->post('products_code');
        Scraper_helper::download_page($dkp);

 

        $result = $this->MY_Model->insert($this->tbl_name,$data);
        if ($result) {
           
           redirect('panel/Products/index');
           
        }else {
            redirect('panel/Products/index');
        }


    }



}