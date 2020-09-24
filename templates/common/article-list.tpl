<!-- [ article-list ] -->
<div class="column-shadow">
	{{if strpos($smarty.server.SCRIPT_FILENAME, '/service/') eq true}}
	<img src="{{#base_url#}}/image/service/st_list.png" width="650" height="30" alt="該当する事例のご紹介">
	{{elseif strpos($smarty.server.SCRIPT_FILENAME, '/case/') eq true}}
	<img src="{{#base_url#}}/image/case/s_title_jirei.png" width="650" height="30" alt="介護賃貸事例一覧">
	{{/if}}
	
	{{foreach from=$articles key=mid item=i}}{{if {{$i.flag.delete}} eq false and $i.flag.{{$option['key']}} eq $option['val']}}
	<div class="clearfix s-col">
		<p class="image"><img src="{{#base_url#}}/image/case/from{{$i['link']['dir']}}/{{$i['link']['no']}}/list.jpg" alt="{{$i['link']['alt']}}" width="250" height="167"></p>
		<div class="outline">
			<div class="icon mb10">
				{{if $i.flag.heiyou eq true}}<img src="{{#base_url#}}/image/case/icon_heiyou.png" width="96" height="24" alt="介護賃貸併用">{{/if}}
				{{if $i.flag.category eq 1}}<img src="{{#base_url#}}/image/case/icon_day.png" width="96" height="24" alt="デイサービス">{{elseif {{$i.flag.category}} eq 2}}<img src="{{#base_url#}}/image/case/icon_group.png" width="96" height="24" alt="グループホーム">{{/if}}
			</div>
			{{foreach from=$i.outline item=v}}
				<p>{{$v}}</p>
			{{/foreach}}
			<p class="detail"><a href="{{#base_url#}}/case/from{{$i.link.dir}}/case_{{$i.link.no}}.php"><img src="{{#base_url#}}/image/case/to_detail.png" alt="この物件の詳細をみる" width="188" height="15"></a></p>
		</div>
	</div>
	{{/if}}{{/foreach}}
</div><!-- [ /article-list ] -->