<!DOCTYPE html>
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
<link rel="stylesheet" href="{{#base_url#}}/css/sidemenu.css">

<script type="text/javascript" src="{{#base_url#}}/js/jquery.js"> </script>
<script type="text/javascript" src="{{#base_url#}}/js/base.js"> </script>

<link rel="stylesheet" type="text/css" href="{{#base_url#}}/lib/adgallery/jquery.ad-gallery.css">
<script type="text/javascript" src="{{#base_url#}}/lib/adgallery/jquery.ad-gallery.js"> </script>
<script type="text/javascript">
	$(function() {
		var galleries = $('.ad-gallery, .ad-gallery-test'/*カンマで分けることによりクラスを追加可能*/).adGallery();
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
</head>

<body>
<!-- [ wrapper ] -->
<div id="wrapper">

<!-- [ header ] -->
<div id="header">
	<div class="h-wrap">
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