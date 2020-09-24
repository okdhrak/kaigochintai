function MM_openBrWindow(theURL,winName,features) { //v2.0
	window.open(theURL,winName,features);
}

// scrollTop
$(function(){
	//クリックイベントの登録
	$('a#toPageTop').click(function(){
		//ページトップへスクロール
		$('html, body').animate({
			'scrollTop':0
		}, 700, 'easeInOutExpo');		
		//デフォルトイベントのキャンセル
		return false;
	});
});

// rollOver
$(function(){
	$(".alpha, header div.main div.menus ul li a").hover(function(){
		$(this).fadeTo("normal", 0.5);
	},function(){
		$(this).fadeTo("normal", 1.0);
	});
});

// tab_plan
$(function() {
	$("ul.plan_tab li:first a").addClass("selected");
	$("ul.plan_panel li:not(:first)").hide();
	$("ul.plan_tab  a").click(function(){
		if (!$(this).hasClass("selected")) {
			$("ul.plan_tab a.selected").removeClass("selected");
			$(this).addClass("selected");
			$("ul.plan_panel li").hide().filter($(this).attr("href")).show();
		}
		return false;
	});
});

// tab_style
$(function() {
	$("ul.style_tab li:first a").addClass("selected");
	$("ul.style_panel li:not(:first)").hide();
	$("ul.style_tab  a").click(function(){
		if (!$(this).hasClass("selected")) {
			$("ul.style_tab a.selected").removeClass("selected");
			$(this).addClass("selected");
			$("ul.style_panel li").hide().filter($(this).attr("href")).show();
		}
		return false;
	});
});

// ロールオーバーイメージ
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
