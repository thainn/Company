<?php


?>

			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Admin</li>
						<li>
                                                   <?php 
                                                       echo $this->Html->link('<i class="icon-home"> 
                                                        </i> <span class="hidden-tablet"> 
                                                         Trang Chủ
                                                        </span> ', array('controller' => '', 
                                                        'action' => 'index'),array('escape' => false,'class' =>'ajax-link') );  
                                                    ?>
						
						<li>
                                                   <?php 
                                                       echo $this->Html->link('<i class="icon-align-justify"> 
                                                        </i> <span class="hidden-tablet"> 
                                                         Tin tức
                                                        </span> ', array('controller' => 'news', 
                                                        'action' => 'index'),array('escape' => false,'class' =>'ajax-link') );  
                                                    ?>
                                                
                                                </li>
						<li>
                                                    <?php 
                                                       echo $this->Html->link('<i class="icon-calendar"> 
                                                        </i> <span class="hidden-tablet"> 
                                                         Liên hệ
                                                        </span> ', array('controller' => 'contacts', 
                                                        'action' => 'index'),array('escape' => false,'class' =>'ajax-link') );  
                                                    ?>   
                                                    
                                                </li>
						<li>
                                                       <?php 
                                                       echo $this->Html->link('<i class="icon-th"> 
                                                        </i> <span class="hidden-tablet"> 
                                                         Tuyển Dụng
                                                        </span> ', array('controller' => 'recruits', 
                                                        'action' => 'index'),array('escape' => false,'class' =>'ajax-link') );  
                                                    ?>     
                                                </li>
						<li>
                                                  <?php 
                                                        echo $this->Html->link('<i class="icon-folder-open"> 
                                                        </i> <span class="hidden-tablet"> 
                                                            ứng viên
                                                        </span> ', array('controller' => 'candidates', 
                                                            'action' => 'index'),array('escape' => false,'class' =>'ajax-link') );
                                                   ?>
                                                </li>
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->