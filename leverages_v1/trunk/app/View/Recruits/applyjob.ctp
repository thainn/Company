<?php ?>
<!--<script type="text/javascript" src="<?php echo Configure::read('baseurl'); ?>frontend/js/validation.js"></script>-->
<link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl'); ?>frontend/css/recruit.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl'); ?>frontend/css/general.css" />
<script src="<?php echo Configure::read('baseurl'); ?>backend/js/validation.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $.library.active({id:'navi_g06',type:'img'});

    });
</script>




<div id="Content">
    <a id="main-Contents" name="main-Contents"><img src="<?php echo Configure::read('baseurl'); ?>frontend/images/spacer.gif" alt="ここからメインコンテンツです" /></a>
    <!-- InstanceBeginEditable name="title" -->
    <h1 class="recruit"><img src="<?php echo Configure::read('baseurl'); ?>frontend/images/recruit/ttl_main.png" width="265" height="25" alt="Giới thiệu｜会社情報｜レバレジーズ株式会社" /></h1>

    <!-- InstanceEndEditable -->
    <div id="Wrapper">


        <div id="Main"><!-- InstanceBeginEditable name="main" -->
            <div class="section" id="our">
                <div class="title">
                    <h2 style="font-size:18px;margin-bottom:10px">Recruit » PHP developer » Apply Job
                    
                         <div id="errorFull"style="color: red">
                            
                    <?php if ($success=='true') {
                            ?>
                             <h2 style="font-size:18px;margin-bottom:10px "> 
                                 asdasdsa asdasdas
                           <?php echo ' Upload CV Thành Công '  ?>
                        <?php }?>
                       
                              <?php if ($success=='false') {
                            ?>
                           <?php echo 'Upload CV Thất bại '?>
                                 </h2>
                        <?php }?>
                             
                            
                         </div>
                    </h2>
                    <!-- .title // -->
                     
                    
                    
                
                </div>

                <?php
                ?>
                <form class="form-horizontal" action="" method="post"  enctype="multipart/form-data" 
                      id="customForm3" >
                    <table border=0 width="100%" class="tbapplyjob">
                        <tr>
                            <td width="200px">Vị trí</td><td><span style="font-weight:bold">

                                    <?php
                                    foreach ($recruit as $data) {
                                        echo $recruit['Recruit']['title'];
                                    }
                                    ?>

                                </span>
                            </td> 
                        </tr>
                        <tr>

                            <td width="200px">Họ tên ứng viên</td>

                            <td>
                                <input class="jobinput" type="text" id="fullname" name="fullname" value="" >
                                </br>   <span id="fullnameInfo" style="color: red" ></span>

                                <div id="errorFull"style="color: red">
                                    <?php if (!empty($enterFullname)) {
                                        ?>
                                        <?php echo '* ' . $enterFullname ?>
                                    <?php } ?>
                                </div>

                            </td> 

                        </tr>

                        <tr> <td>Email </td><td>
                                <input type="text"  class="jobinput" value="" name="email" id="email" name="email" >

                                </br>  <span id="emailInfo" style="color: red"></span>
                                <div id="errorFull"style="color: red">
                                    <?php if (!empty($enterEmail)) {
                                        ?>
                                        <?php echo '* ' . $enterEmail ?>
                                    <?php } ?>
                                </div>

                            </td> 

                        </tr>
                        <tr><td>Điện thoại</td><td><input type="text"  class="jobinput"  value="" name='phone'  id="phone"  >


                                </br>   <span id="phoneInfo" style="color: red"></span>

                                <div id="errorFull"style="color: red">
                                    <?php if (!empty($enterPhone)) {
                                        ?>
                                        <?php echo '* ' . $enterPhone ?>
                                    <?php } ?>
                                </div>

                            </td>

                        </tr>
                        <tr>
                            <td>Năm sinh</td><td>
                                <input type="text"  class="jobinput" style="width:100px"  value="" name="senddate" id="year" >
                                </br>    <span id="yearInfo" style="color: red"></span>

                                <div id="errorFull"style="color: red">
                                    <?php if (!empty($enterSendDate)) {
                                        ?>
                                        <?php echo '* ' . $enterSendDate ?>
                                    <?php } ?>
                                </div>

                            </td> 

                        </tr>
                        <tr><td> Giới Tính  </td>  
                            <td>
                                <input type="radio" name="sexname" value="Water" width="10%" checked="true"> Nam &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="sexname" value="Water" width="10%"> Nữ</td></tr>

                        <tr><td colspan=2>Giới thiệu bản thân<br/><textarea  class="input-usually" style="margin: 10px 0px 0px; height: 164px; width: 625px;  "  id="message" name="introduce"></textarea>
                                </br>  <span id="messageInfo" style="color: red"> </span>

                                <div id="errorFull"style="color: red">
                                    <?php if (!empty($enterIntroduce)) {
                                        ?>
                                       <?php echo '* ' . $enterIntroduce ?>
                                    <?php } ?>
                                </div>

                            </td>
                        </tr>
                    </table>
                    <p>
                        Đính kèm CV (Chỉ chấp nhận file .doc, .pdf, .rar, .zip bằng tiếng anh)<br>
                        <input id="uploadFile"  type="file" name="file" size="40">
                        </br>  <span id="uploadFileInfo" style="color: red"> </span>
                    <div id="errorFull"style="color:red">
                        <?php if (!empty($errorFile)) {
                            ?>
                           <?php echo '* ' . $errorFile ?>
                        <?php }?>
                    </div>

