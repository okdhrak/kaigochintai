<!-- [ sidemenu[service] ] -->
<div class="frame {{$category}}">
	<ul>
		{{foreach from=$menus key=mid item=i}}
			{{if preg_match('/^https:\/\//', {{$i.script_file}}) eq true}}
				<li><a href="{{$i.script_file}}" class="menu{{$mid}} {{$i.height}} line-{{$i.line}}" target="_blank">{{$i.text}}</a></li>
			{{else}}
				<li><a href="{{#base_url#}}{{$i.script_file}}" class="menu{{$mid}} {{$i.height}} line-{{$i.line}} {{if strpos($smarty.server.SCRIPT_FILENAME, {{$i.script_file}}) eq true}}active{{/if}}">{{$i.text}}</a></li>
			{{/if}}
		{{/foreach}}
	</ul>
</div>

<div class="frame mt25">
	<p class="to-top"><a href="{{#base_url#}}">トップページへ</a>{{* {{html_image class="" style="" file="{{#base_url#}}/image/common/sidemenu/to_top.png" href="http://www.kaigochintai.com/" alt="トップページへ"}} *}}</p>
</div>

<div class="mt25">
	<a href="http://www.sfit-care.co.jp/" target="_blank">{{html_image class="opacity" style="" file="/image/common/other/sfitcare.png" alt="S-FITケア"}}</a>
</div><!-- [ /sidemenu[service] ] -->
