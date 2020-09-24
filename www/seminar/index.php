<?php
/*
 * kaigochintai.com Application
 * 
 * seminar/index.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => 'セミナー情報',
	'keyword' => '介護賃貸,セミナー,個別相談,介護施設,土地活用,不動産活用,S-FIT,sfit,エスフィット,紫原',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。定期的に開催している「介護賃貸」のセミナー情報です。セミナー終了後は個別相談もお受けいたします、お気軽にご相談ください。'
));
$smarty->assign('menus', $baseParam->getMenu('Seminar'));

$smarty->display('seminar/index.tpl');
