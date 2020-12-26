<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Scraper_helper {

	

	public static function Scraper_price($dkp,$selector)
	{

		$target_url = "https://www.digikala.com/product/".$dkp;
		$html = new simple_html_dom();
		$html->load_file($target_url);    
		
		$var = $html->find($selector,0);

		if(isset($var)) {
			foreach($html->find($selector) as $result)
			{
				

				echo $result->innertext .  ' تومان';
			
			}
		} else{
			echo "ناموجود";
		}
	
	}
	
	public static function Scraper_off($dkp,$selector)
	{

		$target_url = "https://www.digikala.com/product/".$dkp;
		$html = new simple_html_dom();
		$html->load_file($target_url);    
		
			foreach($html->find($selector) as $result)
		{
			echo $result->innertext;
		
		}
	
	}
	// echo strlen(Scraper_helper::Scraper_price($products_value->products_code,'div[class=c-product__seller-price-pure js-price-value]'));

	public static function Scraper_site($dkp,$selector,$field,$table,$where)
	{
		$CI =& get_instance();
		$target_url = "https://www.digikala.com/product/".$dkp;
		$html = new simple_html_dom();
		$html->load_file($target_url);
		foreach($html->find($selector) as $result)
		{
			
			$data = array(
				$field => $result->innertext
			);
	
			$CI->MY_Model->update($table,$where,$dkp,$data);
	
		}
	}	
	
	public static function meta_site($dkp,$selector,$field,$table,$where)
	{
		$CI =& get_instance();
		$target_url = "https://www.digikala.com/product/".$dkp;
		$html = new simple_html_dom();
		$html->load_file($target_url);
		foreach($html->find($selector) as $result)
		{
			
			$data = array(
				$field => $result->getAttribute('content')
			);
	
			$CI->MY_Model->update($table,$where,$dkp,$data);
	
		}
	}

	public static function Scraper_img_site($dkp,$selector,$field,$table,$where)
	{
		$CI =& get_instance();
		$target_url = "https://www.digikala.com/product/".$dkp;
		$html = new simple_html_dom();
		$html->load_file($target_url);
		foreach($html->find($selector) as $result)
		{
			$data = array(
				$field => $result->getAttribute('data-src')
			);
	
			$CI->MY_Model->update($table,$where,$dkp,$data);
	
		}
	}

	// public static function Scraper_img_digikala($dkp,$selector,$attr)
	// {
	// 	$target_url = base_url()."Pages/digikala/".$dkp.".html";
	// 	$html = new simple_html_dom();
	// 	$html->load_file($target_url);
	// 	foreach($html->find($selector) as $result)
	// 	{
	// 		$result->getAllAttributes();
	// 		echo $result->attr[$attr];
	// 	}
	// }

	public static function download_page($dkp,$tag,$url)
	{

		$folder_path = "Pages/".$tag."/";
		$data_page = file_get_contents($url);
		$filename = $dkp.".html";
		$fh = fopen($folder_path . DIRECTORY_SEPARATOR . $filename, "w");
		fwrite($fh, $data_page);
		fclose($fh);
	}
}