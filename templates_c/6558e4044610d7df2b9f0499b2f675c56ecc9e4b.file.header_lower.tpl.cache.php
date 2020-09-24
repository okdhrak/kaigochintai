<?php /* Smarty version Smarty-3.1.12, created on 2016-10-17 15:14:45
         compiled from "C:\xampp\htdocs\kaigochintai\templates\common\header_lower.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1728658046c5503b165-63993482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6558e4044610d7df2b9f0499b2f675c56ecc9e4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kaigochintai\\templates\\common\\header_lower.tpl',
      1 => 1406186275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1728658046c5503b165-63993482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'keyword' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58046c55097dc3_85899209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58046c55097dc3_85899209')) {function content_58046c55097dc3_85899209($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title><?php echo $_smarty_tpl->getConfigVariable('commonTitle');?>
<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['pageTitle']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? 'これからの新しい土地活用' : $tmp);?>
</title>
<meta name="keywords" content="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
<meta name="description" content="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">

<!--[if lt IE 9]> 
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/css/common.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/css/base.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/css/sidemenu.css">

<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/js/jquery.js"> </script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/js/base.js"> </script>
</head>

<body>
<!-- [ wrapper ] -->
<div id="wrapper">

<!-- [ header ] -->
<div id="header">
	<div class="h-wrap">
		<div class="clearfix top">
			<h2><a href="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
"><img src="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/image/common/header/logo.png" width="241" height="39" alt="介護賃貸"></a></h2>
			<h1>介護賃貸のことがよくわかる！<br>S-FITの介護賃貸情報サイト</h1>
			<div class="contact">
				<p class="btn"><a href="https://www.sfit.co.jp/kaigochintai/contact/" target="_blank"><img src="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/image/common/header/contant_btn.png" width="151" height="35" alt="お問い合せ"></a></p>
			</div>
		</div>
		
		<?php echo $_smarty_tpl->getSubTemplate ("common/header-menuButton.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	</div>
</div><!-- [ /header ] --><?php }} ?>