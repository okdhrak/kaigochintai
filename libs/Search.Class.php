<?php
/**
 * 
 *
 * @author Hiroaki Okada <okada@sfit.co.jp>
 */

class SearchClass
{
	public $articles;
	
	public function __construct()
	{
	}
		
	public function setArticles()
	{
		if (file_exists(ROOT_DIR . '/libs/article.xml')) {
			$obj = simplexml_load_file(ROOT_DIR . '/libs/article.xml');
			
			$obj = (array)$obj;
			$obj = $obj['article'];
			
			for ($i=0; $i < count($obj); $i++) {
				$arr['article'][$i] = (array)$obj[$i];
				
				foreach ($arr['article'][$i] as $key => $val) {
					$arr['article'][$i][$key] = (array)$val;
				}
			}
			
			$this->articles = $arr;
			
			//XMLオブジェクトを配列に変換 ※PHPのバージョンが古く使えない
			//$this->articles = json_decode(json_encode($xml), true);
		} else {
			exit('データの取得に失敗しました');
		}
	}
	
	public function getArticles()
	{
		$this->setArticles();
		
		return $this->articles;
	}
	
}

//インスタンスの作成
$searchObj = new SearchClass;
