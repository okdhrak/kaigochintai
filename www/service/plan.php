<?php
/*
 * kaigochintai.com Application
 * 
 * service/plan.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => '他の土地活用プラン',
	'keyword' => '介護賃貸,土地活用,賃貸,売買,介護物件,アパート,マンション,リノベーション,ペット可,法人営業',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。われわれの可能な提案は介護事業だけではありません。オーナー様の抱える問題点を把握した上、総合力を活かした最適な解決方法を導きます。'
));
$smarty->assign('menus', $baseParam->getMenu('Service'));

$smarty->display('service/plan.tpl');
