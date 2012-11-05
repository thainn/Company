<!-- InstanceBeginEditable name="head" -->
<link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl');?>frontend/css/contact.css" media="all" />
<script type="text/javascript">
$(document).ready(function(){
	$.library.active({id:'btn_contact',type:'img'});
	$.library.active({id:'navi_f08',type:'img'});
	$.library.active({id:'inquiry01',type:'text'});
});
</script>
<!-- InstanceEndEditable -->
<div id="Content">
<a id="main-Contents" name="main-Contents"><img src="<?php echo Configure::read('baseurl');?>frontend/images/spacer.gif" alt="ここからメインコンテンツです" /></a>
<!-- InstanceBeginEditable name="title" -->
<h1 class="inquiry"><img src="<?php echo Configure::read('baseurl');?>frontend/images/contact/ttl_main.gif" width="185" height="20" alt="お問い合わせ｜レバレジーズ株式会社" /></h1>
<!-- InstanceEndEditable -->
<div id="Wrapper">


<div id="Main"><!-- InstanceBeginEditable name="main" -->
<h2 class="titlebar" style="font-size:16px;font-weight:bold">Liên hệ</h2>
<div class="section">
   
<form  method="POST" id="form">
<table border="0" cellpadding="0" cellspacing="20" summary="">
<tr><th></th><td style="font-size:14px;color:red"> <?php  if(!empty($notice)){echo $notice;} ?></td></tr>
<tr>
<th>Họ tên</th>
<td class='error'> <?php  if(!empty($enterName)){echo $enterName;} ?><br/>
<input type="text"  name="data[name]" value="<?php if($data){echo $data['name'];}?>" />
</td>
</tr>
<tr>
<th>Điện thoại</th>
<td class='error'> <?php  if(!empty($enterPhone)){echo $enterPhone;} ?><br/>
<input type="text" name="data[phone]" value="<?php if($data){echo $data['phone'];}?>"/>
</td>
</tr>
<tr>
<th>Email</th>
<td class="long error">
 <?php  if(!empty($enterEmail)){echo $enterEmail;} ?><br/><input type="text" name="data[email]" value="<?php if($data){echo $data['email'];}?>"/>
</td>
</tr>
<tr>
<th>Nội dung liên hệ</th>
<td class='error'> <?php  if(!empty($enterContent)){echo $enterContent;} ?><br/>
<textarea cols="80" rows="5"  name="data[content]"><?php if($data){echo $data['content'];}?></textarea>
</td>
</tr>
</table>
<p class="btn" style="padding-top:10px;">
<input type="submit" value="Gửi liên hệ" class="global_button" />
</p>
</form>
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