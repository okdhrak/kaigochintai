<?php
//-----↓-----クラス定義-----↓-----//
/* リセット */
class param_reset{
	public $mailTo = "sn@sfit.co.jp";//
	public $mailBcc = "form@sfit.co.jp";
	public $mailSubject = "【 介護賃貸 -セミナーお申込み- 】";
	public $mailCharset = "UTF-8";
	public $thankPage = "thank.php";
	public $serverName = "localhost";//
	
	public $seminarDate = "";
	public $seminarTitle = "";
	
	public $seminar_arr = array(
		'20151128' => array('date' => '平成27年11月28日(土)', 'title' => '住友不動産の賃貸住宅経営 土地活用フォーラム'),
		'20151123' => array('date' => '平成27年11月23日(月・祝)', 'title' => '介護賃貸」｢ドクターズレントハウス｣がわかるセミナー＆個別相談会'),
		'20130330' => array('date' => '平成25年3月30日', 'title' => '相続・消費税10％対策セミナー＆個別相談会'),
		'20130414' => array('date' => '平成25年4月14日', 'title' => 'オーナーズスタイル主催 賃貸経営マル特春フェスタ')
	);
	
	function __construct($seminar_id){
		/*if ($this->serverName != $_SERVER['SERVER_NAME']){
			$this->mailTo = NULL;
			//exit;
		}*/
		$this->seminarDate = $this->seminar_arr[$seminar_id]['date'];
		$this->seminarTitle = $this->seminar_arr[$seminar_id]['title'];
	}
	
	function get_seminarDate(){
		return $this->seminarDate;
	}
	function get_seminarTitle(){
		return $this->seminarTitle;
	}
}




/* 変数定義 */
class arr_define{
	public $pref_arr = array(
		"北海道","青森県","岩手県","宮城県","秋田県","山形県","福島県","茨城県","栃木県","群馬県",
		"埼玉県","千葉県","東京都","神奈川県","新潟県","富山県","石川県","福井県","山梨県","長野県",
		"岐阜県","静岡県","愛知県","三重県","滋賀県","京都府","大阪府","兵庫県","奈良県","和歌山県",
		"鳥取県","島根県","岡山県","広島県","山口県","徳島県","香川県","愛媛県","高知県","福岡県",
		"佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県"
	);
	public $month_arr = array(
		"1","2","3","4","5","6","7","8","9","10","11","12"
	);
	public $day_arr = array(
		"1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"
	);
	public $time_arr = array(
		"10","11","12","13","14","15","16","17","18","19"
	);
}

/* 関数定義 */
class func{
	
	public $flg = 0;
	public $error = NULL;
	
	function err_exe($val){
		$this->flg = 1;
		$this->error[] = $val;
	}
	
	function novalue($val){
		$return_text = $val != "" ? $val : "--" ;
		return $return_text;
	}
	
	function htmlspecial($val){
		$return_text = htmlspecialchars($val,ENT_QUOTES);
		return $return_text;
	}
	
	function nltobr($val){
		$return_text = nl2br($val);
		return $return_text;
	}
	
	function is_speace($text){
		if($text == ""){
			return true;
		}else{
			return false;
		}
	}
	
	function is_num($text){
		if (preg_match("/^[0-9\-]+$/",$text)){
			return true;
		}else {
			return false;
		}
	}
	
	function is_mail($email){
		if (preg_match('/^[a-zA-Z0-9_\.\-]+?@[A-Za-z0-9_\.\-]+$/',$email)){
			return true;
		}else{
			return false;
		}
	}
	
	function is_sameness($mail,$mail_check){
		if ($mail == $mail_check){
			return true;
		}else{
			return false;
		}
	}
	
	function create_err_mess(){
		if (isset($this->error)){
			$p_error_mess = implode ("<br />", $this->error);
			
$error_tr = <<< EOF
	<tr>
		<td style="color:#FF0000;">入力エラー</td>
		<td style="color:#FF0000; line-height:1.3em;">{$p_error_mess}</td>
	</tr>
EOF;

			return $error_tr;
		}
	}
}


