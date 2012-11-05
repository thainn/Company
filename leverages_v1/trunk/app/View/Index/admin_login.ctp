<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $title_for_layout; ?> | Leverages Vietnam
        </title>



        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="leverages vietnam backend" />
        <meta name="author" content="leverages vietnam" />


        <link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl'); ?>backend/css/bootstrap-cerulean.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl'); ?>backend/css/charisma-app.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl'); ?>backend/css/jquery-ui-1.8.21.custom.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl'); ?>backend/css/general.css" />

        <script src="<?php echo Configure::read('baseurl'); ?>backend/js/jquery-1.7.2.min.js"></script>
        <script src="<?php echo Configure::read('baseurl'); ?>backend/js/jquery-ui-1.8.21.custom.min.js"></script>
        <script src="<?php echo Configure::read('baseurl'); ?>backend/js/bootstrap-dropdown.js"></script>
        <script src="<?php echo Configure::read('baseurl'); ?>backend/js/jquery-1.8.2.min.js"></script>

        <script src="<?php echo Configure::read('baseurl'); ?>backend/js/jquery_action.js"></script>
        <script src="<?php echo Configure::read('baseurl'); ?>backend/js/validation.js"></script>

        <?php
        echo $this->Html->meta('icon');
        echo $this->fetch('meta');

        echo $this->Session->flash('email');
        ?>
    </head>

    <body>


        <div class="container-fluid">
            <div class="row-fluid">

                <div class="row-fluid">
                    <div class="span12 center login-header">
                        <h2>Welcome to Leverages Vietnam</h2>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->

                <div class="row-fluid">
                    <div class="well span5 center login-box">
                        <div class="alert alert-info">Đăng Nhập</div>
                        <form class="form-horizontal" action="" method="post"
                              id="customForm">
                            <fieldset>
                                <div class="input-prepend" title="Username" data-rel="tooltip">
                                    <span class="add-on"><i class="icon-user"></i> </span> <input
                                        autofocus class="input-large span10" id="username" name="username"
                                        type="text" value="" />  
                                    
                                  
                                   
                                    <div id="errorFull">
                                        <span id="usernameInfo"></span>
                                        <?php if (!empty($enterUsername)) {
                                            ?>
                                            <span><?php echo '* ' . $enterUsername; ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="input-prepend" title="Password" data-rel="tooltip">
                                    <span class="add-on"><i class="icon-lock"></i> </span> <input
                                        class="input-large span10" id="password" name="password"
                                        type="password" value="" />   
                                    <div id="errorFull">
                                        <span id="passwordInfo"> </span>
                                        <?php if (!empty($enterPassword)) {
                                            ?>
                                            <span><?php echo '* ' . $enterPassword ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <p class="center span5">
                                    <button type="submit" id="send" name="send"
                                            class="btn btn-primary">Đăng Nhập</button>
                                </p>
                            </fieldset>
                        </form>

                        
                        
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
                        
                        
                      
                    </div>
                    
                    
                    
                    <!--/span-->
                </div>
                <!--/row-->
            </div>
            <!--/fluid-row-->

        </div>

    </body>
</html>
