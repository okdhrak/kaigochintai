<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>介護賃貸 | お問い合せ</title>
	<meta name="keywords" content="介護,賃貸,高齢,老人ホーム,土地,不動産,活用,S-FIT,sfit,エスフィット">
	<meta name="description" content="S-FITの介護賃貸。介護賃貸へのお問い合せはこちら。">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Imagetoolbar" content="no">
	<meta http-equiv="Content-Script-type" content="text/javascript">
	<meta http-equiv="Content-Style-type" content="text/css">
	
	<link rel="stylesheet" href="./css/common.css">
	<link rel="stylesheet" href="./css/base.css">
	<script type="text/javascript" src="./js/jquery-1.6.4.js"> </script>
	<script type="text/javascript" src="./js/jquery.easing-1.3.js"> </script>
	<script type="text/javascript" src="./js/base.js" charset="utf-8"> </script>
	
	<script src="./lib/pcode/ajaxzip2.js" charset="UTF-8"></script>
	
	<!--[if IE]>
	<link rel="stylesheet" href="./css/ie.css">
	<![endif]-->
	<!--[if lt IE 9]> 
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<?php include ('./lib/php/inquiry.inc.php'); ?>
</head>

<body>
<div id="wrapper">
<!-- [ header ] -->
<header class="clearfix">
	<p class="logo"><img src="image/logo.png" width="250" height="50" alt="介護賃貸"></p>
	<h2 class="text">介護賃貸は、アパート・マンションに代わる土地活用法です。<br>低投資、長期安定、空室リスクを最小限に抑えた資産活用手段。これからの日本に最適で、超高齢社会に対応した土地活用をS-FITシニアチームがお手伝いいたします。</h2>
</header>
<!-- [ /header ] -->

<!-- [ title ] -->
<div class="clearfix title">
	<h3>【介護賃貸 -お問い合わせ-】</h3>
	<p>各入力項目をご入力いただき送信ください。追って担当よりご連絡させていただきます。</p>
</div>
<!-- [ /title ] -->

