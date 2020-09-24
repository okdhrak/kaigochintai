<?php
/*
 * kaigochintai.com Application
 * 
 * cace/list_heiyou.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');
include_once(ROOT_DIR . '/libs/Search.Class.php');

//物件データの取得
$articles = $searchObj->getArticles();

$smarty->assign(array(
	'pageTitle' => '事例紹介(介護賃貸併用)',
	'keyword' => '介護賃貸,施工事例,介護賃貸併用住宅,S-FIT,sfit,エスフィット,紫原',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。エスフィットシニアチームで手掛けた事例をご紹介しております。'
));
$smarty->assign('menus', $baseParam->getMenu('Other'));
$smarty->assign('articles', $articles['article']);

$smarty->display('case/list_group.tpl');
