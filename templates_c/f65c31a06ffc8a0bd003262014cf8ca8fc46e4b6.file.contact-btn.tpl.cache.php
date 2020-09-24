<?php /* Smarty version Smarty-3.1.12, created on 2016-10-17 15:14:45
         compiled from "C:\xampp\htdocs\kaigochintai\templates\common\contact-btn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2571658046c55238da4-22759058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f65c31a06ffc8a0bd003262014cf8ca8fc46e4b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kaigochintai\\templates\\common\\contact-btn.tpl',
      1 => 1448007482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2571658046c55238da4-22759058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kind' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58046c5528ae29_22057637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58046c5528ae29_22057637')) {function content_58046c5528ae29_22057637($_smarty_tpl) {?><!-- [ contact-btn ] -->
<div class="contact-btn">
	<p class="frame">
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['kind']->value)===null||$tmp==='' ? '' : $tmp)==='gis'){?>
			<a href="https://www.sfit.co.jp/kaigochintai/contact/" target="_blank"><img src="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/image/common/contact_btn_gis.png" width="674" height="50" alt="GISマーケティングレポートの請求はこちらから。"></a>
		<?php }else{ ?>
			<a href="https://www.sfit.co.jp/kaigochintai/contact/" target="_blank"><img src="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/image/common/contact_btn.png" width="674" height="50" alt="詳しい資料の請求・お問い合わせはこちらから"></a>
		<?php }?>
	</p>
</div><!-- [ /contact-btn ] -->
<?php }} ?>