/* HTML */
class html_define{
	//プルダウンの生成
	function get_select($name,$val,$arr){
		$input_tag = NULL;
		$input_tag .= "<select name=\"{$name}\">\n";
		$input_tag .= "<option value=\"\">--</option>\n";
		
		for ($i=0;$i<count($arr);$i++):
			if ($arr[$i]==$val):
			$input_tag .= "<option value=\"{$arr[$i]}\" selected=\"selected\">{$arr[$i]}</option>\n";
			else:
			$input_tag .= "<option value=\"{$arr[$i]}\">{$arr[$i]}</option>\n";
			endif;
		endfor;
		
		$input_tag .= "</select>\n";
		
		return $input_tag;
	}
}
//-----↑-----クラス定義-----↑-----//


//-----↓-----インスタンス生成-----↓-----//
/* パラメーター */
$paramObj = new param_reset($_GET['seminar_id']);
/* 配列 */
$arrObj = new arr_define();
/* 関数・変数 */
$funcObj = new func();
/* ページ設定 */
$htmlObj = new html_define();
//-----↑-----インスタンス生成-----↑-----//


//-----↓-----送信処理-----↓-----//
if (isset($_POST["_send_x"])):

//受信した値を変数へ代入
foreach ($_POST as $key => $val):
${$key} = $val;
endforeach;

//メール本文の作成
$mail_body .= "■www.kaigochintai.com WEBサイトよりセミナーのお申込みをいただきました。\n\n";

$mail_body .= "【セミナーについて】\n\n";

$mail_body .= "[ 開催日時 ]\n".$date."\n\n";
$mail_body .= "[ 参加セミナー ]\n".$title."\n\n";
$mail_body .= "[ 参加内容 ]\n".$style."\n\n";
$mail_body .= "[ 開催人数 ]\n".$people.'人'."\n\n";

$mail_body .= "--------------------------------------------------------------\n\n";

$mail_body .= "【お客様情報】\n\n";

$mail_body .= "[ 名前 ]\n".$sei.$mei."\n\n";
$mail_body .= "[ カナ ]\n".$seikana.$meikana."\n\n";
$mail_body .= "[ 郵便番号 ]\n".$pcode1.$pcode2."\n\n";
$mail_body .= "[ 都道府県 ]\n".$pref."\n\n";
$mail_body .= "[ 住所 ]\n".$address."\n\n";
$mail_body .= "[ 建物 ]\n".$building."\n\n";
$mail_body .= "[ E-mail ]\n".$mail."\n\n";
$mail_body .= "[ 電話 ]\n".$tel."\n\n";
$mail_body .= "[ お問い合わせ内容 ]\n".$comment."\n\n";

$mail_body .= "====================================================\n";
$mail_body .= "date:".date("Y/m/d(D)H:i:s",time())."\n";
$mail_body .= "host:".getHostByAddr(getenv('REMOTE_ADDR'))."\n\n";


//諸設定
$mail_to = $paramObj->mailTo;
$mail_form = $mail;
$mail_head = "From:$mail_form\n";
$mail_head .= "MIME-Version: 1.0 \n";
$mail_head .= "Bcc:$paramObj->mailBcc\n";
$mail_head .= "Content-Type: text/plain;charset=JIS\n";
$mail_head .= "X-mailer: PHP/" . phpversion();
$mail_subject = $paramObj->mailSubject.$paramObj->seminarDate.'開催';

//$文字コード = mb_detect_encoding($mail_body);
$mail_body = mb_convert_encoding($mail_body,"JIS",$paramObj->mailCharset);
$mail_subject = mb_convert_encoding($mail_subject,"JIS",$paramObj->mailCharset);

//送信
mb_language("Japanese");
mb_send_mail($mail_to,$mail_subject,$mail_body,$mail_head);

//スクリプト終了
//header("Location: thank.php");
echo "<script type=\"text/JavaScript\">location.replace(\"./thank.php\")</script>";
exit;

endif;
//-----↑-----送信処理-----↑-----//


