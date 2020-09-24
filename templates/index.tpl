{{config_load file="base.conf" section="index"}}
{{include file="common/header.tpl"}}

<!-- [ content ] -->
<div id="content" style="padding-top:0; margin-top:-10px;">
	<div class="contIndex">
		
		{{*LP(アパートマンション)*}}
		<p class="nextSeminer" style="position: absolute; top:150px; z-index:10;"><a href="{{#base_url#}}/lp-apart/" target="_blank"><img src="{{#base_url#}}/image/index/seminar/index_apaman_lp_small.png" width="181" height="96" alt="介護賃貸併用アパート(マンション)"></a></p>
		{{*GISマーケティング
		<p class="nextSeminer" style="position: absolute; top:150px; z-index:10;"><a href="{{#base_url#}}/marketing/" ><img src="{{#base_url#}}/image/index/seminar/index_gis.png" width="181" height="95" alt=""></a></p>*}}
		{{*地主家主セミナー
		<p class="nextSeminer" style="position: absolute; top:150px; z-index:10;"><a href="{{#base_url#}}/seminar/" ><img src="{{#base_url#}}/image/index/seminar/index_seminar_20150118.png" width="181" height="95" alt="2015年1月18日(日)地主家主セミナー"></a></p>*}}
		<p class="nextSeminer" style="position: absolute; top:5px; z-index:10;"><a href="./file/movie/20130920_wbs.flv" target="_blank" rel="shadowbox;width=700;height=500;"><img src="{{#base_url#}}/image/index/seminar/index_wbc.png" width="181" height="156" alt="9月19日放送のテレビ東京系「ワールドビジネスサテライト」内の特集に取り上げていただきました。"></a></p>
		{{*<p class="nextSeminer" style="position: absolute; top:153px; z-index:10;"><a href="{{#base_url#}}/lp-kodate/" target="_blank"><img src="{{#base_url#}}/image/index/seminar/index_kodate_lp_small.png" width="181" height="95" alt="9月19日放送のテレビ東京系「ワールドビジネスサテライト」内の特集に取り上げていただきました。"></a></p>*}}
		
		<ul id="slider" class="slider clearfix">
			<li class="slide1">
				<div style="background:url(image/index/main_img_1.jpg);"><h3>アパート・マンション経営による空室リスクを解消し、安定した不動産活用を介護賃貸が実現致します。</h3></div>
				<ul class="clearfix">
					<li class="list1">
						<a href="{{#base_url#}}/kaichin/">
							<p class="text1">空室に<br>悩みたくない！</p>
							<p class="text2">介護賃貸<br>とは？</p>
						</a>
					</li>
					<li class="list2">
						<a href="{{#base_url#}}/kaichin/about.php">
							<p class="text1">賢い選択<br>正しい投資</p>
							<p class="text2">なぜ今、<br>介護賃貸？</p>
						</a>
					</li>
					<li class="list3">
						<a href="{{#base_url#}}/kaichin/subsidy.php">
							<p class="text1">低投資で賃料<br>固定の安定収入</p>
							<p class="text2">助成金が<br>利用できる</p>
						</a>
					</li>
					<li class="list4">
						<a href="{{#base_url#}}/kaichin/tax.php">
							<p class="text1">大切な資産を<br>守るため</p>
							<p class="text2">相続税<br>節税</p>
						</a>
					</li>
				</ul>
			</li>
			
			<li class="slide2">
				<div style="background:url(image/index/main_img_2.jpg);"><h3>土地の大きさをはじめ、周辺環境、所在エリアに適切な介護施設をご提案いたします。</h3></div>
				<div class="clearfix">
					<div>
						<h4 class="extent">土地の大きさから選ぶ</h4>
						
						<ul class="clearfix">
							<li style="border-bottom:solid #CCCCCC 1px; border-right:solid #CCCCCC 1px;">
								<a href="{{#base_url#}}/service/from70.php">
									<p><img src="{{#base_url#}}/image/index/list_btn_2_1_1.jpg" width="199" height="80" alt="70～150坪"></p>
									<p class="text-y">70～150坪</p>
								</a>
							</li>
							<li style="border-bottom:solid #CCCCCC 1px; margin-right:-1px;">
								<a href="{{#base_url#}}/service/from150.php">
									<p><img src="{{#base_url#}}/image/index/list_btn_2_1_2.jpg" width="199" height="80" alt="150～250坪"></p>
									<p class="text-y">150～250坪</p>
								</a>
							</li>
							<li style="border-right:solid #CCCCCC 1px;">
								<a href="{{#base_url#}}/service/from250.php">
									<p><img src="{{#base_url#}}/image/index/list_btn_2_1_3.jpg" width="199" height="80" alt="250～400坪"></p>
									<p class="text-y">250～400坪</p>
								</a>
							</li>
							<li style="margin-right:-1px;">
								<a href="{{#base_url#}}/service/from400.php">
									<p><img src="{{#base_url#}}/image/index/list_btn_2_1_4.jpg" width="199" height="80" alt="400坪～"></p>
									<p class="text-y">400坪以上</p>
								</a>
							</li>
						</ul>
					</div>
					<div>
						<h4 class="kind">施設の種類から選ぶ</h4>
						
						<ul class="clearfix">
							<li style="border-bottom:solid #CCCCCC 1px; border-right:solid #CCCCCC 1px; margin-left:-1px;">
								<a href="{{#base_url#}}/service/home/commute.php">
									<p><img src="{{#base_url#}}/image/index/list_btn_2_2_1.jpg" width="133" height="80" alt="デイサービス"></p>
									<p class="text-b">デイサービス</p>
								</a>
							</li>
							<li style="border-bottom:solid #CCCCCC 1px; border-right:solid #CCCCCC 1px;">
								<a href="{{#base_url#}}/service/home/shortstay.php">
									<p><img src="{{#base_url#}}/image/index/list_btn_2_2_2.jpg" width="133" height="80" alt="ショートステイ"></p>
									<p class="text-b">ショートステイ</p>
								</a>
							</li>
							<li style="border-bottom:solid #CCCCCC 1px;">
								<a href="{{#base_url#}}/service/home/grouphome.php">
									<p><img src="{{#base_url#}}/image/index/list_btn_2_2_3.jpg" width="133" height="80" alt="グループホーム"></p>
									<p class="text-b">グループホーム</p>
								</a>
							</li>
							<li style="border-right:solid #CCCCCC 1px;">
								<a href="{{#base_url#}}/service/home/service.php">
									<p><img src="{{#base_url#}}/image/index/list_btn_2_2_4.jpg" width="199" height="80" alt="高齢者向け住宅"></p>
									<p class="text-b">高齢者向け住宅</p>
								</a>
							</li>
							<li>
								<a href="{{#base_url#}}/service/home/home.php">
									<p><img src="{{#base_url#}}/image/index/list_btn_2_2_5.jpg" width="199" height="80" alt="有料老人ホーム"></p>
									<p class="text-b">有料老人ホーム</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</li>
			
			<li class="slide3">
				<div style="background:url(image/index/main_img_3.jpg);"><h3>介護施設に関する知識、面倒なお手続きは不要。オーナー様には一切の煩わしさがありません。</h3></div>
				<ul class="clearfix">
					<li class="list1">
						<a href="{{#base_url#}}/process/">
							<p>わかりやすいお手続き</p>
						</a>
					</li>
					<li class="list2">
						<a href="{{#base_url#}}/process/question.php">
							<p>よくあるご質問</p>
						</a>
					</li>
					<li class="list3">
						<a href="{{#base_url#}}/process/scheme.php">
							<p>わたしたちの強み</p>
						</a>
					</li>
					<li class="list4">
						<a href="{{#base_url#}}/process/traders.php">
							<p>施工会社様へ</p>
						</a>
					</li>
				</ul>
			</li>
			
			<li class="slide4">
				<div style="background:url(image/index/main_img_4.jpg);"><h3>介護賃貸についてのご質問はもちろん、お持ちの土地に関する具体的なご提案もお任せください。</h3></div>
				<div class="clearfix contact">
					<h4>セミナーご案内とお申込み・個別相談</h4>
					<p><a href="{{#base_url#}}/seminar/"><img src="{{#base_url#}}/image/index/list_btn_4.jpg" width="196" height="121" alt="WEBでのお問い合せはこちらから"></a></p>
				</div>
			</li>
			
			<li class="slide5">
				<div style="background:url(image/index/main_img_5.jpg);"><h3>介護賃貸が実現した長期一括借り上げによる安定収入。実例をご紹介いたします。</h3></div>
				<div class="clearfix contact">
					<p><a href="{{#base_url#}}/case/"><img src="{{#base_url#}}/image/index/list_btn_5.jpg" width="420" height="83" alt="介護賃貸の事例紹介はこちら"></a></p>
				</div>
			</li>
		</ul>
		
		<div class="bx-pager">
			<ul id="pager-menu" class="clearfix"></ul>
		</div>
	</div>
</div><!-- [ /content ] -->

{{include file="common/footer.tpl"}}
