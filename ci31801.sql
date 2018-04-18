-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?04 ??18 ??13:48
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ci31801`
--

-- --------------------------------------------------------

--
-- 表的结构 `ci_document`
--

CREATE TABLE IF NOT EXISTS `ci_document` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `documentcate_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '分類ID',
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL COMMENT '標題',
  `sort` int(10) unsigned NOT NULL COMMENT '排序',
  `addtime` int(10) unsigned NOT NULL COMMENT '添加時間',
  `content` text COLLATE utf8_unicode_ci NOT NULL COMMENT '內容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `ci_document`
--

INSERT INTO `ci_document` (`id`, `documentcate_id`, `name`, `sort`, `addtime`, `content`) VALUES
(1, 8, '中重慶2018民營企業招聘周在合川啟動 80餘企業參會提供崗位5000餘個', 1111, 1523974607, '11111'),
(3, 4, '中印度發生貨車墜橋事故 造成至少20人死30人受傷 ', 10, 1523966594, 'b0011'),
(4, 8, '中吉方因中吉合資冶鍊廠縱火事件拘捕１５人', 12, 1524037998, 'a002'),
(5, 6, '中大興法院庭審首次啟用「人臉識別」', 4, 1524038019, 'a03'),
(6, 4, '中法外交部：敘利亞杜馬化武襲擊證據可能已經消失 ', 10, 1524038034, 'a04'),
(7, 4, '中全球航空公司支持無人機登記計劃 改善飛行安全 ', 12, 1524038044, 'a05'),
(8, 4, '中三名查德士兵在與極端組織「博科聖地」衝突中遇害 ', 10, 1524038073, 'b02'),
(9, 4, '中英國家審計署報告：英軍正面臨十年內最嚴重缺人狀況', 3, 1524038084, 'b03'),
(10, 4, '中美澳先後對中國產輪轂發起雙反調查', 10, 1524038101, '美澳先後對中國產輪轂發起雙反調查'),
(11, 4, '中國際貨幣基金組織和世界銀行上調巴西經濟增長預期', 10, 1524038131, 'b06'),
(12, 4, '中財經觀察：世界經濟復甦下的三道暗流 ', 2, 1524038162, 'c02'),
(13, 4, '中澳大利亞對中國鐵道輪轂發起反傾銷反補貼調查', 4, 1524038209, 'c04'),
(14, 4, '人選民登記5月2日截止 選舉事務處已向5.7萬選民發信查訊', 10, 1524047574, '人選民登記5月2日截止 選舉事務處已向5.7萬選民發信查訊'),
(15, 4, '人女童發燒哭鬧 遭狠母與同居男虐打罰站2天更不准吃喝', 10, 1524047591, '人女童發燒哭鬧 遭狠母與同居男虐打罰站2天更不准吃喝'),
(17, 8, '兩岸測試01', 10, 1524053475, '兩岸測試01'),
(18, 8, '兩岸02', 10, 1524053856, '兩岸02'),
(19, 4, '國際測試01', 10, 1524053870, '國際測試01'),
(24, 8, '記住，人生只有3發子彈', 10, 1524058621, '<strong>\r\n<h1>\r\n	<div class="articletitle" style="margin:0px 0px 8px;padding:0px;font-family:&quot;Times New Roman&quot;;font-size:medium;background-color:#FFFFFF;">\r\n		<h1 style="font-size:19px;color:#FF9900;font-family:Verdana, Arial, 新細明體, sans-serif;">\r\n			記住，人生只有3發子彈\r\n		</h1>\r\n<span class="subtitle" style="font-size:15px;color:#FDB03E;font-family:Verdana, Arial, 新細明體, sans-serif;"></span>\r\n	</div>\r\n文／編輯部&emsp;圖／攝影組\r\n	<div class="clear" style="font-family:&quot;Times New Roman&quot;;font-size:medium;background-color:#FFFFFF;">\r\n	</div>\r\n	<div id="googleads_w468h60_n1_MBF" style="font-family:Verdana, Arial, Helvetica, sans-serif;margin:5px 16px 10px;padding:0px 0px 0px 6px;font-size:medium;background-color:#FFFFFF;">\r\n	</div>\r\n	<div class="clear" style="font-family:&quot;Times New Roman&quot;;font-size:medium;background-color:#FFFFFF;">\r\n	</div>\r\n	<div class="artpicl" id="articlecont" style="font-family:&quot;Times New Roman&quot;;font-size:medium;background-color:#FFFFFF;">\r\n		<div class="lepic" style="margin:4px 15px 5px;padding:5px;border:1px solid #CCCCCC;text-align:center;">\r\n			<img src="http://news.sina.com.tw/magazine/images/article-1-250x0-1438679336981.jpg" id="rs" border="0" />\r\n		</div>\r\n	</div>\r\n<span id="iclickAdBody_Start" style="font-family:&quot;Times New Roman&quot;;font-size:medium;background-color:#FFFFFF;"></span><span style="font-family:&quot;Times New Roman&quot;;font-size:medium;background-color:#FFFFFF;"></span>\r\n	<div class="pcont" style="margin:0px 15px 18px 22px;padding:0px;font-size:medium;color:#666666;font-family:新細明體, &quot;Times New Roman&quot;, Times, serif;background-color:#FFFFFF;">\r\n		<p>\r\n			&nbsp;畢業於台灣大學財務金融學系畢業的林宛靜，捨棄穩定的金融業飯碗，選擇在二十出頭的年紀創業。她從任職AppWorks之初創投的投資經理開始，協助創業團隊募資。接下來，創立Sudo網路媒合平台，專注於電子商務界的人才媒合。如何打入一個與原先所學不不相關的領域，還能闖出一片天？林宛靜從摸索中找出解答。\r\n		</p>\r\n		<p class="MsoNormal">\r\n			&nbsp;\r\n		</p>\r\n		<p class="MsoNormal">\r\n			2010年的冬天，有個女生站在台大綜合體育館的外面流眼淚，她對自己的人生感到徬徨無助，因為即使經過大學4年，參與不同社團、累積不同經驗，長期探索下來，她仍然不知道她自己是誰、想做些什麼。這就是當時我的心情，對於未來一片茫然。\r\n		</p>\r\n		<p class="MsoNormal">\r\n			&nbsp;\r\n		</p>\r\n		<p class="MsoNormal">\r\n			台中女中畢業後，我順利考上台大財金系，進入銀行體系工作。一路走來，我似乎走在一條人人欽羨的軌道上，但我每晚都在問自已：這真的是我想要的嗎？這裡就是能夠發揮我最大能力的地方嗎？於是在銀行工作一年半的某天，我的腦袋彷彿斷了線，決定冒險踏入創業的領域，那年我23歲。\r\n		</p>\r\n		<p class="MsoNormal">\r\n			&nbsp;\r\n		</p>\r\n		<p class="MsoNormal">\r\n			<b>30</b><b>歲是一道「被定義」的關卡</b>\r\n		</p>\r\n		<p class="MsoNormal">\r\n			&nbsp;\r\n		</p>\r\n		<p class="MsoNormal">\r\n			我離開銀行，加入AppWorks，卸下光鮮亮麗的銀行界生活。我穿上T恤、夾腳拖，參與籌畫上百次募資活動，我發現，這條創業路是我所嚮往的。\r\n		</p>\r\n		<p class="MsoNormal">\r\n			&nbsp;\r\n		</p>\r\n		<p class="MsoNormal">\r\n			6年過去，我悟出一個道理，同時也要送給想創業的年輕世代：請記得你的人生只有3發子彈。在你到30歲前，你只有3次機會。\r\n		</p>\r\n		<p class="MsoNormal">\r\n			&nbsp;\r\n		</p>\r\n		<p class="MsoNormal">\r\n			我現在所創立的Sudo，一天要看上千封履歷，其中有25歲、30歲甚至40歲的人，我可以非常肯定地告訴大家：30歲左右，不論自己願意與否，你的人生都會「被定義」。屆時，你履歷表上的一切，或是你所留下的痕跡，將會決定你是個怎麼樣的人，在往後30歲到60歲當中，你會怎麼往上爬。\r\n		</p>\r\n		<p class="MsoNormal">\r\n			&nbsp;\r\n		</p>\r\n		<p class="MsoNormal">\r\n			經常有學生問我，應該玩社團還是要雙主修？那些都不過是眼前的選擇。鮮少有人告訴我，「我不想要做……，我想專注於……。」我認為，如果在30歲以前找不到渴望的路，沒辦法為夢想打下基石，未來也很難再找到機會。\r\n		</p>\r\n	</div>\r\n</h1>\r\n</strong><span style="font-family:&quot;Times New Roman&quot;;font-size:15px;"><br />\r\n<a href="http://news.sina.com.tw/article/20180418/26539372.html"></a><a href="http://news.sina.com.tw/article/20180418/26539372.html"></a></span>');

-- --------------------------------------------------------

--
-- 表的结构 `ci_documentcate`
--

CREATE TABLE IF NOT EXISTS `ci_documentcate` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '父類ID',
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '分類名稱',
  `sort` smallint(5) unsigned NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `ci_documentcate`
--

INSERT INTO `ci_documentcate` (`id`, `pid`, `name`, `sort`) VALUES
(4, 9, '國際即時新聞', 1),
(7, 6, 'cccc', 3),
(8, 0, '國內即時新聞', 1);

-- --------------------------------------------------------

--
-- 表的结构 `ci_user`
--

CREATE TABLE IF NOT EXISTS `ci_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '用戶名',
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '密碼',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '狀態',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `ci_user`
--

INSERT INTO `ci_user` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '8e36e8014ee6e6fb07f500ffd19c3bd0', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
