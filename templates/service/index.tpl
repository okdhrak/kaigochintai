{{config_load file="base.conf" section="service"}}
{{include file="common/header_lower.tpl"}}

<!-- [ content ] -->
<div id="content">
	<div class="clearfix c-wrap contService">
		<div class="sidemenu">
			{{include file="common/sidemenu.tpl" category='service'}}
		</div>
		
		<div class="mainarea contService index">
			<div class="headline">
				<h2><img src="{{#base_url#}}/image/service/index/title.png" alt="土地活用のご案内" width="700" height="90"></h2>
				<p class="b-text">介護施設は規模によって様々な種類があります。<br>あなたの土地や希望に合わせた活用方法の一例をご紹介します。<br>S-FITは下記以外の土地サイズ、サービスについてもご提案が可能です。<br>ぜひお気軽にご相談ください。</p>
			</div>
			
			<div class="to-home">
				<div class="clearfix bg">
					<div class="btn-bg">
						<p><a href="{{#base_url#}}/service/home/"><img src="{{#base_url#}}/image/service/index/to_home_button.png" width="255" height="30" alt="介護施設の種類を見る"></a></p>
					</div>
				</div>
			</div>
			
			<div class="column mt50">
				<h3><img src="{{#base_url#}}/image/service/index/s_title.png" width="395" height="29"></h3>
				
				<div class="column-shadow">
					<ul class="clearfix">
						<li style="padding-bottom:25px; border-bottom:solid #CCCCCC 1px; padding-right:24px;">
							<h4><img src="{{#base_url#}}/image/service/index/list_title_70.png" width="300" height="30" alt="70～150坪"></h4>
							<p><img src="{{#base_url#}}/image/service/index/list_image_70.png" width="300" height="100" alt="70～150坪 イメージ"></p>
							<p><img src="{{#base_url#}}/image/service/index/list_text_70.png" width="272" height="19" alt="少人数でアットホームな空間"></p>
							<ul>
								<li>デイサービス</li>
								<li>小規模多機能 他</li>
							</ul>
							<p class="btn"><a href="{{#base_url#}}/service/from70.php"><img src="{{#base_url#}}/image/service/index/to_detail_btn.png" width="115" height="30" alt="お問い合わせ"></a></p>
						</li>
						<li style="padding-bottom:25px; border-left:solid #CCCCCC 1px; border-bottom:solid #CCCCCC 1px; padding-left:25px;">
							<h4><img src="{{#base_url#}}/image/service/index/list_title_150.png" width="300" height="30" alt="150～250坪"></h4>
							<p><img src="{{#base_url#}}/image/service/index/list_image_150.png" width="300" height="100" alt="150～250坪 イメージ"></p>
							<p><img src="{{#base_url#}}/image/service/index/list_text_150.png" width="258" height="19" alt="被介護者にも喜ばれる"></p>
							<ul>
								<li>グループホーム</li>
								<li>ショートステイ</li>
							</ul>
							<p class="btn"><a href="{{#base_url#}}/service/from150.php"><img src="{{#base_url#}}/image/service/index/to_detail_btn.png" width="115" height="30" alt="お問い合わせ"></a></p>
						</li>
						<li style="padding-bottom:25px; padding-right:24px; padding-top:25px;">
							<h4><img src="{{#base_url#}}/image/service/index/list_title_250.png" width="300" height="30" alt="250～400坪"></h4>
							<p><img src="{{#base_url#}}/image/service/index/list_image_250.png" width="300" height="100" alt="250～400坪 イメージ"></p>
							<p><img src="{{#base_url#}}/image/service/index/list_text_250.png" width="231" height="20" alt="穏やかな老後生活を提供"></p>
							<ul>
								<li>サービス付き高齢者向け住宅</li>
								<li>デイサービス＋グループホーム</li>
								<li>デイサービス＋サービス付き高齢者向け住宅 他</li>
							</ul>
							<p class="btn"><a href="{{#base_url#}}/service/from250.php"><img src="{{#base_url#}}/image/service/index/to_detail_btn.png" width="115" height="30" alt="お問い合わせ"></a></p>
						</li>
						<li style="padding-bottom:25px; border-left:solid #CCCCCC 1px; padding-left:25px; padding-top:25px;">
							<h4><img src="{{#base_url#}}/image/service/index/list_title_400.png" width="300" height="30" alt="400坪～"></h4>
							<p><img src="{{#base_url#}}/image/service/index/list_image_400.png" width="300" height="100" alt="400坪～ イメージ"></p>
							<p><img src="{{#base_url#}}/image/service/index/list_text_400.png" width="210" height="20" alt="将来の安定・理想の賃貸"></p>
							<ul>
								<li>サービス付き高齢者向け住宅</li>
								<li>有料老人ホーム</li>
								<li>デイサービス＋サービス付き高齢者向け住宅 他</li>
							</ul>
							<p class="btn"><a href="{{#base_url#}}/service/from400.php"><img src="{{#base_url#}}/image/service/index/to_detail_btn.png" width="115" height="30" alt="お問い合わせ"></a></p>
						</li>
					</ul>
				</div>
			</div>
			
			{{include file="common/contact-btn.tpl"}}
		</div>
	</div>
</div><!-- [ /content ] -->

{{include file="common/b-menu.tpl"}}
{{include file="common/footer.tpl"}}
