{{config_load file="base.conf" section="service"}}
{{include file="common/header_lower.tpl"}}

<!-- [ content ] -->
<div id="content">
	<div class="clearfix c-wrap contService">
		<div class="sidemenu">
			{{include file="common/sidemenu.tpl" category='service'}}
		</div>
		
		<div class="mainarea contService home-home">
			<div class="headline">
				<h2><img src="{{#base_url#}}/image/service/home/commute/title.png" alt="デイサービス" width="700" height="90"></h2>
				<p class="b-text">「介護施設」には様々な種類があります。<br>また、同じ施設でも、収容人数や使い方によって多彩なバリエーションがあります。<br>S-FITでは、下記にご紹介する施設以外にも、オーナー様の土地や希望に沿ったプランを<br>ご提案しています。<br>ぜひお気軽にご相談ください。</p>
			</div>
			
			<div class="column">
				<div class="column-shadow">
					<h3 style="border-bottom:dotted #CCCCCC 1px; padding-bottom:10px;"><img src="{{#base_url#}}/image/service/home/commute/s_title.png" alt="デイサービスとは" width="287" height="43"></h3>
					<p style="float:right; margin:20px 10px 20px 30px; padding:3px; border:solid #CCCCCC 1px;"><img src="{{#base_url#}}/image/service/home/commute/article_image.jpg" alt="デイサービス" width="280" height="210"></p>
					
					<p class="mt20">利用者が施設に通い、生活の世話や身体のケアなどのサービスを受けられる施設をデイサービスと言います。</p>
					<p class="mt10">施設では、利用者の健康チェック、入浴、食事等の日常生活上の世話や、機能訓練を行います。また、利用者の心身機能の維持向上、社会的孤立感の解消や介護者の負担軽減を大きな目的としています。</p>
					<p class="mt10">このようなデイサービスには、大きく分けてふたつの業態があります。上記のような日常生活の世話を主なサービスとする「デイサービス」、リハビリテーションを主なサービスとする「デイケア」です。また、「デイサービス」と「デイケア」両方の機能を兼ね備えた事業所や、医療依存度の高い方が利用できる「療養通所介護」など、利用者のニーズに合わせた様々な業態があります。</p>
				</div>
				
				<div class="mt30" style="margin-left:50px;">
					<h3><img src="{{#base_url#}}/image/service/home/commute/merit_title.png" alt="通所系デイサービスのメリット" width="598" height="19"></h3>
					<ul style="list-style:none; margin-left:0; margin-top:20px;">
						<li><img src="{{#base_url#}}/image/service/home/commute/merit_01.png" alt="利用者を車で送迎するため立地を問いません！" width="583" height="59"></li>
						<li><img src="{{#base_url#}}/image/service/home/commute/merit_02.png" alt="低投資から始められる！" width="373" height="59"></li>
						<li><img src="{{#base_url#}}/image/service/home/commute/merit_03.png" alt="坪数の小さな敷地でも活用できる！" width="477" height="59"></li>
					</ul>
				</div>
				
				{{include file="common/article-list.tpl" option=['key'=>'category', 'val'=>1]}}
			</div>
			
			{{include file="common/contact-btn.tpl"}}
		</div>
	</div>
</div><!-- [ /content ] -->

{{include file="common/b-menu.tpl"}}
{{include file="common/footer.tpl"}}
