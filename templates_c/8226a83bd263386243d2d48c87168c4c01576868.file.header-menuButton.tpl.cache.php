<?php /* Smarty version Smarty-3.1.12, created on 2016-10-17 14:42:25
         compiled from "C:\xampp\htdocs\kaigochintai\templates\common\header-menuButton.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29972580464c19af026-41841815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8226a83bd263386243d2d48c87168c4c01576868' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kaigochintai\\templates\\common\\header-menuButton.tpl',
      1 => 1369373785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29972580464c19af026-41841815',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_580464c1a2df68_14914331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580464c1a2df68_14914331')) {function content_580464c1a2df68_14914331($_smarty_tpl) {?><ul class="clearfix menu">
	<li><a href="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/kaichin/" class="menu1 <?php if (strpos($_SERVER['SCRIPT_FILENAME'],'/kaichin/')==true){?>active<?php }?>">介護賃貸とは</a></li>
	<li><a href="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/service/" class="menu2 <?php if (strpos($_SERVER['SCRIPT_FILENAME'],'/service/')==true){?>active<?php }?>">不動産活用のご案内</a></li>
	<li><a href="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/process/" class="menu3 <?php if (strpos($_SERVER['SCRIPT_FILENAME'],'/process/')==true){?>active<?php }?>">手続き・業務について</a></li>
	<li><a href="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/seminar/" class="menu4 <?php if (strpos($_SERVER['SCRIPT_FILENAME'],'/seminar/')==true){?>active<?php }?>">セミナー情報</a></li>
	<li><a href="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/case/" class="menu5 <?php if (strpos($_SERVER['SCRIPT_FILENAME'],'/case/')==true){?>active<?php }?>">事例紹介</a></li>
	
</ul>
<?php }} ?>