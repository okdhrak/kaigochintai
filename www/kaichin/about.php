<?php
/*
 * kaigochintai.com Application
 * 
 * kaichin/about.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => 'なぜ今介護賃貸？',
	'keyword' => '介護賃貸,介護施設,超高齢社会,家賃収入,一括借り上げ,空室,土地活用,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。介護施設運営は、少子高齢化を背景に、ニューズが急増中。事業者様による多くの需要が見込めます。ロケーションを選ばず、賃料固定の長期一括借り上げにより、安定した賃貸経営が望めます。'
));
$smarty->assign('menus', $baseParam->getMenu('Kaichin'));

$smarty->display('kaichin/about.tpl');
