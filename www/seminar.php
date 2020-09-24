<?php
/*
 * kaigochintai.com Application

 * seminar
 */

$env = $_SERVER['WEB_APP_ENV'];

switch ($env) {
	case 'localhost':
		define("ROOT_DIR", "C:/xampp/htdocs/kaigochintai");
		break;
	case 'stage':
		define("ROOT_DIR", "/home/homepage/public_html/kaigo-chintai/stage");
		break;
	case 'production':
		define("ROOT_DIR", "/home/homepage/public_html/kaigo-chintai/www");
		break;
	default:
	break;
}

require(ROOT_DIR . "/libs/MySmarty.class.php");

$smarty = new MySmarty;

$smarty->assign(array(
	'pageTitle' => 'セミナー情報',
	'keyword' => '',
	'description' => ''
));

$smarty->display('seminar.tpl');
?>
