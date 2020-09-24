{{config_load file="base.conf" section="service"}}
{{include file="common/header_lower.tpl"}}

<!-- [ content ] -->
<div id="content">
	<div class="clearfix c-wrap">
		<div class="sidemenu">
			{{include file="common/sidemenu.tpl" category='other'}}
		</div>
		
		<div class="mainarea contOther sitemap">
			<div class="headline">
				<h2><img src="{{#base_url#}}/image/sitemap/title.png" alt="サイトマップ" width="700" height="90"></h2>
				<p class="mt30"><img src="{{#base_url#}}/image/sitemap/s_title.png" alt="介護賃貸のサイトマップ" width="282" height="30"></p>
			</div>
			
			<div class="column">
				<h3>介護賃貸</h3>
				<ul class="clearfix">
					<li><a href="{{#base_url#}}">介護賃貸トップページ</a></li>
				</ul>
			</div>
			
			<div class="column">
				<h3>介護賃貸とは</h3>
				<ul class="clearfix">
					<li><a href="{{#base_url#}}/kaichin/">介護賃貸とは</a></li>
					<li><a href="{{#base_url#}}/kaichin/about.php">なぜ介護賃貸</a></li>
					<li><a href="{{#base_url#}}/kaichin/subsidy.php">助成金について</a></li>
					<li><a href="{{#base_url#}}/kaichin/tax.php">相続税・節税対策について</a></li>
				</ul>
			</div>
			
			<div class="column">
				<h3>土地活用のご案内</h3>
				<ul class="clearfix">
					<li><a href="{{#base_url#}}/service/">土地活用のご案内</a></li>
					<li><a href="{{#base_url#}}/service/from40.php">40坪からの介護賃貸</a>{{*<p><a href="{{#base_url#}}/service/from40_case.php">実績・事例紹介</a></p>*}}</li>
					<li><a href="{{#base_url#}}/service/from150.php">150坪からの介護賃貸</a>{{*<p><a href="{{#base_url#}}/service/from150_case.php">実績・事例紹介</a></p>*}}</li>
					<li><a href="{{#base_url#}}/service/from250.php">250坪からの介護賃貸</a>{{*<p><a href="{{#base_url#}}/service/from250_case.php">実績・事例紹介</a></p>*}}</li>
					<li><a href="{{#base_url#}}/service/from400.php">400坪からの介護賃貸</a>{{*<p><a href="{{#base_url#}}/service/from400_case.php">実績・事例紹介</a></p>*}}</li>
					<li><a href="{{#base_url#}}/service/method.php">他の土地活用比較</a></li>
					<li style="clear:left;"><a href="{{#base_url#}}/service/plan.php">他の土地活用プラン</a></li>
				</ul>
			</div>
			
			<div class="column">
				<h3>介護施設の種類</h3>
				<ul class="clearfix">
					<li><a href="{{#base_url#}}/service/home/">介護施設の種類</a></li>
					<li><a href="{{#base_url#}}/service/home/commute.php">デイサービス</a></li>
					<li><a href="{{#base_url#}}/service/home/shortstay.php">ショートステイ</a></li>
					<li><a href="{{#base_url#}}/service/home/grouphome.php">グループホーム</a></li>
					<li><a href="{{#base_url#}}/service/home/service.php">サービス付き高齢者向け住宅</a></li>
					{{*<li><a href="{{#base_url#}}/service/home/mansion.php">複合型施設</a></li>*}}
					<li><a href="{{#base_url#}}/service/home/home.php">有料老人ホーム</a></li>
				</ul>
			</div>
			
			<div class="column">
				<h3>手続き・業務について / 土地活用の流れ・ご契約手続き</h3>
				<ul class="clearfix">
					<li><a href="{{#base_url#}}/process/">手続き・業務について</a></li>
					<li><a href="{{#base_url#}}/process/scheme.php">わたしたちの強み</a></li>
					<li><a href="{{#base_url#}}/process/question.php">よくある質問 Q＆A</a></li>
					<li><a href="{{#base_url#}}/process/traders.php">施工会社様へ</a></li>
				</ul>
			</div>
			
			<div class="column">
				<h3>セミナー情報</h3>
				<ul class="clearfix">
					<li><a href="{{#base_url#}}/seminar/">セミナー情報</a></li>
				</ul>
			</div>
			
			<div class="column">
				<ul class="clearfix">
					<li><a href="{{#base_url#}}/case/">事例紹介</a></li>
					<li><a href="{{#base_url#}}/company/">会社案内</a></li>
					<li><a href="{{#base_url#}}/information/">お知らせ</a></li>
					<li><a href="{{#base_url#}}/blog/">ブログ</a></li>
					<li><a href="{{#base_url#}}/sitemap/">サイトマップ</a></li>
					<li><a href="https://www.sfit.co.jp/kaigochintai/contact/" target="_blank">お問い合わせ</a></li>
				</ul>
			</div>
			
			{{include file="common/contact-btn.tpl"}}
		</div>
	</div>
</div><!-- [ /content ] -->

{{include file="common/b-menu.tpl"}}
{{include file="common/footer.tpl"}}
