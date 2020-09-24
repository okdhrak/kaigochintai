<?php /* Smarty version Smarty-3.1.12, created on 2016-10-17 15:14:45
         compiled from "C:\xampp\htdocs\kaigochintai\templates\common\sidemenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1747958046c550ab644-36592591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebfd31aa5455294e4b024a4bfb131ab7f4474765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kaigochintai\\templates\\common\\sidemenu.tpl',
      1 => 1435630009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1747958046c550ab644-36592591',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'menus' => 0,
    'i' => 0,
    'mid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58046c551e8c69_60713135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58046c551e8c69_60713135')) {function content_58046c551e8c69_60713135($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_image')) include 'C:\\xampp\\htdocs\\kaigochintai\\libs\\plugins\\function.html_image.php';
?><!-- [ sidemenu[service] ] -->
<div class="frame <?php echo $_smarty_tpl->tpl_vars['category']->value;?>
">
	<ul>
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['mid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['mid']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value['script_file'];?>
<?php $_tmp1=ob_get_clean();?><?php if (preg_match('/^https:\/\//',$_tmp1)==true){?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['script_file'];?>
" class="menu<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['height'];?>
 line-<?php echo $_smarty_tpl->tpl_vars['i']->value['line'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['text'];?>
</a></li>
			<?php }else{ ?>
				<li><a href="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['script_file'];?>
" class="menu<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['height'];?>
 line-<?php echo $_smarty_tpl->tpl_vars['i']->value['line'];?>
 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value['script_file'];?>
<?php $_tmp2=ob_get_clean();?><?php if (strpos($_SERVER['SCRIPT_FILENAME'],$_tmp2)==true){?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['i']->value['text'];?>
</a></li>
			<?php }?>
		<?php } ?>
	</ul>
</div>

<div class="frame mt25">
	<p class="to-top"><a href="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
">トップページへ</a></p>
</div>

<div class="mt25">
	<a href="http://www.sfit-care.co.jp/" target="_blank"><?php echo smarty_function_html_image(array('class'=>"opacity",'style'=>'','file'=>"/image/common/other/sfitcare.png",'alt'=>"S-FITケア"),$_smarty_tpl);?>
</a>
</div><!-- [ /sidemenu[service] ] -->
<?php }} ?>