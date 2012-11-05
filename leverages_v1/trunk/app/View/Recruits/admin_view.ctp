<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><?php echo $item['Recruit']['title'] ?></h2>
					</div>
					<div class="box-content">
						<?php echo $item['Recruit']['content'] ?>
						<p class="center action">
                            <?php
                                echo $this->Html->link('<i class="icon-chevron-left icon-white"></i> Quay về</span> ', 
                                                        array('controller' => 'recruits', 'action' => 'index'), 
                                                        array('escape' => false, 'class' => 'btn btn-large btn-primary')
                                                    );
                            ?>
                            <?php
                                echo $this->Html->link('<i class="icon-download-alt"></i>  Chỉnh sửa</span> ', 
                                                        array('controller' => 'recruits', 'action' => 'edit', $item['Recruit']['id']), 
                                                        array('escape' => false, 'class' => 'btn btn-large')
                                                    );
                                                    
                            ?>
						</p>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>