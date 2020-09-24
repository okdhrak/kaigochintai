/*======================================================
初期設定
======================================================*/
var offsetTop = '';
var scrollSpeed = 1000;

// IE9.js適用
var IE7_PNG_SUFFIX = ".png";


/*======================================================
トップページ噴出しのポジション調整
======================================================*/
$(function(){
	var w = $(window).width();
	var leftPx = ((w - 1000) / 2) + 815;
	$(".nextSeminer").css({left:leftPx/*, top:10*/});
	//console.log(leftPx);
	
	$(window).resize(function(){
		var w = $(window).width();
		var leftPx = ((w - 1000) / 2) + 815;
		$(".nextSeminer").css({left:leftPx/*, top:10*/});
	});
});


/*======================================================
ロールオーバー半調処理
======================================================*/
$(function(){
	$("#header div.contact a img, ul#slider li ul li, ul#slider a img, .mainarea a img, #footer a").hover(function(){
		$(this).stop(true, true).fadeTo("normal", 0.7);
	},function(){
		$(this).stop(true, true).fadeTo("normal", 1.0);
	});
});


/*======================================================
トピックスのスクロール
======================================================*/
$(function(){
	if($("#list").length){
		$("#list").marquee({yScroll: "bottom"});
	}
});

var iNewMessageCount = 0;
function addMessage(selector){
	iNewMessageCount++;
	var $ul = $(selector).append("<li>New message #" + iNewMessageCount + "</li>");
	// update the marquee
	$ul.marquee("update");
}
function pause(selector){
	$(selector).marquee('pause');
}
function resume(selector){
	$(selector).marquee('resume');
}
