{{config_load file="base.conf" section="service"}}
{{include file="common/header_lower.tpl"}}

<!-- [ content ] -->
<div id="content">
	<div class="clearfix c-wrap">
		<div class="sidemenu">
			{{include file="common/sidemenu.tpl" category='other'}}
		</div>
		
		<div class="mainarea contOther blog">
			<div class="headline">
				<h2><img src="{{#base_url#}}/image/blog/title.png" alt="ブログ" width="700" height="90"></h2>
			</div>
			
			<div class="column mt30">
				<h3><img src="{{#base_url#}}/image/blog/s_title.png" alt="介護賃貸のブログ「介物くん」。" width="331" height="30"></h3>
				<p class="mt20"><img src="{{#base_url#}}/image/blog/text.png" alt="セミナーの最新情報や、スタッフの日常、介護賃貸事例の情報等はこちらのブログから発信しています。" width="633" height="14"></p>
				<div class="clearfix wrap-bg">
					<p><img src="{{#base_url#}}/image/blog/kaibutsu_banner.png" alt="介物くんブログ" width="300" height="150"></p>
					<div>
						<p class="mt20"><img src="{{#base_url#}}/image/blog/blog_title.png" alt="介物くんブログ" width="152" height="19"></p>
						<p class="mt10"><img src="{{#base_url#}}/image/blog/blog_url.png" alt="介物くんブログ" width="297" height="15"></p>
						<p class="mt30"><a href="http://ameblo.jp/heyagime-senior/" target="_blank"><img src="{{#base_url#}}/image/blog/blog_btn.png" alt="ブログを見る" width="144" height="42"></a></p>
					</div>
				</div>
			</div>
			
			{{include file="common/contact-btn.tpl"}}
		</div>
	</div>
</div><!-- [ /content ] -->

{{include file="common/b-menu.tpl"}}
{{include file="common/footer.tpl"}}
