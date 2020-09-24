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
	'pageTitle' => 'よくある質問 Q&A',
	'keyword' => '介護賃貸,介護,事業者,賃料,原状回復,借り上げ,期間,施工費,土地活用,sfit,エスフィット',
	'description' => '介護賃貸は、株式会社S-FIT(エスフィット)がご提案するこれからの新しい土地活用です。介護施設の運用って難しそう…。そういった、多くのオーナー様が抱える疑問や不安にお答えします。'
));
$smarty->assign('menus', $baseParam->getMenu('Process'));

$smarty->display('process/question.tpl');
