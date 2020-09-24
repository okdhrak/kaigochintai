/*======================================================
初期設定
======================================================*/
var offsetTop = '';
var scrollSpeed = 1000;

// IE9.js適用
var IE7_PNG_SUFFIX = ".png";


// フェードイン
$(function(){
	var $navi = $('#top_navi');
	var isHidden = true;
	
	// デフォルトは非表示
	$navi.hide();
	
	$(window).scroll(function(){
		if($(this).scrollTop() > 500) {
			if(isHidden) {
				$navi.stop(true,true).fadeIn();
				isHidden = false;
			}
		} else {
			if(!isHidden) {
				$navi.stop(true,true).fadeOut();
				isHidden = true;
			}
		}
	});
});

// ロールオーバー
$(function(){
	$("a img").hover(function(){
		$(this).stop(true, true).fadeTo("normal", 0.7);
	},function(){
		$(this).stop(true, true).fadeTo("normal", 1.0);
	});
});

// メニューボタンによるスクロール
function pageScroll(c_name){
	if (c_name == 'headline') {offsetTop = -20;} else {offsetTop = -70;}
	$.scrollTo('#main > .' + c_name, scrollSpeed, {easing:"easeInOutQuart",offset:{left: 0, top: offsetTop}});
}
