{{config_load file="base.conf" section="service"}}
{{include file="common/header_lower.tpl"}}

<!-- [ content ] -->
<div id="content">
	<div class="clearfix c-wrap contService">
		<div class="sidemenu">
			{{include file="common/sidemenu.tpl" category='service'}}
		</div>
		
		<div class="mainarea contService from">
			<div class="headline" style="height:280px;">
				<h2><img src="{{#base_url#}}/image/service/from150/title.png" alt="150坪からの土地活用" width="700" height="90"></h2>
				<p class="b-text">デイサービス、グループホーム、ショートステイ等の出店が検討可能です。<br>市場環境や地域ニーズ、将来の人口統計を考慮し、ご予算に合わせて、その土地にあった<br>最適なご提案をさせていただきます。<br>また、弊社のネットワークを活かしそのエリアに強い確かな介護事業者様をご紹介させていただきます。</p>
			</div>
			
			<div class="column">
				<h3 class="mt40"><img src="{{#base_url#}}/image/service/from150/s_title.png" alt="150坪から建築可能な施設" width="388" height="27"></h3>
				<div class="column-shadow">
					<ul>
						<li style="padding-bottom:30px; border-bottom:solid #CCCCCC 1px;">
							<p><img src="{{#base_url#}}/image/service/from150/s_title_commute.png" alt="通所系デイサービス" width="156" height="24"></p>
							<div class="clearfix">
								<p class="title"><img src="{{#base_url#}}/image/service/commute.jpg" alt="通所系デイサービスイメージ" width="280" height="210"></p>
								<div class="wrap">
									<p>利用者が施設に通い、生活の世話や身体のケアなどのサービスを受けられる施設をデイサービスと言います。</p>
									<p class="mt10">施設では、利用者の健康チェック、入浴、食事等の日常生活上の世話や、機能訓練を行います。また、利用者の心身機能の維持向上、社会的孤立感の解消や介護者の負担軽減を大きな目的としています。</p>
									<p class="btn"><a href="{{#base_url#}}/service/home/commute.php"><img src="{{#base_url#}}/image/service/from150/btn_detail.png" alt="この物件を詳しく見る" width="241" height="44"></a></p>
								</div>
							</div>
						</li>
						
						<li class="mt30" style="padding-bottom:30px; border-bottom:solid #CCCCCC 1px;">
							<p><img src="{{#base_url#}}/image/service/from150/s_title_grouphome.png" alt="グループホーム" width="156" height="24"></p>
							<div class="clearfix">
								<p class="title"><img src="{{#base_url#}}/image/service/grouphome.jpg" alt="グループホームイメージ" width="280" height="210"></p>
								<div class="wrap">
									<p>グループホームは、利用者が専門スタッフ等の援助を受けながら、小人数で共同生活を送ることにより、日常生活の中でのリハビリテーションを行う施設です。</p>
									<p class="mt10">現在は認知症対応型の施設を指すことが多いですが、認知症以外にも、様々な障害に対応したタイプのものがあります。</p>
									<p class="btn"><a href="{{#base_url#}}/service/home/grouphome.php"><img src="{{#base_url#}}/image/service/from150/btn_detail.png" alt="この物件を詳しく見る" width="241" height="44"></a></p>
								</div>
							</div>
						</li>
						
						<li class="mt30">
							<p><img src="{{#base_url#}}/image/service/from150/s_title_shortstay.png" alt="ショートステイ" width="179" height="22"></p>
							<div class="clearfix">
								<p class="title"><img src="{{#base_url#}}/image/service/shortstay.jpg" alt="ショートステイイメージ" width="280" height="210"></p>
								<div class="wrap">
									<p>利用者が施設に短期間宿泊し、入浴や食事、排泄等の日常生活上の世話や、機能訓練を行う施設です。</p>
									<p class="mt10">施設によっては、レクリエーションや医療ケアなども提供します。</p>
									<p class="btn"><a href="{{#base_url#}}/service/home/shortstay.php"><img src="{{#base_url#}}/image/service/from150/btn_detail.png" alt="この物件を詳しく見る" width="241" height="44"></a></p>
								</div>
							</div>
						</li>
						
					</ul>
				</div>
				
				{{include file="common/article-list.tpl" option=['key'=>'extent', 'val'=>2]}}
				
				<p class="bottom-navi"><a href="{{#base_url#}}/service/from250.php"><img src="{{#base_url#}}/image/service/from150/bottom_navi.png" alt="150坪からの介護賃貸 事例を見る" width="700" height="50"></a></p>
			</div>
			
			{{include file="common/contact-btn.tpl"}}
		</div>
	</div>
</div><!-- [ /content ] -->

{{include file="common/b-menu.tpl"}}
{{include file="common/footer.tpl"}}