<!--<input id="FileuploadFile" class="fileUpload" type="file" multiple="multiple" name="data[Fileupload][file]">-->
                    <?php
//		echo $this->Form->input('file',array('type'=>'file','label'=>'','class' => 'fileUpload','multiple'=>'multiple', 'size'=>"80"));
                    //echo $this->Form->button('Upload', array('type' => 'submit', 'id' => 'px-submit'));
                    ?>

                    </p>

                    <div class="btns" align="center">
                        <input class="global_button" type="submit" value="Gửi" id="send" name="send" class="btn btn-primary" >
                  
                        <br> <br>
                      
                       
                    </div>
                       
                </form> 

                  





                <!-- #our .section // --></div>

            <!-- InstanceEndEditable -->
            <!-- #Main // --></div>

        <div id="Side"><!-- InstanceBeginEditable name="localnavi" --><!-- InstanceEndEditable -->

            <div class="section">
                <h3><img src="<?php echo Configure::read('baseurl'); ?>frontend/images/side_ttl_comic.gif" width="47" height="20" alt="Comic" /></h3>
                <ul class="all-rover">
                    <li><a href="/comic/index.html" target="_blank"><img src="<?php echo Configure::read('baseurl'); ?>frontend/images/side_bnr_comic.gif" width="200" height="65" alt="岩槻代表物語 代表・岩槻の起業までの物語" /></a></li>
                </ul>
                <!-- .section // --></div>
            <div class="section">
                <h3><img src="<?php echo Configure::read('baseurl'); ?>frontend/images/side_ttl_blog.gif" width="34" height="19" alt="Blog" /></h3>
                <ul class="all-rover">
                    <li><a href="http://ameblo.jp/leverages/" rel="nofollow" target="_blank"><img src="<?php echo Configure::read('baseurl'); ?>frontend/images/side_bnr_blog_top.jpg" width="200" height="65" alt="Top Message 代表・岩槻知秀のブログ" /></a></li>
                    <li><a href="http://leverages.seesaa.net/" rel="nofollow" target="_blank"><img src="<?php echo Configure::read('baseurl'); ?>frontend/images/side_bnr_blog_staff.jpg" width="200" height="65" alt="Staff Blog 社員ブログ" /></a></li>

                </ul>
                <!-- .section // --></div>

            <?php ?>
            <!--<div class="section" id="Campaign">
            <h3><img src="<?php echo Configure::read('baseurl'); ?>frontend/images/side_ttl_campaign.gif" width="75" height="19" alt="Campaign" /></h3>
            <p>キャンペーンの閲覧は、JavaScriptを有効にしてください。</p>-->
            <!-- .section // --><!--</div>-->
            <!-- #Side // --></div>

        <p class="pagetop"><a href="#Top"><img src="<?php echo Configure::read('baseurl'); ?>frontend/images/main_pagetop.gif" width="75" height="20" alt="PageTop" class="rover" /></a></p>

        <!-- #Wrapper // --></div>
    <!-- #Content  // --></div>