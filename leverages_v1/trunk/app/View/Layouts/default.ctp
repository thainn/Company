
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja"><!-- InstanceBegin template="/Templates/master.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="text/javascript" />
<!-- InstanceBeginEditable name="doctitle" -->
<title><?php if($page_title){ echo $page_title;}?></title>
<meta name="keywords" content="レバレジーズ,leverages,岩槻,知秀,IT,ベンチャー,システム,メディア,モバイル,人材紹介,ソーシャル,アプリ開発,採用,新卒,中途" />
<meta name="description" content="レバレジーズ株式会社はWebシステム・モバイルシステム・ソーシャルアプリの開発とメディア構築、人材紹介を得意とする会社です。トップページには、会社情報、事業領域、パートナー募集、採用情報、お問合せなどを掲載しています。" />
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl');?>frontend/css/import.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl');?>frontend/css/print.css" media="print" />
<script type="text/javascript" src="<?php echo Configure::read('baseurl');?>frontend/js/jquery_easing_ver1.3.js"></script>
<script type="text/javascript" src="<?php echo Configure::read('baseurl');?>frontend/js/library.js"></script>
<!-- InstanceBeginEditable name="head" -->

<!-- InstanceEndEditable --><!-- InstanceParam name="logo" type="boolean" value="true" --><!-- InstanceParam name="side_company" type="boolean" value="false" --><!-- InstanceParam name="side_service" type="boolean" value="false" --><!-- InstanceParam name="side_privacy" type="boolean" value="false" -->
</head>

<body>
<div id="Container">
<a id="Top" name="Top"></a>
<div class="nonvisual-menu">
<dl><dt>ページ内を移動するためのリンクです。</dt><dd><ul><li><a href="#main-Contents">メインコンテンツへ移動</a></li></ul></dd></dl>
<!-- .nonvisual-menu // --></div>

<!-- 
//////////////////////////////////////////////////////////////////////////////
Header
//////////////////////////////////////////////////////////////////////////////
--> 
<div id="Header"><!--aaaa-->
<h1><a href="<?php echo Configure::read('baseurl');?>"><img src="<?php echo Configure::read('baseurl');?>frontend/images/header_logo3.png" width="217" height="28" alt="Leverages レバレジーズ株式会社 Global Solution" /></a></h1>

<ul id="GlobalNavi" class="all-rover">
<li><a href="<?php echo Configure::read('baseurl');?>"><img src="<?php echo Configure::read('baseurl');?>frontend/images/header_navi_g01.gif" width="55" height="28" alt="Home" id="navi_g01" /></a></li>
<li><a href="<?php echo Configure::read('baseurl');?>visions/"><img src="<?php echo Configure::read('baseurl');?>frontend/images/header_navi_g02.gif" width="57" height="28" alt="Profile" id="navi_g02" /></a></li>
<li><a href="<?php echo Configure::read('baseurl');?>services/"><img src="<?php echo Configure::read('baseurl');?>frontend/images/header_navi_g03.gif" width="67" height="28" alt="Service" id="navi_g03" /></a></li>
<li><a href="<?php echo Configure::read('baseurl');?>news/"><img src="<?php echo Configure::read('baseurl');?>frontend/images/header_navi_g04.gif" width="55" height="28" alt="News" id="navi_g04" /></a></li>
<li><a href="<?php echo Configure::read('baseurl');?>recruits/"><img src="<?php echo Configure::read('baseurl');?>frontend/images/header_navi_g06.gif" width="63" height="28" alt="Recruit" id="navi_g06" /></a></li>
</ul>
<ul class="contact all-rover">
<li><a href="<?php echo Configure::read('baseurl');?>contacts/"><img src="<?php echo Configure::read('baseurl');?>frontend/images/header_btn_contact.gif" width="60" height="9" alt="CONTACT" id="btn_contact" /></a></li>
<li><a href="<?php echo Configure::read('baseurl');?>sitemaps/"><img src="<?php echo Configure::read('baseurl');?>frontend/images/header_btn_sitemap.gif" width="59" height="9" alt="SITEMAP" id="btn_sitemap" /></a></li>
<!-- .contact // --></ul>
<!-- #Header // --></div>

<!-- 
//////////////////////////////////////////////////////////////////////////////
Content
//////////////////////////////////////////////////////////////////////////////
-->

<?php

	echo $this->fetch('content');
?>

<!-- 
//////////////////////////////////////////////////////////////////////////////
Footer
//////////////////////////////////////////////////////////////////////////////
--> 
<div id="Footer">
<div class="footer-inside">
<ul id="FooterNavi" class="all-rover">
<li><a href="<?php echo Configure::read('baseurl');?>visions/"><img src="<?php echo Configure::read('baseurl');?>frontend/images/footer_navi_f01.gif" width="40" height="11" alt="会社情報" id="navi_f01" /></a></li>
<li><a href="<?php echo Configure::read('baseurl');?>services/"><img src="<?php echo Configure::read('baseurl');?>frontend/images/footer_navi_f02.gif" width="39" height="11" alt="事業領域" id="navi_f02" /></a></li>
<li><a href="<?php echo Configure::read('baseurl');?>news/"><img src="<?php echo Configure::read('baseurl');?>frontend/images/footer_navi_f03.gif" width="39" height="11" alt="ニュース" id="navi_f03" /></a></li>
<li><a href="<?php echo Configure::read('baseurl');?>recruits/"><img src="<?php echo Configure::read('baseurl');?>frontend/images/footer_navi_f05.gif" width="39" height="11" alt="採用情報" id="navi_f05" /></a></li>
<li><a href="<?php echo Configure::read('baseurl');?>sitemaps/"><img src="<?php echo Configure::read('baseurl');?>frontend/images/footer_navi_f07.gif" width="57" height="11" alt="サイトマップ" id="navi_f07" /></a></li>
<li><a href="<?php echo Configure::read('baseurl');?>contacts/"><img src="<?php echo Configure::read('baseurl');?>frontend/images/footer_navi_f08.gif" width="57" height="11" alt="お問い合わせ" id="navi_f08" /></a></li>
<!-- #FooterNavi // --></ul>

<p><img src="<?php echo Configure::read('baseurl');?>frontend/images/footer_logo1.png" width="160" height="17" alt="Leverages レバレジーズ株式会社 Global Solution" /></p>
<address><img src="<?php echo Configure::read('baseurl');?>frontend/images/footer_copyright.gif" width="260" height="9" alt="Copyright &copy; 2004-2011 leverages Inc. All Rights Reserved." /></address>
<!-- .footer-inside // --></div>
<!-- #Footer // --></div>

<!-- #Container // --></div><?php echo $this->element('sql_dump'); ?>
</body>
<!-- InstanceEnd --></html>
