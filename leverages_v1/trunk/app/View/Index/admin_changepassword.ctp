<?php ?>
<script src="<?php echo Configure::read('baseurl'); ?>backend/js/validation.js"></script>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-user"></i> Đổi Mật Khẩu </h2>
        </div>
        <div class="box-content">
            
          
            
            
               <?php
                        $result = $this->Session->flash();
                        if ($result != null ) {
                            ?>
            <div id="flashMessage" class="message" style="text-align: center"><?php echo $result; ?></div>       
                <script type='text/javascript'>
            	$(document).ready(function(){
            		setTimeout(function() {
            			$("#flashMessage").fadeOut().remove();
            		}, 5000);
            	});
              </script>
                            <?php }
                   ?>
                
            
            
            <form class="form-horizontal" action="" method="post"
                  id="customForm1">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Password cũ</label>
                        <div class="controls">
                            <input type="password" class="span3 typeahead" id="passwordOld" name="passwordOld"  >
                            <p class="help-block">Password hiện tại
                                <span id="passwordOldInfo"></span>
                            </p>

                            <div id="errorFull">
                                <?php
                                //$enterPaswordOld='dsd';
                                //print_r($enterPaswordOld);
                                if (!empty($enterPaswordOld)) {
                                    ?>

                                    <span><?php echo '* ' . $enterPaswordOld; ?></span>
                                <?php } ?>
                            </div>

                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Password mới</label>
                        <div class="controls">
                            <input type="password" class="span3 typeahead" id="passwordNew" name="passwordNew">
                            <p class="help-block">Password mới

                                <span id="passwordNewInfo"></span>
                            </p>

                            <div id="errorFull">
                                <?php if (!empty($enterPaswordNew)) {
                                    ?>
                                    <span><?php echo '* ' . $enterPaswordNew; ?></span>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Xác nhận password  </label>
                        <div class="controls">
                            <input type="password" class="span3 typeahead" id="ConfirmpasswordNew" name="ConfirmpasswordNew">
                            <p class="help-block">Nhập lại password mới

                                <span id="ConfirmpasswordNewInfo">


                                </span>

                            </p>






                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="date01">&nbsp;</label>
                        <div class="controls">
                            <p class="help-block note">Tất cả thông tin đều bắt buộc phải nhập</p>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" d="send" name="send" > Lưu thay đổi</button>
                        <button type="reset" class="btn btn-primary" d="send" name="send" >hủy</button>
                    </div>
                </fieldset>
            </form> 






            <?php
            if ($this->Session->read('changpassword') == '1') {
                ?>

                <div class="box-content1">	
                    <div class="valid_box">  Thay Đổi Password Thành Công </div>
                </div>
<?php } ?>

<?php
if ($this->Session->read('changpassword') == '0') {
    ?>
                <div class="box-content2">	
                    <div class="valid_box_buff">  Thay Đổi Password thất bại </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
