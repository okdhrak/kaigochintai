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
				<h2><img src="{{#base_url#}}/image/service/home/grouphome/title.png" alt="グループホーム" width="700" height="90"></h2>
				<p class="b-text">「介護施設」には様々な種類があります。<br>また、同じ施設でも、収容人数や使い方によって多彩なバリエーションがあります。<br>S-FITでは、下記にご紹介する施設以外にも、オーナー様の土地や希望に沿ったプランを<br>ご提案しています。<br>ぜひお気軽にご相談ください。</p>
			</div>
			
			<div class="column">
				<div class="column-shadow">
					<h3 style="border-bottom:dotted #CCCCCC 1px; padding-bottom:10px;"><img src="{{#base_url#}}/image/service/home/grouphome/s_title.png" alt="グループホームとは" width="302" height="47"></h3>
					<p style="float:right; margin:20px 10px 20px 20px; padding:3px; border:solid #CCCCCC 1px;"><img src="{{#base_url#}}/image/service/home/grouphome/article_image.jpg" alt="グループホーム" width="280" height="210"></p>
					
					<p class="mt20">グループホームは、利用者が専門スタッフ等の援助を受けながら、小人数で共同生活を送ることにより、日常生活の中でのリハビリテーションを行う施設です。</p>
					<p class="mt10">現在は認知症対応型の施設を指すことが多いですが、認知症以外にも、様々な障害に対応したタイプのものがあります。介護職員が専従しますが、基本的に自分でできることは自分で行うように配慮した介護を行いますので、リハビリテーションの効果も高く、同年代の人とのコミュニケーションも取れる施設として人気があります。</p>
					<p class="mt10">また、利用者の住み慣れた地域での地域密着型サービスという点で、地域貢献ができる施設です。</p>
				</div>
				
				<div class="mt30" style="margin-left:50px;">
					<h3><img src="{{#base_url#}}/image/service/home/grouphome/merit_title.png" alt="グループホームのメリット" width="600" height="20"></h3>
					<ul style="list-style:none; margin-left:0; margin-top:20px;">
						<li><img src="{{#base_url#}}/image/service/home/grouphome/merit_01.png" alt="公募事業のため、既得権がある！" width="502" height="59"></li>
						<li><img src="{{#base_url#}}/image/service/home/grouphome/merit_02.png" alt="社会貢献につながる！" width="372" height="59"></li>
						<li><img src="{{#base_url#}}/image/service/home/grouphome/merit_03.png" alt="長期借上げで空室リスクが少ない！" width="510" height="59"></li>
					</ul>
				</div>
				
				{{include file="common/article-list.tpl" option=['key'=>'category', 'val'=>2]}}
			</div>
			
			{{include file="common/contact-btn.tpl"}}
		</div>
	</div>
</div><!-- [ /content ] -->

{{include file="common/b-menu.tpl"}}
{{include file="common/footer.tpl"}}
