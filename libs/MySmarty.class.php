<?php
//親クラスの読み込み
require_once(ROOT_DIR . '/libs/Smarty.class.php');

class MySmarty extends Smarty
{
	public $debugging = false;
	public $caching = true;
	public $cache_lifetime = 120;
	
	public function __construct(){
		//$this->Smarty();//バージョンアップに伴うエラー
		parent::__construct();
		$this->template_dir = ROOT_DIR . '/templates/';
		$this->compile_dir = ROOT_DIR . '/templates_c/';
		$this->config_dir = ROOT_DIR . '/configs/';
		$this->cache_dir = ROOT_DIR . '/cache/';
		
		$this->left_delimiter = '{{';
		$this->right_delimiter = '}}';
	}
}

//インスタンスの作成
$smarty = new MySmarty;
