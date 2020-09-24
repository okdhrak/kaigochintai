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
				<h2><img src="{{#base_url#}}/image/service/from70/title.png" alt="70坪からの土地活用" width="700" height="90"></h2>
				<p class="b-text">デイサービスの出店が検討可能です。<br>デイサービスもサービス提供をする、お年寄りの人数によって建物の大きさが変わります。<br>市場環境や地域ニーズ、将来の人口統計を考慮し、<br>その土地にあった最適なご提案をさせていただきます。</p>
			</div>
			
			<div class="column">
				<h3 class="mt40"><img src="{{#base_url#}}/image/service/from70/s_title.png" alt="70坪から建築可能な施設" width="361" height="27"></h3>
				<div class="column-shadow">
					<ul>
						<li>
							<p><img src="{{#base_url#}}/image/service/from70/s_title_commute.png" alt="デイサービス" width="156" height="24"></p>
							<div class="clearfix">
								<p class="title"><img src="{{#base_url#}}/image/service/commute.jpg" alt="通所系デイサービスイメージ" width="280" height="210"></p>
								<div class="wrap">
									<p>利用者が施設に通い、生活の世話や身体のケアなどのサービスを受けられる施設をデイサービスと言います。</p>
									<p class="mt10">施設では、利用者の健康チェック、入浴、食事等の日常生活上の世話や、機能訓練を行います。また、利用者の心身機能の維持向上、社会的孤立感の解消や介護者の負担軽減を大きな目的としています。</p>
									<p class="btn"><a href="{{#base_url#}}/service/home/commute.php"><img src="{{#base_url#}}/image/service/from70/btn_detail.png" alt="この物件を詳しく見る" width="241" height="44"></a></p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
				{{include file="common/article-list.tpl" option=['key'=>'extent', 'val'=>1]}}
				
				<p class="bottom-navi"><a href="{{#base_url#}}/service/from150.php"><img src="{{#base_url#}}/image/service/from70/bottom_navi.png" alt="70坪からの介護賃貸 事例を見る" width="700" height="50"></a></p>
				
			</div>
			
			{{include file="common/contact-btn.tpl"}}
		</div>
	</div>
</div><!-- [ /content ] -->

{{include file="common/b-menu.tpl"}}
{{include file="common/footer.tpl"}}
