v<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Scraper_helper {

	

	public static function Scraper_price($dkp,$selector)
	{

		$target_url = "https://www.digikala.com/product/".$dkp;
		$html = new simple_html_dom();
		$html->load_file($target_url);
		foreach($html->find($selector) as $result)
		{
			echo $result->innertext;
		}
	}

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
