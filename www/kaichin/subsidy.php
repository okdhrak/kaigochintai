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
	'pageTitle' => '助成金について',
	'keyword' => '介護賃貸,介護施設,助成金,補助金,交付要件,土地活用,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。高齢者の住居の安定確保の推進を図る為、サービス付き高齢者向け住宅整備事業の要件を満たすと、建築主等(土地オーナー様)に建設工事費にかかる補助金が助成されます。'
));
$smarty->assign('menus', $baseParam->getMenu('Kaichin'));

$smarty->display('kaichin/subsidy.tpl');