<!-- [ contents ] -->
<div class="contents">
	
	<div class="inquiry">
		<?php
		if (isset($_POST["_check_x"]) && $funcObj->flg!=1):
		?>
		<div class="flow">
			<p id="submit-top"><img src="image/flow02.png" width="820" height="70" alt="入力内容の確認"></p>
		</div>
		<form action="" method="post">
		<?php echo $postData; ?>
			
			<table class="t-inquiry" style="width:100%;" border="0" cellpadding="0" cellspacing="0" summary="inquiry">
				<tr style="background:#F1F1F1;">
					<td width="25%" height="60"><span class="essential">は必須項目です</span></td>
					<td width="75%">&nbsp;</td>
				</tr>
				<tr>
					<td><span class="essential">お問い合わせ内容</span></td>
					<td><?php echo $p_kind; ?></td>
				</tr>
				<tr>
					<td><span class="essential">お名前</span></td>
					<td><?php echo $p_seimei; ?></td>
				</tr>
				<tr>
					<td><span class="essential">ふりがな</span></td>
					<td><?php echo $p_seimeikana; ?></td>
				</tr>
				<tr>
					<td><span class="essential">年齢</span></td>
					<td><?php echo $p_age; ?></td>
				</tr>
                <tr>
                	<td><span class="essential">住所</span></td>
                	<td style="padding:0;">
                		<table border="0" cellpadding="0" cellspacing="0" width="100%">
                			<tr>
                				<td width="25%">郵便番号</td>
                				<td width="75%"><?php echo $p_postnum; ?></td>
                				</tr>
                			<tr>
                				<td>都道府県</td>
                				<td><?php echo $p_pref; ?></td>
                				</tr>
                			<tr>
                				<td>市区町村・番地</td>
                				<td><?php echo $p_address; ?></td>
                				</tr>
                			<tr>
                				<td style="border-bottom:none;">建物名・部屋番号</td>
                				<td style="border-bottom:none;"><?php echo $p_building; ?></td>
                				</tr>
                			</table>
                		</td>
                	</tr>
				<tr>
					<td><span class="essential">メールアドレス</span></td>
					<td><?php echo $p_mail; ?></td>
				</tr>
				<tr>
					<td><span class="essential">電話番号</span></td>
					<td><?php echo $p_tel; ?></td>
				</tr>
                
                <tr>
                	<td>備考・その他</td>
                	<td><?php echo $p_comment; ?></td>
                </tr>
                <tr style="background:#F1F1F1;">
					<td height="60">アンケート(任意)</td>
					<td>ご計画に役立てるための情報を、可能な限りで構いませんのでご協力ください</td>
				</tr>
                
                <tr>
					<td>計画内容について</td>
					<td style="padding:0;">
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td width="25%">計画予定地の所在地</td>
								<td width="75%"><?php echo $p_place; ?></td>
							</tr>
                            <tr>
								<td>計画予定地の坪数</td>
								<td><?php echo $p_extend; ?></td>
							</tr>
                            <tr>
								<td>計画予算</td>
								<td><?php echo $p_budget; ?></td>
							</tr>
                            <tr>
								<td style="border-bottom:none;">計画予定時期</td>
								<td style="border-bottom:none;"><?php echo $p_time; ?></td>
							</tr>
						</table>
                    </td>
				</tr>
                
                <tr>
                	<td>お客様について</td>
                	<td style="padding:0;">
                		<table border="0" cellpadding="0" cellspacing="0" width="100%">
                			<tr>
                				<td width="25%">性別</td>
                				<td width="75%"><?php echo $p_sex; ?></td>
                			</tr>
                			<!--<tr>
                				<td>年齢</td>
                				<td><?php echo $p_age; ?></td>
                			</tr>-->
                			<tr>
                				<td>職業</td>
                				<td><?php echo $p_job; ?></td>
                			</tr>
                			<tr>
                				<td>勤務先</td>
                				<td><?php echo $p_company; ?></td>
                			</tr>
                			<tr>
                				<td style="border-bottom:none;">備考・その他</td>
                				<td style="border-bottom:none;"><?php echo $p_etc; ?></td>
                			</tr>
                		</table>
                	</td>
                </tr>
                
                <tr>
                	<td colspan="2" align="center" style="border-bottom:none; padding:0;">
                		
                		<div style="margin-top:20px;">
							<a href="javascript:;" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('send','','image/btn_send_on.png',0)"><input type="image" src="image/btn_send.png" width="220" height="50" id="send" name="_send" alt="送信する"></a>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="javascript:;" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('return','','image/btn_return_on.png',0)"><img src="image/btn_return.png" width="220" height="50" id="return" onClick="history.back();" alt="戻る"></a> </div></td>
                	</tr>
			</table>
		</form>
		<?php
		else:
		?>
		<div class="flow">
			<p id="submit-top"><img src="image/flow01.png" width="820" height="70" alt="内容の入力"></p>
		</div>
		<form action="#submit-top" method="post" onSubmit="return Chk(document.getElementById('privacy')); return false;">
			<table class="t-inquiry" style="width:100%;" border="0" cellpadding="0" cellspacing="0" summary="inquiry">
				<tr style="background:#F1F1F1;">
					<td width="25%" height="60"><span class="essential">は必須項目です</span></td>
					<td width="75%">&nbsp;</td>
				</tr>
				<?php echo $error_tr; ?>
				<tr>
					<td><span class="essential">お問い合わせ内容</span></td>
					<td>
						<table width="580" border="0" cellspacing="0" cellpadding="0">
							<tr height="25">
								<td width="20" style="border-bottom:none; padding:0;"><input type="radio" name="kind" id="kind1" value="詳しい資料がほしい" <?php echo $kind1; ?> /></td>
								<td width="160" style="border-bottom:none; padding:0;"><label for="kind1">詳しい資料がほしい</label></td>
								<td width="20" style="border-bottom:none; padding:0;"><input type="radio" name="kind" id="kind2" value="直接相談したい" <?php echo $kind2; ?> /></td>
								<td width="160" style="border-bottom:none; padding:0;"><label for="kind2">直接相談したい</label></td>
								<td width="20" style="border-bottom:none; padding:0;"><input type="radio" name="kind" id="kind3" value="物件を調査してほしい" <?php echo $kind3; ?> /></td>
								<td width="200" style="border-bottom:none; padding:0;"><label for="kind3">物件を調査してほしい</label></td>
							</tr>
							<tr height="25">
								<td style="border-bottom:none; padding:0;"><input type="radio" name="kind" id="kind4" value="見積もりをしてほしい" <?php echo $kind4; ?> /></td>
								<td style="border-bottom:none; padding:0;"><label for="kind4">見積もりをしてほしい</label></td>
								<td style="border-bottom:none; padding:0;"><input type="radio" name="kind" id="kind5" value="商圏調査依頼" <?php echo $kind5; ?> /></td>
								<td style="border-bottom:none; padding:0;"><label for="kind5">商圏調査依頼</label></td>
								<td style="border-bottom:none; padding:0;"><input type="radio" name="kind" id="kind6" value="その他" <?php echo $kind6; ?> /></td>
								<td style="border-bottom:none; padding:0;"><label for="kind6">その他</label></td>
							</tr>
						</table>
						<p class="mt10">※商圏調査をご依頼の場合は計画地をご入力ください</p>
					</td>
				</tr>
				<tr>
					<td><span class="essential">お名前</span></td>
					<td>性&nbsp;<input type="text" name="sei" style="width:150px;" value="<?php echo $sei; ?>" />&nbsp;&nbsp;&nbsp;名&nbsp;<input type="text" name="mei" style="width:150px;" value="<?php echo $mei; ?>" /></td>
				</tr>
				<tr>
					<td><span class="essential">ふりがな</span></td>
					<td>せい&nbsp;<input type="text" name="seikana" style="width:150px;" value="<?php echo $seikana; ?>" />&nbsp;&nbsp;&nbsp;めい&nbsp;<input type="text" name="meikana" style="width:150px;" value="<?php echo $meikana; ?>" /></td>
				</tr>
                <tr>
                	<td><span class="essential">年齢</span></td>
                	<td><?php echo $htmlObj->get_select("age",$age,$arrObj->age_arr); ?></td>
                	</tr>
                <tr>
                	<td><span class="essential">住所</span><br>都道府県および市区町村・番地は必須</td>
                	<td style="padding:0;">
                		<table border="0" cellpadding="0" cellspacing="0" width="100%">
                			<tr>
                				<td width="25%">郵便番号</td>
                				<td width="75%"><input type="text" name="pcode1" size="5" maxlength="3" class="mode-disabled" value="<?php echo $pcode1; ?>" onkeyup="nextFrame(this, 'pcode2', 3);" />&nbsp;-&nbsp;<input type="text" name="pcode2" size="10" class="mode-disabled" value="<?php echo $pcode2; ?>" maxlength="4" onkeyup="AjaxZip2.zip2addr('pcode1','pref','address','pcode2');" />&nbsp;(半角数字)</td>
                				</tr>
                			<tr>
                				<td>都道府県</td>
                				<td><?php echo $htmlObj->get_select("pref",$pref,$arrObj->pref_arr); ?></td>
                				</tr>
                			<tr>
                				<td>市区町村・番地</td>
                				<td><input class="long" type="text" name="address" value="<?php echo $address; ?>" /></td>
                				</tr>
                			<tr>
                				<td style="border-bottom:none;">建物名・部屋番号</td>
                				<td style="border-bottom:none;"><input class="long" type="text" name="building" value="<?php echo $building; ?>" /></td>
                				</tr>
                			</table>
                		</td>
                	</tr>
				<tr>
					<td><span class="essential">メールアドレス</span></td>
					<td><input class="mode-disabled long" type="text" name="mail" value="<?php echo $mail; ?>" maxlength="200" /> (半角英数)</td>
				</tr>
				<tr>
					<td><span class="essential">電話番号</span></td>
					<td><input class="mode-disabled" type="text" name="tel" value="<?php echo $tel; ?>" maxlength="13" /> (半角数字)</td>
				</tr>
                
                <tr>
                	<td height="60">備考・その他</td>
                	<td><textarea name="comment"><?php echo $comment; ?></textarea></td>
                </tr>
                <tr style="background:#F1F1F1;">
					<td height="60">アンケート(任意)</td>
					<td>ご計画に役立てるための情報を、可能な限りで構いませんのでご協力ください</td>
				</tr>
                
                <tr>
					<td>計画内容について</td>
					<td style="padding:0;">
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td width="25%">計画予定地の所在地</td>
								<td width="75%"><input type="text" name="place" value="<?php echo $place; ?>" /></td>
							</tr>
                            <tr>
								<td>計画予定地の坪数</td>
								<td><input type="text" name="extend" value="<?php echo $extend; ?>" /></td>
							</tr>
                            <tr>
								<td>計画予算</td>
								<td><input type="text" name="budget" value="<?php echo $budget; ?>" /></td>
							</tr>
                            <tr>
								<td style="border-bottom:none;">計画予定時期</td>
								<td style="border-bottom:none;"><input type="text" name="time" value="<?php echo $time; ?>" /></td>
							</tr>
						</table>
                    </td>
				</tr>
                
                <tr>
                	<td>お客様について</td>
                	<td style="padding:0;">
                		<table border="0" cellpadding="0" cellspacing="0" width="100%">
                			<tr>
                				<td width="25%">性別</td>
                				<td width="75%">
									<table width="400" border="0" cellspacing="0" cellpadding="0">
                						<tr>
                							<td width="20" style="border-bottom:none; padding:0;"><input type="radio" name="sex" id="male" value="男性" <?php echo $male; ?> /></td>
                							<td width="75" style="border-bottom:none; padding:0;"><label for="male">男性</label></td>
                							<td width="20" style="border-bottom:none; padding:0;"><input type="radio" name="sex" id="female" value="女性" <?php echo $female; ?> /></td>
                							<td width="285" style="border-bottom:none; padding:0;"><label for="female">女性</label></td>
										</tr>
									</table>
								</td>
                			</tr>
                			<!--<tr>
                				<td>年齢</td>
                				<td><input class="mode-disabled" type="text" name="age" style="width:50px;" value="<?php echo $age; ?>" maxlength="2" /> 歳(半角数字)</td>
                			</tr>-->
                			<tr>
                				<td>職業</td>
                				<td><input type="text" name="job" value="<?php echo $job; ?>" /></td>
                				</tr>
                			<tr>
                				<td>勤務先</td>
                				<td><input type="text" name="company" value="<?php echo $company; ?>" /></td>
                			</tr>
                			<tr>
                				<td style="border-bottom:none;">備考・その他</td>
                				<td style="border-bottom:none;"><textarea name="etc"><?php echo $etc; ?></textarea></td>
                			</tr>
                		</table>
                	</td>
                </tr>
                
                <tr>
                	<td colspan="2" align="center" style="border-bottom:none; padding:0;">
                		
						<div class="pp-text">
							<h3>【個人情報の取扱いについて】</h3>
							<p class="mt30">当社は、個人情報保護に関する法令を遵守し、その取扱及び保護等について、個人情報保護法の規定に基づき、下記のとおりご説明いたします。</p>
							<p class="mt20">1.個人情報の利用目的</p>
							<p>当社は、利用目的の範囲内で個人情報を利用します。また、以下の利用目的の範囲を超えて個人情報を利用する場合には、ご本人にその旨を事前に通知し、ご意向を確認させていただきます。</p>
							
							<p class="mt10">【オーナー様】賃料査定・資料請求・市場調査・物件のお問い合わせ</p>
							<p class="mt5">①物件情報を取引の相手方探索のために利用します。<br>②物件情報をインターネット、チラシ等広告をするために利用します。<br>③物件情報を、取引の相手方探索のため指定流通機構の物件検索システム（レインズ）に登録する場合があります。なお契約後、指定流通機構（宅地建物取引業法により、国土交通大臣の指定を受けた機構。）に対し、成約情報（成約情報は、成約した物件の、物件概要、契約年月日、成約価格などの情報で、氏名は含みません。）を提供します。指定流通機構は、物件情報及び成約情報を指定流通機構の会員たる宅地建物取引業者や公的な団体に電子データや紙媒体で提供することなどの宅地建物取引業法に規定された指定流通機構の業務のために利用します。<br>④不動産の売買契約又は賃貸契約の相手方を探索すること及び売買、賃貸借、仲介、管理等の契約を締結し、契約に基づく役務を提供することに利用します。<br>⑤お客様との契約の履行、賃貸取引にあっては契約管理、売買取引にあっては契約後の管理・アフターサービス実施のため利用します。<br>⑥当社の他の不動産物件におけるサービスの紹介並びにお客様にとって有用と思われる当社提携先の商品・サービス等を紹介するためのダイレクトメールの発送等のために、お客様の個人情報のうち住所、氏名、電話番号、メールアドレスの情報を利用させていただきます。このための利用は、お客様からの申し出により取り止めます。
		⑦管理が伴う場合には、マンション等の管理組合で締結した管理委託契約業務履行のため利用します。<br>⑧上記①から⑦の業務に付随する、お客様にとって有用と思われる当社及び提携先のご案内や商品の発送、関連するアフターサービス、また、管理においてのメンテナンス等の業務に関するお知らせ等に利用します。<br>⑨不動産の売買、賃貸等に関する価格査定に利用します。価格査定に用いた成約情報は、宅地建物取引業法第34条の2第2項に規定する「意見の根拠」として仲介の依頼者に提供することがあります。<br>⑩下記２記載の第三者に提供します。</p>
							<p class="mt10">【一般のお客様】物件のお問い合わせについて</p>
							<p class="mt5">①物件情報を取引の相手方探索のために利用します。<br>②不動産の売買契約又は賃貸契約の相手方を探索すること及び売買、賃貸借、仲介、管理等の契約を締結し、契約に基づく役務を提供することに利用します。<br>③お客様との契約の履行、賃貸取引にあっては契約管理、売買取引にあっては契約後の管理・アフターサービス実施のため利用します。<br>④当社の他の不動産物件におけるサービスの紹介並びにお客様にとって有用と思われる当社提携先の商品・サービス等を紹介するためのダイレクトメールの発送等のために、お客様の個人情報のうち住所、氏名、電話番号、メールアドレスの情報を利用させていただきます。このための利用は、お客様からの申し出により取り止めます。<br>⑤上記、①から④の業務に付随する、お客様にとって有用と思われる当社及び提携先のご案内や商品の発送、関連するアフターサービス、また、管理においてのメンテナンス等の業務に関するお知らせ等に利用します。<br>⑥下記２記載の第三者に提供します。</p>
							<p class="mt10">【相談するフォーム】各種問い合わせ</p>
							<p class="mt5">①広告、ＷＥＢサイトのサービスに関するご意見、ご要望に回答するために利用します。<br>②当社の顧客からのご意見、ご要望、クレーム情報に対応させていだだくために利用します。</p>
							<p class="mt10">【Entryフォーム】採用・求人について</p>
							<p class="mt5">当社において、新卒採用、中途採用の選考・決定および通知を目的として個人情報を利用します。</p>
							<p class="mt10">【不動産会社様専用サイト】仲介業者様</p>
							<p class="mt5">①サービスに関するご連絡をするために利用します。<br>②サービスを実施するために利用します。<br>③当社管理物件のご案内のために利用します。</p>
							<p class="mt10">【不動産販売 会員登録】売買物件をお探しのお客様</p>
							<p class="mt5">①サービスに関して優先的に情報を提供するために利用します。<br>②サービスを実施するために利用します。<br>③会員サイトの閲覧を可能にするために利用します。</p>
							
							<p class="mt20">2.個人情報の第三者への提供</p>
							<p>当社が保有する個人情報は、お客様との契約の履行、賃貸取引にあっては契約管理、売買取引にあっては契約後の管理・アフターサービスの実施、その他お客様にとって有用と思われる当社取引先の商品・サービス等の紹介のため、業務の内容に応じて、氏名、住所、電話番号、生年月日、不動産物件情報、成約情報を、書面、郵便物、電話、インターネット、電子メール、広告媒体等で次の①～⑪記載事項について第三者に提供します。</p>
							<p class="mt20">①お客様が同意されている場合。<br>②お客様から委託を受けた事項についての契約の相手方となる者、その見込者。<br>③他の宅地建物取引業者。<br>④インターネット広告、その他広告の掲載事業者及び団体。<br>⑤指定流通機構（専属専任媒介契約、専任媒介契約が提携された場合には、宅地建物取引業法に基づき、指定流通機構への登録及び成約情報の通知が宅地建物取引業者に義務付けられます。）<br>⑥登記に関する司法書士、土地家屋調査士。<br>⑦融資等に関する金融機関関係。<br>⑧対象不動産についての管理の必要がある場合における管理業者。<br>⑨当社の管理が生じる場合は、管理委託契約の重要事項説明書に定める業務委託先及び管理費引き落としの際の振込先金融機関、管理組合役員。<br>⑩入居希望者様の信用照会のための信用情報機関（必要な場合）。<br>⑪入居者様が賃料を滞納した場合の滞納取立者。</p>
							<p class="mt20">3.個人情報処理の外部委託</p>
							<p>当社が保有する個人データの扱いの全部または一部について外部委託をするときは、必要な契約を締結し、適切な管理・監督を行います。</p>
							<p class="mt20">4.個人情報の保護対策</p>
							<p>①当社の従業者に対して個人情報保護のための教育を定期的に行い、お客様の個人情報を厳重に管理いたします。<br>②当社のデータベース等に対する必要な安全管理措置を実施いたします。</p>
							<p class="mt20">5.個人情報の利用目的の通知、開示、内容の訂正、追加又は削除、利用の停止、第三者への提供の停止について</p>
							<p>当社保有の個人情報について、お客様ご自身または代理人より所定の方法にて利用目的の通知、開示、内容の訂正、追加又は削除、利用の停止、
		第三者への提供の停止のご請求をいただいた場合は、請求者がご本人であることを確認させていただいた上で、合理的な期間及び範囲で対応いたします。ただし、利用停止や消去により、不本意ながらご要望に沿ったサービスができなくなることがありますので、あらかじめご了承の上ご請求下さい。</p>
							<p class="mt20">①開示する個人情報<br>不動産売買業、不動産賃貸業、不動産仲介業、不動産管理業等の取引に関する個人情報<br>②開示対象個人情報利用目的<br>上記「1.個人情報の利用目的」をご参照下さい。<br>③取扱に関する苦情窓口<br>株式会社S-FIT　総務部　<br>〒106-6014 東京都港区六本木1-6-1 泉ガーデンタワー14F<br>TEL：03-5797-7030（受付時間　平日10:00-17:00）<br>④当社が所属する認定個人情報保護団体<br>一般財団法人 日本情報経済社会推進協会 TEL：03-5860-7563<br>⑤開示等請求手続き方法<br>「開示等のお申し出」をされる場合には、当社所定の「個人情報開示等請求書」に所定の事項をすべてご記入の上、本人確認書類（※1）、代理の場合は代理人確認書類（※2）、手数料と共に窓口に直接ご提出いただくか、ご郵送下さい。なお、「個人情報開示等請求書」は、当社ホームページからダウンロードするか、③の苦情窓口にお申し出下さい。（※1）本人確認書類：運転免許証、パスポート、健康保険証、外国人登録証明書、年金手帳、写真付き住民基本台帳カードのいずれか1点の写し（※2）代理人補任確認書類：委任状、運転免許証、パスポート、健康保険証、外国人登録証明書、年金手帳、写真付き住民基本台帳カードのいずれか1点の写し<br>⑥手数料<br>開示等の請求に対して、1件につき1,050円（税込）を手数料としてお支払いただき、入金確認後の対応とさせていただきます。</p>
							<p class="mt20">6.個人情報に関する苦情・相談について</p>
							<p>お客様より、個人情報取扱に関する各種お問い合せ及びご相談の窓口は下記のとおりです。</p>
							<p class="mt20">【各種お問い合わせ・相談窓口】<br>株式会社S-FIT 総務部<br>個人情報保護管理者 小山義信<br>TEL：03-5797-7030 / FAX：03-5797-7031<br>e-mail：info@sfit.co.jp</p>
							<p class="mt20">7.個人情報を与えることの任意性</p>
							<p>個人情報について、当社に提供することについては任意です。ただし、個人情報を与えなかった場合、当社は前述の利用目的を遂行することが出来なくなり、当社のサービス等を受けられなくなる恐れがあります。</p>
							<p class="mt20">平成28年9月21日</p>
							<p class="mt20" style="padding-bottom:20px;">〒106－6014<br>東京都港区六本木1-6-1 泉ガーデンタワー14F<br>株式会社S-FIT<br>代表取締役　　紫原　友規</p>
						</div>
						
						<p style="margin-top:20px;"><input type="checkbox" value="1" id="privacy" name="privacy" <?=$privacy;?> /><label for="privacy">個人情報保護方針に同意する</label></p>
                		
                		<div style="margin-top:20px;">
							<a href="javascript:;" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('check','','image/btn_check_on.png',0)"><input type="image" src="image/btn_check.png" width="220" height="50" id="check" name="_check" alt="入力内容を確認する"></a>
						</div></td>
                	</tr>
			</table>
		</form>
		<?php
		endif;
		?>
	</div>
	
