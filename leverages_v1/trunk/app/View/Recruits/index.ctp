<link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl');?>frontend/css/recruit.css" media="all" />
<script type="text/javascript">
$(document).ready(function(){
	$.library.active({id:'navi_g06',type:'img'});
$("#Main div.section ul li:even").addClass("even");
});
</script>
<div id="Content">
<a id="main-Contents" name="main-Contents"><img src="<?php echo Configure::read('baseurl');?>frontend/images/spacer.gif" alt="ここからメインコンテンツです" /></a>
<!-- InstanceBeginEditable name="title" -->
<h1 class="recruit"><img src="<?php echo Configure::read('baseurl');?>frontend/images/recruit/ttl_main.png" width="265" height="25" alt="Giới thiệu｜会社情報｜レバレジーズ株式会社" /></h1>

<!-- InstanceEndEditable -->
<div id="Wrapper">


<div id="Main"><!-- InstanceBeginEditable name="main" -->
<div class="section" id="our">
<div class="title">
<h2 style="font-size:18px">Recruit</h2>
<!-- .title // --></div>
<div class="section-inside odd">
<dl>
<dt><a href="<?php echo Configure::read('baseurl');?>recruits/se/">Software Engineer</a></dt>
<dd>Mô tả ngắn về vị trí PHP developer<br/>Mô tả ngắn về vị trí PHP developer Mô tả ngắn về vị trí PHP developer<br/></dd>
</dl>
<!-- .section-inside // --></div>


<div class="section-inside" style="margin-left:18px">
<dl>
<dt><a href="<?php echo Configure::read('baseurl');?>recruits/bse/">BSE</a></dt>
<dd>Mô tả ngắn về vị trí BSE Mô tả ngắn về vị trí BSE Mô tả ngắn về vị trí BSE <br/>Mô tả ngắn về vị trí BSE </dd>
</dl>
<!-- .section-inside // --></div>



<!-- #our .section // --></div>

<div class="section">
<ul>
<?php
	foreach($items as $data){
		echo "<li>".
				"<em>".date('Y.m.d',strtotime($data['Recruit']['startdate']))."</em><span>".
				"<a href='".Configure::read('baseurl')."recruits/view/".$data['Recruit']['id']."'>".$data['Recruit']['title']."</a>".
			"</li>";
}
?>

</ul>
<!-- .section // --></div>
<p class='paginator' align="center" style="margin-top:10px">
<?php
    if($this->Paginator->numbers()){
        echo $this->Paginator->prev('« Trước ', null, null, array('class' => 'disabled')); //Shows the next and previous links
        echo " | " . $this->Paginator->numbers(array('class'=>'pageitem')) . " | "; //Shows the page numbers
        echo $this->Paginator->next(' Sau »', null, null, array('class' => 'disabled'));
        //echo " Page " . $this->Paginator->counter();
    }
?></p>

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