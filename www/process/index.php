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
	'pageTitle' => '手続き・業務について / 土地活用の流れ・ご契約手続き',
	'keyword' => '介護賃貸,土地活用,契約手続き,流れ,フロー,土地活用,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。エスフィットによる一括借り上げシステムと、われわれの幅広い介護事業者とのネットワークを駆使し、プランのご提案から施工まで全面サポートいたします。専門的な知識は不要、安心してお任せください。'
));
$smarty->assign('menus', $baseParam->getMenu('Process'));

$smarty->display('process/index.tpl');
