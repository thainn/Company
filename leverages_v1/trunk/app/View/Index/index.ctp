<link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl');?>frontend/css/index.css" media="all" />
<script type="text/javascript" src="<?php echo Configure::read('baseurl');?>frontend/js/swfobject.js"></script> 
<script type="text/javascript">
$(document).ready(function(){
	$.library.active({id:'navi_g01',type:'img'});
	$.library.heights({target:'#Main div#our div.section-inside dl dd',row:2});
});
//swf
var flashvars = {};
var params = {
	quality:"high",
	scale:"noScale",
	allowScriptAccess:"always",
	base:"."
};
var attributes = {};
swfobject.embedSWF("http://leverages.jp/images/index/preloader.swf", "FlashContent" , "100%", "389", "9.0.0", "" ,flashvars, params, attributes);
</script>
<div id="Content">
<a id="main-Contents" name="main-Contents"><img src="<?php echo Configure::read('baseurl');?>frontend/images/spacer.gif" alt="ここからメインコンテンツです" /></a>
<!-- InstanceBeginEditable name="title" -->
<div id="Flash">
<div id="FlashContent">
<p style="text-align:center;"><img src="<?php echo Configure::read('baseurl');?>frontend/images/nonflash_img.jpg" alt="Leverages" /></p>
<!-- #FlashContent // --></div>
<!-- #Flash // --></div>
<!-- InstanceEndEditable -->
<div id="Wrapper">


<div id="Main"><!-- InstanceBeginEditable name="main" -->
<div class="section" id="our">
<div class="title">
<h2><img src="<?php echo Configure::read('baseurl');?>frontend/images/main_ttl_our.jpg" width="66" height="21" alt="Our Field" /></h2>
<!-- .title // --></div>
<div class="section-inside odd">
<p><a href="vision.html"><img src="<?php echo Configure::read('baseurl');?>frontend/images/main_img_our_profile.jpg" width="90" height="80" alt="" /></a></p>
<dl>
<dt><a href="<?php echo Configure::read('baseurl');?>visions/" style="font-size:12px">Profile</a></dt>
<dd>Mục tiêu・Giới thiệu・Philosophy・会社Lịch sử phát triển。<br />「Win-Win」の精神のもと、社会的意義のある活動を行っていきます。</dd>
</dl>
<!-- .section-inside // --></div>
<div class="section-inside">
<p><a href="#"><img src="<?php echo Configure::read('baseurl');?>frontend/images/main_img_our_service.jpg" width="90" height="80" alt="" /></a></p>
<dl>
<dt><a href="<?php echo Configure::read('baseurl');?>services/" style="font-size:12px">Service</a></dt>
<dd>営業、開発、マーケティングという同一リソースによって、IT、人材、メディアの3つの事業ドメインにおいて活動しております。</dd>
</dl>
<!-- .section-inside // --></div>
<div class="section-inside odd">
<p><a href="https://leverages.jp/partner/index.php"><img src="<?php echo Configure::read('baseurl');?>frontend/images/main_img_our_partnership.jpg" width="90" height="80" alt="" /></a></p>
<dl>
<dt><a href="news" style="font-size:12px">News</a></dt>
<dd>Mô tả ngắn về tin tức của công ty</dd>
</dl>
<!-- .section-inside // --></div>
<div class="section-inside">
<p><a href="<?php echo Configure::read('baseurl');?>recruits/"><img src="<?php echo Configure::read('baseurl');?>frontend/images/main_img_our_recruit.jpg" width="90" height="80" alt="" /></a></p>
<dl>
<dt><a href="<?php echo Configure::read('baseurl');?>recruits/" style="font-size:12px">Recruit</a></dt>
<dd>新卒採用・キャリア採用・エンジニア採用・長期インターンシップ。私たちと共に、次の時代を創っていきたい人を募集しています！</dd>
</dl>
<!-- .section-inside // --></div>
<!-- #our .section // --></div>
<div class="section" id="news">
<div class="title">
<h2><img src="<?php echo Configure::read('baseurl');?>frontend/images/main_ttl_news.jpg" width="41" height="21" alt="News" /></h2>
<!-- .title // --></div>
<ul>
<?php
$n = count($news);
for($i=0;$i<$n;++$i)
{
    $newsTitle='';
    if($news[$i]['type']=='news')
    {
        if($news[$i]['url'])
        {
            $newsTitle = '<a href="'.$news[$i]['url'].'" target="_blank">'.$news[$i]['title'].'</a>';
        }else if(empty($news[$i]['content']))
        {
            $newsTitle = $news[$i]['title'];
        }else
        {
            $newsTitle = '<a href="'.Configure::read('baseurl').'news/view/'.$news[$i]['id'].'">'.$news[$i]['title'].'</a>';
        }
        $newsTitle = '<li><em>'.date('d.m.Y',strtotime($news[$i]['startdate'])).'</em><img src="'.Configure::read('baseurl').'frontend/images/news_ico_company.gif" width="48" height="13" alt="Company" /><span>'.$newsTitle.'</span></li>';

    }else  if($news[$i]['type']=='recruit')
    {
        $newsTitle ='<li><em>'.date('d.m.Y',strtotime($news[$i]['startdate'])).'</em><img src="'.Configure::read('baseurl').'frontend/images/news_ico_recruit.gif" width="48" height="13" alt="Company"><span><a href="'.Configure::read('baseurl').'recruits/view/'.$news[$i]['id'].'">'.$news[$i]['title'].'</a></span></li>';
    }
    echo $newsTitle;
}
?>
</ul>
<!-- #news .section // --></div>
<!-- InstanceEndEditable -->
<!-- #Main // --></div>

<div id="Side"><!-- InstanceBeginEditable name="localnavi" --><!-- InstanceEndEditable -->

<div class="section">
<h3><img src="<?php echo Configure::read('baseurl');?>frontend/images/side_ttl_comic.gif" width="47" height="20" alt="Comic" /></h3>
<ul class="all-rover">
<li><a href="#" target="_blank"><img src="<?php echo Configure::read('baseurl');?>frontend/images/side_bnr_comic.gif" width="200" height="65" alt="岩槻代表物語 代表・岩槻の起業までの物語" /></a></li>
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