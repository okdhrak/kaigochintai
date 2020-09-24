<?php
//-----↓-----クラス定義-----↓-----//
/* リセット */
class param_reset{
	public $mailTo = "sn@sfit.co.jp";//
	public $mailBcc = "form@sfit.co.jp";
	public $mailSubject = "【 介護賃貸 -LPお問合せ- 】";
	public $mailCharset = "UTF-8";
	public $thankPage = "thank.php";
	public $serverName = "localhost";//www.kaigochintai.com
	
	/*function __construct(){
		if ($this->serverName != $_SERVER['SERVER_NAME']){
			$this->mailTo = NULL;
			//exit;
		}
	}*/
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
	public $house_arr = array(
		"持家戸建","持家マンション","賃貸戸建","賃貸マンション・アパート","社宅・寮・官舎","同居","その他"
	);
	public $purpose_arr = array(
		"ご自身のお住まい","投資","セカンド","社宅","リゾート","家族のお住まい","事務所","店舗"
	);
	public $budget_arr = array(
		"～1,500万円","～2,000万円","～2,500万円","～3,000万円","～3,500万円",
		"～4,000万円","～4,500万円","～5,000万円","～5,500万円","～6,000万円",
		"～6,500万円","～7,000万円","～7,500万円","～8,000万円","8,000万円以上"
	);
	public $fund_arr = array(
		"10万円～","50万円～","100万円～","200万円～","300万円～",
		"400万円～","500万円～","600万円～","700万円～","800万円～",
		"1,000万円～","1,200万円～","1,500万円～","2,000万円～"
	);
	public $earn_arr = array(
		"～299万円","300万円～","400万円～","500万円～","600万円～",
		"700万円～","800万円～","1,000万円～","1,500万円～","2,000万円～"
	);
	public $family_arr = array(
		"1人","2人","3人","4人","5人以上"
	);
	public $job_arr = array(
		"会社経営者","会社役員","会社員","公務員","看護婦・看護士","病院事務","自由業","弁護士","会計士","税理士"
		,"その他自由業","自営業","サービス業","パート","アルバイト","主婦","学生","無職","その他"
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
$paramObj = new param_reset();
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
$mail_body .= "■www.kaigochintai.com LPよりお問合せをいただきました。\n\n";

$mail_body .= "[ 名前 ]\n".$sei.$mei."\n\n";
$mail_body .= "[ カナ ]\n".$seikana.$meikana."\n\n";
$mail_body .= "[ 郵便番号 ]\n".$postnum."\n\n";
$mail_body .= "[ 都道府県 ]\n".$pref."\n\n";
$mail_body .= "[ 住所 ]\n".$address."\n\n";
$mail_body .= "[ 建物 ]\n".$building."\n\n";
$mail_body .= "[ E-mail ]\n".$mail."\n\n";
$mail_body .= "[ 電話 ]\n".$tel."\n\n";

$mail_body .= "--------------------------------------------------------------\n\n";

$mail_body .= "【アンケート】\n\n";


$mail_body .= "[ 計画予定地の所在地 ]\n".func::novalue($place)."\n\n";
$mail_body .= "[ 計画予定地の坪数 ]\n".func::novalue($extend)."\n\n";
$mail_body .= "[ 計画予算 ]\n".func::novalue($budget)."\n\n";
$mail_body .= "[ 計画時期 ]\n".func::novalue($time)."\n\n";

$mail_body .= "[ 性別 ]\n".func::novalue($sex)."\n\n";
$mail_body .= "[ 年齢 ]\n".func::novalue($age)."\n\n";
$mail_body .= "[ 職業 ]\n".func::novalue($job)."\n\n";
$mail_body .= "[ 勤務先 ]\n".func::novalue($company)."\n\n";
$mail_body .= "[ 相談内容 ]\n".$comment."\n\n";


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
$mail_subject = $paramObj->mailSubject;

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
		
		//性別をセレクト
		if ($key == "sex") {
			if ($val=="男性") {
				$male = "checked=\"checked\"";
			} elseif ($val=="女性") {
				$female = "checked=\"checked\"";
			}
		}
		
	}
	
	
	/* 値のバリデーション */
	//プライバシー
	if ($privacy==1){
		$privacy = "checked=\"checked\"";
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
	
	//年齢//
	/*if ($funcObj->is_speace($age) == true){
		$funcObj->err_exe ("年齢が選択です");
	} elseif (($funcObj->is_speace($age)==false && $funcObj->is_num($age)==false)){
		$funcObj->err_exe ("年齢の入力型式に誤りがあります");
	} else {
		$p_age = $funcObj->htmlspecial ($age . "歳");
	}*/
	
	//性別//
	/*if ($funcObj->is_speace($sex) == true){
		$funcObj->err_exe ("性別が選択です");
	} else {
		$p_sex = $funcObj->htmlspecial ($sex);
	}*/
	
	//郵便番号
	if ($funcObj->is_speace($postnum) == true){
		$p_postnum = "--";
	} else {
		$p_postnum = $funcObj->htmlspecial($postnum);
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
	
	//計画予定地
	if ($funcObj->is_speace($place) == true){
		$p_place = "--";
	} else {
		$p_place = $funcObj->htmlspecial($place);
	}
	
	//計画予定地の坪数
	if ($funcObj->is_speace($extend) == true){
		$p_extend = "--";
	} else {
		$p_extend = $funcObj->htmlspecial($extend);
	}
	
	//計画予算
	if ($funcObj->is_speace($budget) == true){
		$p_budget = "--";
	} else {
		$p_budget = $funcObj->htmlspecial($budget);
	}
	
	//計画時期
	if ($funcObj->is_speace($time) == true){
		$p_time = "--";
	} else {
		$p_time = $funcObj->htmlspecial($time);
	}
	
	//性別
	if ($funcObj->is_speace($sex) == true){
		$p_sex = "--";
	} else {
		$p_sex = $funcObj->htmlspecial($sex);
	}
	
	//年齢
	if ($funcObj->is_speace($age) == true){
		$p_age = "--";
	} else {
		$p_age = $funcObj->htmlspecial($age."歳");
	}
	
	//職業
	if ($funcObj->is_speace($job) == true){
		$p_job = "--";
	} else {
		$p_job = $funcObj->htmlspecial($job);
	}
	
	//勤務先
	if ($funcObj->is_speace($company) == true){
		$p_company = "--";
	} else {
		$p_company = $funcObj->htmlspecial($company);
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
