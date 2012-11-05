<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
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
        
     
        
        <link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true); ?>backend/css/bootstrap-cerulean.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true); ?>backend/css/charisma-app.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true); ?>backend/css/jquery-ui-1.8.21.custom.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true); ?>backend/css/general.css" />
<!--        <link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true); ?>backend/css/style.css" />-->
        
        <?php
        echo $this->Html->meta('icon');
        echo $this->fetch('meta');

//        echo $this->Session->flash();
        echo $this->Session->flash('email');
        ?>

        <!-- jQuery -->
        <script src="<?php echo Router::url('/', true); ?>backend/js/jquery-1.7.2.min.js"></script>
        <!-- jQuery UI -->
        <script src="<?php echo Router::url('/', true); ?>backend/js/jquery-ui-1.8.21.custom.min.js"></script>
        <!-- custom dropdown library -->
        <script src="<?php echo Router::url('/', true); ?>backend/js/bootstrap-dropdown.js"></script>

        <!-- select or dropdown enhancer -->
        <script src="<?php echo Router::url('/', true); ?>backend/js/jquery.chosen.min.js"></script>
        <!-- plugin for gallery image view -->
        <script src="<?php echo Router::url('/', true); ?>backend/js/jquery.cleditor.min.js"></script>
        <!-- application script for Charisma demo -->
        <script src="<?php echo Router::url('/', true); ?>backend/js/charisma.js"></script>
        <script src="<?php echo Router::url('/', true); ?>backend/js/jquery.easing.1.3.js"></script>
    </head>

    <body>

        <!-- topbar starts -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">


                    <?php
                    echo $this->Html->link("<span>Leverages Vietnam</span>", array('controller' => 'index'), array('escape' => false, 'class' => 'brand')
                    );
                    ?>


                    <!-- user dropdown starts -->
                    <div class="btn-group pull-right" >
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user"></i><span class="hidden-phone"> <?php echo $this->Session->read('Username'); ?></span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <?php
                                echo $this->Html->link('Đổi mật khẩu', array('controller' => 'index', 'action' => 'changepassword')
                                );
                                ?>
                            </li>
                            <li class="divider"></li>
                            <li>
								<?php
									echo $this->Html->link('Đăng xuất', array('controller' => 'index', 'action' => 'logout')
								);
								?>
                            </li>

                        </ul>
                    </div>
                    <!-- user dropdown ends -->
                </div>
            </div>
        </div>
        <!-- topbar ends -->

        <div class="container-fluid">
            <div class="row-fluid">

                <!-- left menu starts -->
                <div class="span2 main-menu-span">
                    <div class="well nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li class="nav-header hidden-tablet">Main</li>
                            <li>
								<?php
								echo $this->Html->link('<i class="icon-home"></i><span class="hidden-tablet"> Trang chủ</span>', 
														array('controller' => 'index', 'action' => 'index'), 
														array('escape' => false, 'class' => 'ajax-link', 'id'=>'index'));
								?>  
                            </li>
                            <li>
                                <?php
                                echo $this->Html->link('<i class="icon-align-justify"></i><span class="hidden-tablet"> Tin tức</span>', 
														array('controller' => 'news', 'action' => 'index'), 
														array('escape' => false, 'class' => 'ajax-link', 'id'=>'news'));
                                ?>  
                            </li>

                            <li>
                                <?php
                                echo $this->Html->link('<i class="icon-calendar"></i><span class="hidden-tablet"> Liên hệ</span>', 
														array('controller' => 'contacts', 'action' => 'index'), 
														array('escape' => false, 'class' => 'ajax-link', 'id'=>'contacts'));
                                ?>  
                            </li>

                            <li>
                                <?php
                                echo $this->Html->link('<i class="icon-align-justify"></i><span class="hidden-tablet"> Tuyển dụng</span>', 
														array('controller' => 'recruits', 'action' => 'index'), 
														array('escape' => false, 'class' => 'ajax-link', 'id'=>'recruits'));
                                ?>  
                            </li>

                            <li>
                                <?php
                                echo $this->Html->link('<i class="icon-folder-open"></i><span class="hidden-tablet"> Ứng viên</span>', 
														array('controller' => 'candidates', 'action' => 'index'), 
														array('escape' => false, 'class' => 'ajax-link', 'id'=>'candidates'));
                                ?>  
                            </li>


                        </ul>
                    </div><!--/.well -->
                </div><!--/span-->
                <!-- left menu ends -->

                <noscript>
                    <div class="alert alert-block span10">
                        <h4 class="alert-heading">Warning!</h4>
                        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                    </div>
                </noscript>
                
                <script type="text/javascript">
					$("#<?php echo $current_controller;　?>").parent().addClass('active');
				</script> 


                <div id="content" class="span10">
                    <!-- content starts -->
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?php echo Configure::read('baseurl').'admin/'; ?>">Trang chủ</a> <span class="divider">/</span>
                            </li>
                            <li>
                                <a href="<?php echo Configure::read('baseurl').'admin/'.$breadcum_url; ?>"><?php echo $breadcum_title; ?></a>
                            </li>
                        </ul>
                    </div>
                    <?php echo $this->fetch('content'); ?> 
                    <!-- content ends -->
                </div><!--/#content.span10-->
            </div><!--/fluid-row-->

            <hr>

                <footer>
                    <p class="pull-left">&copy; <a href="http://leverages.jp" target="_blank">Leverages</a> 2012</p>
                    <p class="pull-right">Powered by: <a href="http://leverages.jp/vn">Leverages Vietnam</a></p>
                </footer>

        </div><!--/.fluid-container-->




        <?php echo $this->element('sql_dump'); ?>
        <?php echo $this->fetch('script'); ?>
    </body>
</html>
