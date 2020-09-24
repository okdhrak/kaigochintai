<?php
/*
 * kaigochintai.com Application
 * 
 * service/method.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => '他の土地活用比較・比較表',
	'keyword' => '介護賃貸,土地活用,比較,アパート,マンション,駐車場,戸建て,低投資,将来性,安定性,高齢社会',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。少子高齢化に伴い、アパートやマンションといった従来の賃貸経営は、空室率の上昇に伴う空室リスクが避けられなくなっています。また車離れが騒がれるなか、駐車場経営についても将来性に不安が残ります。介護賃貸は、エリアを選ばす、低投資と安定収入が望める少子高齢社会に最適な土地活用方法です。'
));
$smarty->assign('menus', $baseParam->getMenu('Service'));

$smarty->display('service/method.tpl');
