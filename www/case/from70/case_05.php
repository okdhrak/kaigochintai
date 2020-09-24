<?php
/*
 * kaigochintai.com Application
 * 
 * service/from70.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => '事例紹介：介護賃貸併用住宅',
	'keyword' => '介護賃貸,介護施設,土地活用,デイサービス,70坪からの土地活用',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。70～150坪の大きさの土地をお持ちの方へ、S-FITで過去にご提案させていただいたプランの一例をご紹介いたします。ご紹介するプラン以外にも、オーナー様の土地やご希望に沿ったプランをご提案させていただきますので、お気軽にご相談ください。'
));
$smarty->assign('menus', $baseParam->getMenu('Other'));

$smarty->display('case/from70/case_05.tpl');
