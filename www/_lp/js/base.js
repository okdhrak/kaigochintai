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