//-----↓-----確認処理-----↓-----//
if (isset($_POST["_check_x"])):
	
	/* 受信した$_POST変数の処理 */
	foreach ($_POST as $key => $val){
		//可変変数に格納
		${$key} = $val;
		//送信用データを格納
		$postData .= "<input type=\"hidden\" name=\"$key\" value=\"$val\" />";
		
		//セミナーのスタイルをセレクト
		if ($key == "style") {
			if ($val=="セミナーのみ参加") {
				$seminar = "checked=\"checked\"";
			} elseif ($val=="セミナーと個別相談を希望") {
				$consult = "checked=\"checked\"";
			}
		}
		
	}
	
	/* 値のバリデーション */
	//プライバシー
	if ($privacy==1){
		$privacy = "checked=\"checked\"";
	}
	
	//参加日時
	if ($funcObj->is_speace($date) == true){
		$p_date = "--";
	} else {
		$p_date = $funcObj->htmlspecial($date);
	}
	
	//セミナータイトル
	if ($funcObj->is_speace($title) == true){
		$p_title = "--";
	} else {
		$p_title = $funcObj->htmlspecial($title);
	}
	
	//参加内容//
	if ($funcObj->is_speace($seminar) == true){
		$funcObj->err_exe ("セミナーの参加内容が未入力です");
	} else {
		$p_style = $funcObj->htmlspecial ($style);
	}
	
	//参加人数//
	if ($funcObj->is_speace($people) == true){
		$funcObj->err_exe ("セミナーの参加人数が未入力です");
	} else {
		$p_people = $funcObj->htmlspecial ($people.'人');
	}
	
	//氏名(漢字)//
	if ($funcObj->is_speace($sei.$mei) == true){
		$funcObj->err_exe ("お名前が未入力です");
	} else {
		$p_seimei = $funcObj->htmlspecial ($sei.$mei);
	}
	
	//氏名(カナ)//
	if ($funcObj->is_speace($seikana.$meikana) == true){
		$funcObj->err_exe ("ふりがなが未入力です");
	} else {
		$p_seimeikana = $funcObj->htmlspecial ($seikana.$meikana);
	}
	
	//郵便番号
	if ($funcObj->is_speace($pcode1.$pcode2) == true){
		$p_postnum = "--";
	} else {
		$p_postnum = $funcObj->htmlspecial($pcode1." - ".$pcode2);
	}
	
	//都道府県//
	if ($funcObj->is_speace($pref) == true){
		$funcObj->err_exe ("都道府県が未入力です");
	} else {
		$p_pref = $funcObj->htmlspecial ($pref);
	}
	
	//住所//
	if ($funcObj->is_speace($address) == true){
		$funcObj->err_exe ("住所が未入力です");
	} else {
		$p_address = $funcObj->htmlspecial ($address);
	}
	
	//建物名
	if ($funcObj->is_speace($building) == true){
		$p_building = "--";
	} else {
		$p_building = $funcObj->htmlspecial($building);
	}
	
	//メール//
	if ($funcObj->is_speace($mail) == true){
		$funcObj->err_exe ("E-mailアドレスが未入力です");
	} elseif (($funcObj->is_speace($mail)==false && $funcObj->is_mail($mail)==false)){
		$funcObj->err_exe ("E-mailアドレスの入力型式に誤りがあります");
	} else {
		$p_mail = $funcObj->htmlspecial ($mail);
	}
	
	//電話//
	if ($funcObj->is_speace($tel) == true){
		$funcObj->err_exe ("電話番号が未入力です");
	} elseif (($funcObj->is_speace($tel)==false && $funcObj->is_num($tel)==false)){
		$funcObj->err_exe ("電話番号の入力型式に誤りがあります");
	} else {
		$p_tel = $funcObj->htmlspecial ($tel);
	}
	
	//ご相談内容
	if ($funcObj->is_speace($comment) == true){
		$p_comment = "--";
	} else {
		$p_comment = $funcObj->nltobr($funcObj->htmlspecial($comment));
	}
	
	/* エラーメッセージ */
	$error_tr = $funcObj->create_err_mess();
	
endif;
//-----↑-----確認処理-----↑-----//
?>
