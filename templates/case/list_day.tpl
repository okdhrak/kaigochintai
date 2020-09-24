{{config_load file="base.conf" section="service"}}
{{include file="common/header_lower.tpl"}}

<!-- [ content ] -->
<div id="content">
	<div class="clearfix c-wrap">
		<div class="sidemenu">
			{{include file="common/sidemenu.tpl" category='other'}}
		</div>
		
		<div class="mainarea contCase index">
			<div class="headline">
				<h2><img src="{{#base_url#}}/image/case/title.png" alt="事例紹介" width="700" height="90"></h2>
			</div>
			
			<div class="column">
				{{include file="common/article-list.tpl" option=['key'=>'category', 'val'=>1]}}
			</div>
			
			{{include file="common/contact-btn.tpl"}}
		</div>
	</div>
</div><!-- [ /content ] -->

{{include file="common/b-menu.tpl"}}
{{include file="common/footer.tpl"}}
