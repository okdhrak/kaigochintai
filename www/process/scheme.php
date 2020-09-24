<?php
/*
 * kaigochintai.com Application
 * 
 * process/index.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => 'スキーム・チーム紹介',
	'keyword' => '介護賃貸,一括借り上げ,賃料固定,強み,介護施設,高齢社会,土地活用,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。介護賃貸に専門知識は必要ありません。介護施設支援実績は100件超え、専門知識を備えた専門スタッフが全面的にサポートいたします。お気軽にご相談ください。'
));
$smarty->assign('menus', $baseParam->getMenu('Process'));

$smarty->display('process/scheme.tpl');
