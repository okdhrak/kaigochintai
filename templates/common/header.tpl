<!DOCTYPE html>
<!-- Git! -->
<html lang="ja">
<head>
<meta charset="utf-8">
<title>{{#commonTitle#}}{{$pageTitle|escape|default:'これからの新しい土地活用'}}</title>
<meta name="keywords" content="{{$keyword|escape|default:''}}">
<meta name="description" content="{{$description|escape|default:''}}">

<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<link rel="stylesheet" href="{{#base_url#}}/css/common.css">
<link rel="stylesheet" href="{{#base_url#}}/css/base.css">

<link type="text/css" href="{{#base_url#}}/css/bxslider.css" rel="stylesheet" media="all">
<script type="text/javascript" src="{{#base_url#}}/js/jquery.js"> </script>
<script type="text/javascript" src="{{#base_url#}}/js/jquery.easing-1.3.js"> </script>
<script type="text/javascript" src="{{#base_url#}}/js/jquery.bxslider.js"> </script>
<script type="text/javascript" src="{{#base_url#}}/js/jquery.marquee.js"> </script>
<script type="text/javascript">
$(function(){
	$('#slider').bxSlider({
		auto: true,
		pause: 10000,
		speed: 1000,
		pager: true,
		displaySlideQty: 1,
		moveSlideQty: 1,
		autoHover: true
	});
});
</script>

<link rel="stylesheet" type="text/css" href="{{#base_url#}}/lib/shadowbox/shadowbox.css" />
<script type="text/javascript" src="{{#base_url#}}/lib/shadowbox/shadowbox.js"> </script>
<script type="text/javascript">
Shadowbox.init({
	language: 'ja',
	players:  ['img', 'html', 'iframe', 'qt', 'wmp', 'swf', 'flv'],
	resizeDuration: 0.35,
	fadeDuration: 0.0
});
</script>

<script type="text/javascript" src="{{#base_url#}}/js/base.js"> </script>
</head>

{{*$smarty.server.WEB_APP_ENV*}}

<body>
<!-- [ wrapper ] -->
<div id="wrapper">

<!-- [ header ] -->
<div id="header" style="position: relative; z-index:1;"><!-- このエレメントスタイルの指定はheader.tplのみ -->
	<div class="h-wrap">
		<!-- information -->
		<div id="topics">
			<ul id="list" class="list">
				<li><span>2016/12/22</span><a href="javascript:;">12月27日(火)～2017年1月3日(火)まで休業とさせていただきます。何卒、宜しくお願い申し上げます。</a></li>
				<li><span>2016/10/12</span><a href="javascript:;">誠に勝手ながら10月18日(火)～20日(木)まで社内研修の為、休業とさせていただきます。</a></li>
				<li><span>2015/12/24</span><a href="javascript:;">12月27日(日)～2016年1月3日(日)まで休業とさせていただきます。何卒、宜しくお願い申し上げます。</a></li>
				<li><span>2015/12/01</span><a href="{{#base_url#}}/case/">事例紹介ページを更新しました。</a></li>
				<li><span>2015/11/20</span><a href="{{#base_url#}}/interview/">オーナーインタビューページを更新しました。</a></li>
				<li><span>2015/11/18</span><a href="{{#base_url#}}/seminar/">11月開催のセミナー情報を更新しました。</a></li>
				<li><span>2015/10/10</span><a href="javascript:;">誠に勝手ながら10月21日(水)～23日(金)まで社外研修の為、休業とさせていただきます。</a></li>
				<li><span>2015/06/25</span><a href="http://www.sfit-care.co.jp/" target="_blank">デイサービスを運営する「株式会社 S-FITケア」のサイトをオープンしました。</a></li>
				{{*<li><span>2015/03/01</span><a href="{{#base_url#}}/marketing/">【期間限定】商圏調査無料キャンペーン中！</a></li>*}}
				<li><span>2014/12/18</span><a href="{{#base_url#}}/information/">年末年始休業のお知らせ</a></li>
				<li><span>2014/12/09</span><a href="{{#base_url#}}/information/">本社移転に伴う休業のお知らせ</a></li>
				<li><span>2013/09/18</span><a href="{{#base_url#}}/information/">テレビ東京系列「WBS ワールドビジネスサテライト」特集で【介護賃貸】が取り上げられました。</a></li>
				{{*<li><span>2014/10/06</span><a href="javascript:;">誠に勝手ながら10月20日(月)～22(水)まで社外研修の為、休業とさせていただきます。</a></li>*}}
				{{*<li><span>2014/05/19</span><a href="{{#base_url#}}/seminar/">セミナー情報 5月30日～6月1日「朝日 住まいづくりフェア2014」リフォーム＆リノベーションEXPO</a></li>*}}
			</ul>
		</div>
		<!-- /information -->

		<div class="clearfix top">
			<h2><a href="{{#base_url#}}"><img src="{{#base_url#}}/image/common/header/logo.png" width="241" height="39" alt="介護賃貸"></a></h2>
			<h1>介護賃貸のことがよくわかる！<br>S-FITの介護賃貸情報サイト</h1>
			<div class="contact">
				<p class="btn"><a href="https://www.sfit.co.jp/kaigochintai/contact/" target="_blank"><img src="{{#base_url#}}/image/common/header/contant_btn.png" width="151" height="35" alt="お問い合せ"></a></p>
			</div>
		</div>

		{{include file="common/header-menuButton.tpl"}}
	</div>
</div><!-- [ /header ] -->
