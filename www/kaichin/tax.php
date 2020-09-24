<?php
/*
 * kaigochintai.com Application
 * 
 * service/index.php
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/../libs/config.inc.php');
include_once(ROOT_DIR . '/libs/MySmarty.class.php');
include_once(ROOT_DIR . '/libs/param.inc.php');

$smarty->assign(array(
	'pageTitle' => '相続税・節税対策について',
	'keyword' => '介護賃貸,相続税,節税対策,控除,シュミレーション,土地活用,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。相続税法の改正を目前に、新相続税に対する対策が急がれます。さらなる相続税負担に対しては、高齢者施設ならではの優遇処置が節税対策に有効です。'
));
$smarty->assign('menus', $baseParam->getMenu('Kaichin'));

$smarty->display('kaichin/tax.tpl');
