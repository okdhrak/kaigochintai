<?php /* Smarty version Smarty-3.1.12, created on 2016-12-22 16:48:38
         compiled from "C:\xampp\htdocs\kaigochintai\templates\company\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10074585b84c0654ac5-55752897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed9e13776c49d75959ade3138a3e2193d2f3314e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kaigochintai\\templates\\company\\index.tpl',
      1 => 1482392876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10074585b84c0654ac5-55752897',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_585b84c06ed043_64505569',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585b84c06ed043_64505569')) {function content_585b84c06ed043_64505569($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("base.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("service", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/header_lower.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<!-- [ content ] -->
<div id="content">
	<div class="clearfix c-wrap">
		<div class="sidemenu">
			<?php echo $_smarty_tpl->getSubTemplate ("common/sidemenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('category'=>'other'), 0);?>

		</div>
		
		<div class="mainarea contOther company">
			<div class="headline">
				<h2><img src="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/image/company/title.png" alt="会社案内" width="700" height="90"></h2>
				<p class="mt20"><img src="<?php echo $_smarty_tpl->getConfigVariable('base_url');?>
/image/company/logo.png" alt="株式会社S-FIT[エスフィット]" width="438" height="37"></p>
			</div>
			
			<div class="column">
				<table class="t-company" border="0" cellpadding="0" cellspacing="0" summary="company">
					<tr>
						<th>商号</th>
						<td>株式会社S-FIT [エスフィット]　英語表記 S-FIT CO.,LTD.</td>
					</tr>
					<tr>
						<th>屋号</th>
						<td>お部屋探しCAFE ヘヤギメ！</td>
					</tr>
					<tr>
						<th>本社</th>
						<td>〒106-6014 東京都港区六本木1-6-1 泉ガーデンタワー14F</td>
					</tr>
					<tr>
						<th>免許</th>
						<td>国土交通大臣(3) 第7352号　一級建築士事務所 東京都知事登録 第55878号</td>
					</tr>
					<tr>
						<th>所属団体</th>
						<td>(社)全日本不動産協会<br>(社)東京都不動産関連業協会 一般財団法人日本情報経済社会推進協会</td>
					</tr>
					<tr>
						<th>代表番号</th>
						<td>TEL : 03-5797-7030 / FAX : 03-5797-7031</td>
					</tr>
					<tr>
						<th>E-mail</th>
						<td>info@sfit.co.jp</td>
					</tr>
					<tr>
						<th>URL</th>
						<td>http://www.sfit.co.jp/</td>
					</tr>
					<tr>
						<th>設立</th>
						<td>2003年6月19日</td>
					</tr>
					<tr>
						<th>事業内容</th>
						<td>不動産賃貸仲介事業<br>プロパティマネジメント事業<br>不動産売買仲介事業<br>介護賃貸事業<br>リノベーション事業<br>海外投資家向け事業</td>
					</tr>
					<tr>
						<th>資本金</th>
						<td>1億2750万円</td>
					</tr>
					<tr>
						<th>代表者</th>
						<td>代表取締役社長 紫原友規</td>
					</tr>
					<tr>
						<th>グループ会社</th>
						<td>株式会社S-FITパートナーズ<br>株式会社S-FITケア<br>喜飛特不動產股份有限公司(台湾)</td>
					</tr>
					<tr>
						<th>支店</th>
						<td>直営11店舗<br>[ 東京都 ] 渋谷店・新宿店・目黒店・六本木店・御茶ノ水店・門前仲町店・下北沢店・高円寺店・池袋店・阿佐ヶ谷店<br>[ 神奈川県 ] 川崎店<br><br>FC1店舗<br>[ 千葉県 ] 松戸店<br><br>法人営業部9支店<br>[ 東京都 ] 渋谷支店・東京駅前支店・品川支店<br>[ 神奈川県 ] 横浜支店<br>[ 千葉県 ] 千葉支店<br>[ 愛知県 ] 名古屋支店<br>[ 大阪府 ] 新大阪支店・梅田支店<br>[ 福岡県 ] 福岡支店</td>
					</tr>
				</table>
			</div>
			
			<?php echo $_smarty_tpl->getSubTemplate ("common/contact-btn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

		</div>
	</div>
</div><!-- [ /content ] -->

<?php echo $_smarty_tpl->getSubTemplate ("common/b-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>