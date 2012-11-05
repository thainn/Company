<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Trang chủ | Leverages Vietnam </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="leverages vietnam backend">
	<meta name="author" content="leverages vietnam">
      
        <?php 
        
            $this->html->css('bootstrap-cerulean.css',null,array('inline'=>false));
              $this->html->css('charisma-app.css',null,array('inline'=>false));
             $this->html->css('jquery-ui-1.8.21.custom.css',null,array('inline'=>false));
             echo $this->html->script('jquery-1.7.2.min.js');
             echo $this->html->script('jquery-ui-1.8.21.custom.min.js');
              echo $this->html->script('bootstrap-dropdown.js');
               echo $this->Html->script('jquery-1.8.2.min');
               echo $this->Html->script('jquery_action.js');
          ?>

	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>



<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> 
					<span>Leverages Vietnam</span>
				</a>
				
				
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
                                    
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                           
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
                                                
                                                 
						<span class="caret"></span>
					</a>
                                    &nbsp; &nbsp; &nbsp; &nbsp;
                                    <a href="sdsdsd" >
                                        <font color="white"> 2 message </font>
                                 <?php 
                                  echo $this->Html->image('message-already-read.png');
                                 ?>
                                    </a>
					<ul class="dropdown-menu">
						<li><a href="changepassword.html">Đổi mật khẩu</a></li>
						<li class="divider"></li>
						<li><a href="login.html">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
