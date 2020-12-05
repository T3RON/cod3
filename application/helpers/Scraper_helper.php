<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Scraper_helper {



	public static function Scraper_price($dkp,$selector)
	{

		$target_url = "https://www.digikala.com/product/".$dkp;
		$html = new simple_html_dom();
		$html->load_file($target_url);
		foreach($html->find($selector) as $result)
		{
			echo $result;
		}
	}

	public static function Scraper_digikala($dkp,$selector)
	{

		$target_url = base_url()."Pages/digikala/".$dkp.".html";
		$html = new simple_html_dom();
		$html->load_file($target_url);
		foreach($html->find($selector) as $result)
		{
			echo $result;
		}
	}

	public static function Scraper_img_digikala($dkp,$selector,$attr)
	{
		$target_url = base_url()."Pages/digikala/".$dkp.".html";
		$html = new simple_html_dom();
		$html->load_file($target_url);
		foreach($html->find($selector) as $result)
		{
			$result->getAllAttributes();
			echo $result->attr[$attr];
		}
	}

	public static function download_page($dkp)
	{

		$folder_path = "Pages/digikala/";
		$url = "https://www.digikala.com/product/".$dkp;
		$data_page = file_get_contents($url);
		$filename = $dkp.".html";
		$fh = fopen($folder_path . DIRECTORY_SEPARATOR . $filename, "w");
		fwrite($fh, $data_page);
		fclose($fh);
	}
}
