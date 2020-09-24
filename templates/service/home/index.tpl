{{config_load file="base.conf" section="service"}}
{{include file="common/header_lower.tpl"}}

<!-- [ content ] -->
<div id="content">
	<div class="clearfix c-wrap contService">
		<div class="sidemenu">
			{{include file="common/sidemenu.tpl" category='service'}}
		</div>
		
		<div class="mainarea contService home-index">
			<div class="headline">
				<h2><img src="{{#base_url#}}/image/service/home/index/title.png" alt="土地活用のご案内" width="700" height="90"></h2>
				<p class="b-text">「介護施設」には様々な種類があります。<br>また、同じ施設でも、収容人数や使い方によって多彩なバリエーションがあります。<br>S-FITでは、下記にご紹介する施設以外にも、オーナー様の土地や希望に沿ったプランを<br>ご提案しています。<br>ぜひお気軽にご相談ください。</p>
			</div>
			
			<div class="column">
				<div class="s-colmun">
					<div class="clearfix title">
						<h3><img src="{{#base_url#}}/image/service/home/index/s_title_01.png" alt="デイサービス" width="155" height="23"></h3>
						<p><img src="{{#base_url#}}/image/service/home/index/s_title_icon_01.png" alt="デイサービス" width="86" height="44"></p>
					</div>
					<div class="clearfix content">
						<p><img src="{{#base_url#}}/image/service/home/index/image_01.jpg" alt="デイサービス イメージ" width="200" height="150"></p>
						<div>
							<h4 class="title">通ってもらう施設</h4>
							<p class="text">利用者に施設に日帰りで通ってもらい、食事や入浴、レクリエーションを行うサービス。「デイサービス」とも呼ばれます。医療機関の提供するリハビリサービス「デイケア」もこちらの施設に含まれます。</p>
							<p class="btn"><a href="{{#base_url#}}/service/home/commute.php"><img src="{{#base_url#}}/image/service/home/index/to_method.png" alt="この介護施設の活用方法を見る" width="222" height="37"></a></p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="column mt30">
				<div class="s-colmun">
					<div class="clearfix title">
						<h3><img src="{{#base_url#}}/image/service/home/index/s_title_02.png" alt="ショートステイ" width="178" height="23"></h3>
						<p><img src="{{#base_url#}}/image/service/home/index/s_title_icon_02.png" alt="ショートステイ" width="67" height="44"></p>
					</div>
					<div class="clearfix content">
						<p><img src="{{#base_url#}}/image/service/home/index/image_02.jpg" alt="ショートステイ イメージ" width="200" height="150"></p>
						<div>
							<h4 class="title">短期で入居してもらう施設</h4>
							<p class="text">老人福祉法における老人短期入所事業（概ね30日以内）のことをいい、要介護の高齢者を宿泊させ生活支援及び機能訓練を行うことを目的とする施設。</p>
							<p class="btn"><a href="{{#base_url#}}/service/home/shortstay.php"><img src="{{#base_url#}}/image/service/home/index/to_method.png" alt="この介護施設の活用方法を見る" width="222" height="37"></a></p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="column mt30">
				<div class="s-colmun">
					<div class="clearfix title">
						<h3><img src="{{#base_url#}}/image/service/home/index/s_title_03.png" alt="グループホーム" width="181" height="24"></h3>
						<p><img src="{{#base_url#}}/image/service/home/index/s_title_icon_03.png" alt="グループホーム" width="61" height="44"></p>
					</div>
					<div class="clearfix content">
						<p><img src="{{#base_url#}}/image/service/home/index/image_03.jpg" alt="グループホーム イメージ" width="200" height="150"></p>
						<div>
							<h4 class="title">小さな老人ホーム</h4>
							<p class="text">高齢者に入浴、排泄、食事等の介護その他日常生活上の世話及び機能訓練を行い、精神的に安定した共同生活を送るために必要な支援を行う介護施設。</p>
							<p class="btn"><a href="{{#base_url#}}/service/home/grouphome.php"><img src="{{#base_url#}}/image/service/home/index/to_method.png" alt="この介護施設の活用方法を見る" width="222" height="37"></a></p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="column mt30">
				<div class="s-colmun">
					<div class="clearfix title">
						<h3><img src="{{#base_url#}}/image/service/home/index/s_title_04.png" alt="サービス付き高齢者向け住宅" width="338" height="24"></h3>
						<p><img src="{{#base_url#}}/image/service/home/index/s_title_icon_04.png" alt="サービス付き高齢者向け住宅" width="59" height="44"></p>
					</div>
					<div class="clearfix content">
						<p><img src="{{#base_url#}}/image/service/home/index/image_04.jpg" alt="サービス付き高齢者向け住宅 イメージ" width="200" height="150"></p>
						<div>
							<h4 class="title">高齢者に優しい賃貸住宅</h4>
							<p class="text">住宅の設計や構造に関する基準、入居者へのサービスに関する基準、契約内容に関する基準の3つの基準のそれぞれ一定の要件を満たし、都道府県に登録された住宅施設。</p>
							<p class="btn"><a href="{{#base_url#}}/service/home/service.php"><img src="{{#base_url#}}/image/service/home/index/to_method.png" alt="この介護施設の活用方法を見る" width="222" height="37"></a></p>
						</div>
					</div>
				</div>
			</div>
			
			{{*<div class="column mt30">
				<div class="s-colmun">
					<div class="clearfix title">
						<h3><img src="{{#base_url#}}/image/service/home/index/s_title_05.png" alt="複合型施設" width="130" height="24"></h3>
						<p><img src="{{#base_url#}}/image/service/home/index/s_title_icon_05.png" alt="複合型施設" width="58" height="44"></p>
					</div>
					<div class="clearfix content">
						<p><img src="{{#base_url#}}/image/service/home/index/image_05.jpg" alt="複合型施設 イメージ" width="200" height="150"></p>
						<div>
							<h4 class="title">ダミーテキスト</h4>
							<p class="text">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
							<p class="btn"><a href="{{#base_url#}}/service/home/mansion.php"><img src="{{#base_url#}}/image/service/home/index/to_method.png" alt="この介護施設の活用方法を見る" width="222" height="37"></a></p>
						</div>
					</div>
				</div>
			</div>*}}
			
			<div class="column mt30">
				<div class="s-colmun">
					<div class="clearfix title">
						<h3><img src="{{#base_url#}}/image/service/home/index/s_title_06.png" alt="有料老人ホーム" width="181" height="23"></h3>
						<p><img src="{{#base_url#}}/image/service/home/index/s_title_icon_06.png" alt="有料老人ホーム" width="66" height="44"></p>
					</div>
					<div class="clearfix content">
						<p><img src="{{#base_url#}}/image/service/home/index/image_06.jpg" alt="有料老人ホーム イメージ" width="200" height="150"></p>
						<div>
							<h4 class="title">生活サービスを提供する施設</h4>
							<p class="text">高齢者へ、生活支援と食事サービスを提供することを目的とした施設。介護サービスについては各々の類型によって提供形式が異なります。</p>
							<p class="btn"><a href="{{#base_url#}}/service/home/home.php"><img src="{{#base_url#}}/image/service/home/index/to_method.png" alt="この介護施設の活用方法を見る" width="222" height="37"></a></p>
						</div>
					</div>
				</div>
			</div>
			
			{{include file="common/contact-btn.tpl"}}
		</div>
	</div>
</div><!-- [ /content ] -->

{{include file="common/b-menu.tpl"}}
{{include file="common/footer.tpl"}}
