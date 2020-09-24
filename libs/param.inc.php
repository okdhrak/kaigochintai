<?php
/**
 * 配列の設定
 *
 * @author Hiroaki Okada <okada@sfit.co.jp>
 */

class Param
{
	protected $arrMenuKaichin = array(
		1 => array('script_file' => '/kaichin/index.php', 'height' => 'h80', 'line' => 'solid', 'text' => '介護賃貸とは'),
		2 => array('script_file' => '/kaichin/about.php', 'height' => 'h80', 'line' => 'solid', 'text' => 'なぜ介護賃貸？'),
		3 => array('script_file' => '/kaichin/subsidy.php', 'height' => 'h80', 'line' => 'solid', 'text' => '助成金について'),
		4 => array('script_file' => '/kaichin/tax.php', 'height' => 'h80', 'line' => 'solid', 'text' => '相続税・節税対策について')
	);
	protected $arrMenuService = array(
		1 => array('script_file' => '/service/index.php', 'height' => 'h80', 'line' => 'solid', 'text' => '土地活用のご案内'),
		2 => array('script_file' => '/service/from70.php', 'height' => 'h80', 'line' => 'solid', 'text' => '70坪からの介護賃貸'),
		//3 => array('script_file' => '/service/from40_case.php', 'height' => 'h40', 'line' => 'solid', 'text' => '40坪からの介護賃貸 実績・事例紹介'),
		4 => array('script_file' => '/service/from150.php', 'height' => 'h80', 'line' => 'solid', 'text' => '150坪からの介護賃貸'),
		//5 => array('script_file' => '/service/from150_case.php', 'height' => 'h40', 'line' => 'solid', 'text' => '150坪からの介護賃貸 実績・事例紹介'),
		6 => array('script_file' => '/service/from250.php', 'height' => 'h80', 'line' => 'solid', 'text' => '250坪からの介護賃貸'),
		//7 => array('script_file' => '/service/from250_case.php', 'height' => 'h40', 'line' => 'solid', 'text' => '250坪からの介護賃貸 実績・事例紹介'),
		8 => array('script_file' => '/service/from400.php', 'height' => 'h80', 'line' => 'solid', 'text' => '400坪からの介護賃貸'),
		//9 => array('script_file' => '/service/from400_case.php', 'height' => 'h40', 'line' => 'solid', 'text' => '400坪からの介護賃貸 実績・事例紹介'),
		10 => array('script_file' => '/service/method.php', 'height' => 'h80', 'line' => 'solid', 'text' => '他の土地活用比較表'),
		11 => array('script_file' => '/service/plan.php', 'height' => 'h80', 'line' => 'solid', 'text' => '他の土地活用プラン'),
		12 => array('script_file' => '/service/home/index.php', 'height' => 'h80', 'line' => 'doted', 'text' => '介護施設の種類'),
		13 => array('script_file' => '/service/home/commute.php', 'height' => 'h40', 'line' => 'doted', 'text' => '通所系サービス'),
		14 => array('script_file' => '/service/home/shortstay.php', 'height' => 'h40', 'line' => 'doted', 'text' => 'ショートステイ'),
		15 => array('script_file' => '/service/home/grouphome.php', 'height' => 'h40', 'line' => 'doted', 'text' => 'グループホーム'),
		16 => array('script_file' => '/service/home/service.php', 'height' => 'h80', 'line' => 'doted', 'text' => 'サービス付き高齢者向け住宅'),
		//17 => array('script_file' => '/service/home/mansion.php', 'height' => 'h80', 'line' => 'doted', 'text' => '高齢者ケア対応型マンション'),
		18 => array('script_file' => '/service/home/home.php', 'height' => 'h40', 'line' => 'doted', 'text' => '有料老人ホーム')
	);
	protected $arrMenuProcess = array(
		1 => array('script_file' => '/process/index.php', 'height' => 'h80', 'line' => 'solid', 'text' => '手続き・業務について'),
		2 => array('script_file' => '/process/scheme.php', 'height' => 'h80', 'line' => 'solid', 'text' => 'スキーム・チーム紹介'),
		//3 => array('script_file' => '/process/finance.php', 'height' => 'h80', 'line' => 'solid', 'text' => '融資について'),
		4 => array('script_file' => '/process/question.php', 'height' => 'h80', 'line' => 'solid', 'text' => 'よくある質問 Q&A'),
		5 => array('script_file' => '/process/traders.php', 'height' => 'h80', 'line' => 'solid', 'text' => '施工会社様へ')
	);
	protected $arrMenuSeminar = array(
		1 => array('script_file' => '/seminar/index.php', 'height' => 'h80', 'line' => 'solid', 'text' => 'セミナー情報'),
	);
	protected $arrMenuMarketing = array(
		1 => array('script_file' => '/marketing/index.php', 'height' => 'h80', 'line' => 'solid', 'text' => 'GISマーケティングレポート'),
	);
	protected $arrMenuOther = array(
		1 => array('script_file' => '/case/index.php', 'height' => 'h80', 'line' => 'solid', 'text' => '事例紹介'),
		2 => array('script_file' => '/case/list_heiyou.php', 'height' => 'h80', 'line' => 'solid', 'text' => '介護賃貸併用'),
		3 => array('script_file' => '/case/list_day.php', 'height' => 'h80', 'line' => 'solid', 'text' => 'デイサービス'),
		4 => array('script_file' => '/case/list_group.php', 'height' => 'h80', 'line' => 'solid', 'text' => 'グループホーム'),
		5 => array('script_file' => '/interview/', 'height' => 'h80', 'line' => 'solid', 'text' => 'オーナーインタビュー'),
	);
	
	
	public function __construct()
	{
	}
	
	public function getMenu($category)
	{
		/*if ($category === 'service') {
			return $this->arrMenuService;
		}*/
		return @$this->{arrMenu.$category};
	}
	
}

//インスタンスの作成
$baseParam = new Param;
