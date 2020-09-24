<?php
/**
 * パラメータの初期化
 *
 * @author Hiroaki Okada <okada@sfit.co.jp>
 */

class Config
{
	public function __construct()
	{
		//環境変数の読み込み
		$env = $_SERVER['WEB_APP_ENV'];
		
		switch ($env) {
			case 'localhost':
				define('ROOT_DIR', 'C:/xampp/htdocs/kaigochintai');
				break;
			case 'stage':
				define('ROOT_DIR', '/home/stage.kaigochintai.com/public_html');
				break;
			case 'production':
				define('ROOT_DIR', '/home/kaigochintai.com/public_html');
				break;
			default:
			break;
		}
	}	
}

//インスタンスの作成
$config = new Config;
