<?php
/*
 * kaigochintai.com Application
 * 
 * marketing/index.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => 'GISマーケティングレポート',
	'keyword' => '介護賃貸,GIS,マーケティングレポート,商圏調査,アパート,マンション,サブリース,土地活用,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。『計画地の商圏調査をする事により、若者向けの賃貸住宅か高齢者向けの介護賃貸か、どのような方を対象とした賃貸経営が向いているのかを客観的に判断する事が可能ます。'
));
$smarty->assign('menus', $baseParam->getMenu('Marketing'));

$smarty->display('marketing/index.tpl');
