{{config_load file="base.conf" section="index"}}

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{{#commonTitle#}}{{$pageTitle|escape|default:'これからの新しい土地活用'}}</title>
<meta name="keywords" content="{{$keyword|escape|default:''}}">
<meta name="description" content="{{$description|escape|default:''}}">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Imagetoolbar" content="no">
<meta http-equiv="Content-Script-type" content="text/javascript">
<meta http-equiv="Content-Style-type" content="text/css">

<!--[if lt IE 9]> 
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<link rel="stylesheet" href="{{#base_url#}}/css/common.css">
<link rel="stylesheet" href="{{#base_url#}}/css/base.css">
<link rel="stylesheet" href="{{#base_url#}}/css/sidemenu.css">

<script type="text/javascript" src="{{#base_url#}}/js/jquery.js"> </script>
<script type="text/javascript" src="{{#base_url#}}/js/base.js"> </script>
</head>

<body>
<div style="background:url({{#base_url#}}/image/index/seminar/seminar_bg_20130414.png); background-repeat:no-repeat; width:957px; height:328px; margin:0 auto; position:relative;">
	<p style="position: absolute; left: 701px; top: 214px;"><a href="http://maps.google.co.jp/maps?q=%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%96%B0%E5%AE%BF%E5%8C%BA%E8%A5%BF%E6%96%B0%E5%AE%BF2-4-1&hl=ja&ie=UTF8&ll=35.689422,139.695497&spn=0.012565,0.021908&sll=35.673343,139.710388&sspn=0.402171,0.701065&brcurrent=3,0x60188cd4cfbaff57:0x12385d2a418fd33d,0&hnear=%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%96%B0%E5%AE%BF%E5%8C%BA%E8%A5%BF%E6%96%B0%E5%AE%BF%EF%BC%92%E4%B8%81%E7%9B%AE%EF%BC%94%E2%88%92%EF%BC%91&t=m&z=16" target="_blank"><img src="{{#base_url#}}/image/index/seminar/btn_map.png" width="83" height="28"></a></p>
	<p style="position: absolute; left: 601px; top: 214px;"><a href="http://www.owners-style.co.jp/event/" target="_blank"><img src="{{#base_url#}}/image/index/seminar/btn_site.png" width="84" height="28"></a></p>
</div>
</body>
</html>