</div>
<!-- [ /contents ] -->

<!-- [ totop ] -->
<div class="totop">
	<p><a href="javascript:;" id="toPageTop">PAGE TOP</a></p>
</div>
<!-- [ /totop ] -->

<!-- [ footer ] -->
<footer>
	<p class="copy">Copyright &copy; 2013 S-FIT CO,.LTD. All rights reserved.</p>
</footer>
<!-- [ /footer ] -->

</div>
<!-- [ GOOGLE ANALYTICS ] -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-5393541-23']);
_gaq.push(['_trackPageview']);

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script><!-- [ /GOOGLE ANALYTICS ] -->

<!-- [ GOOGLE REMARKETING ] -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 988722821;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/988722821/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript><!-- [ /GOOGLE REMARKETING ] -->

<!-- [ Yahoo! REMARKETING 2013/11/19 ] -->
<script type="text/javascript" language="javascript">
var yahoo_retargeting_id = 'A69M07OTUX';
var yahoo_retargeting_label = '';
</script>
<script type="text/javascript" language="javascript" src="//b92.yahoo.co.jp/js/s_retargeting.js"></script><!-- [ Yahoo! REMARKETING ] -->

<!-- [ Logicad conversion 2013/11/28 ] -->
<script type="text/javascript">var smnAdvertiserId = '00000907';</script><script type="text/javascript" src="//cd-ladsp-com.s3.amazonaws.com/script/conv.js">
</script><!-- [ /logicad conversion ] -->

<!-- [ Logicad retargeting 2013/11/28 ] -->
<script type="text/javascript">var smnAdvertiserId = '00000907';</script><script type="text/javascript" src="//cd-ladsp-com.s3.amazonaws.com/script/pixel.js">
</script><!-- [ /logicad retargeting ] -->

</body>
</html>