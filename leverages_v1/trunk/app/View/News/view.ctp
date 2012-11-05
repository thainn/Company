<link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl');?>css/recruit.css" media="all" />
<script type="text/javascript">
$(document).ready(function(){
	$.library.active({id:'navi_g04',type:'img'});

});
</script>
<div id="Content">
<a id="main-Contents" name="main-Contents"><img src="<?php echo Configure::read('baseurl');?>frontend/images/spacer.gif" alt="ここからメインコンテンツです" /></a>
<!-- InstanceBeginEditable name="title" -->
<h1 class="news"><img src="<?php echo Configure::read('baseurl');?>frontend/images/news/ttl_main.gif" width="132" height="20" alt="2011年｜ニュース｜レバレジーズ株式会社" /></h1>

<!-- InstanceEndEditable -->
<div id="Wrapper">


<div id="Main"><!-- InstanceBeginEditable name="main" -->
<div class="section" id="our">
<div class="title">
<h2 style="font-size:18px"><a href="<?php echo Configure::read('baseurl');?>news/">Tin tức</a> » <?php echo $data['title'];?></h2>
<!-- .title // --></div>
<br/>
<table border='0' width='100%'><tr><td><?php echo $data['content']?></td></tr></table>
</div>

<!-- InstanceEndEditable -->
<!-- #Main // --></div>

<div id="Side"><!-- InstanceBeginEditable name="localnavi" --><!-- InstanceEndEditable -->

<div class="section">
<h3><img src="<?php echo Configure::read('baseurl');?>frontend/images/side_ttl_comic.gif" width="47" height="20" alt="Comic" /></h3>
<ul class="all-rover">
<li><a href="/comic/index.html" target="_blank"><img src="<?php echo Configure::read('baseurl');?>frontend/images/side_bnr_comic.gif" width="200" height="65" alt="岩槻代表物語 代表・岩槻の起業までの物語" /></a></li>
</ul>
<!-- .section // --></div>
<div class="section">
<h3><img src="<?php echo Configure::read('baseurl');?>frontend/images/side_ttl_blog.gif" width="34" height="19" alt="Blog" /></h3>
<ul class="all-rover">
<li><a href="http://ameblo.jp/leverages/" rel="nofollow" target="_blank"><img src="<?php echo Configure::read('baseurl');?>frontend/images/side_bnr_blog_top.jpg" width="200" height="65" alt="Top Message 代表・岩槻知秀のブログ" /></a></li>
<li><a href="http://leverages.seesaa.net/" rel="nofollow" target="_blank"><img src="<?php echo Configure::read('baseurl');?>frontend/images/side_bnr_blog_staff.jpg" width="200" height="65" alt="Staff Blog 社員ブログ" /></a></li>

</ul>
<!-- .section // --></div>


<!--<div class="section" id="Campaign">
<h3><img src="<?php echo Configure::read('baseurl');?>frontend/images/side_ttl_campaign.gif" width="75" height="19" alt="Campaign" /></h3>
<p>キャンペーンの閲覧は、JavaScriptを有効にしてください。</p>-->
<!-- .section // --><!--</div>-->
<!-- #Side // --></div>

<p class="pagetop"><a href="#Top"><img src="<?php echo Configure::read('baseurl');?>frontend/images/main_pagetop.gif" width="75" height="20" alt="PageTop" class="rover" /></a></p>

<!-- #Wrapper // --></div>
<!-- #Content  // --></div>