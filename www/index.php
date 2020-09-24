<?php
/*
 * kaigochintai.com Application
 * 
 * index
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');

//$smarty->force_compile = true;
//$smarty->debugging = false;
//$smarty->caching = true;
//$smarty->cache_lifetime = 120;//秒

$smarty->assign(array(
	'pageTitle' => 'これからの新しい土地活用',
	'keyword' => '介護賃貸,賃貸併用住宅,デイサービス,ショートステイ,有料老人ホーム,土地活用,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。土地の大きさとエリアに合わせた最適な介護施設をご提案いたします。アパート・マンション経営による空室リスクを解消し、安定した不動産活用を介護賃貸が実現致します。'
));

$smarty->display('index.tpl');
