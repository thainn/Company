<?php 
	echo "<script type='text/javascript'>var baseurl = '".Configure::read('baseurl')."';</script>";
?>
<script src="<?php echo Configure::read('baseurl'); ?>backend/js/js.backend.js"></script>

<div id='mainlist' class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-folder-open"></i> Danh sách tin tức</h2>
        </div>
        <div class="box-content">
            <div class='action'>
                <?php
                    echo $this->Html->link('Thêm ',
                                            array('controller' => 'news', 'action' => 'add'), 
                                            array('class' => 'btn btn-success')
                                        ); 
                ?>
                <a class="btn btn-danger" href="#" onclick="deleteItem(<?php echo $this->Paginator->current(); ?>, 'news');">
                    Xóa
                </a>       
            </div>

            <?php echo $this->Session->flash(); ?>
            <script type='text/javascript'>
            	$(document).ready(function(){
            		setTimeout(function() {
            			$("#flashMessage").fadeOut().remove();
            		}, 5000);
            	});
            </script>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th><input type='checkbox' id="cb_all"/></th>
                        <th width='500'>Tiêu đề</th>
                        <th>Ngày tạo</th>
                        <th>Ngày giờ đăng</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($items as $data) {
                        ?> 
                        <tr>
                            <td class="center"><input class='cb_item' type='checkbox' value='<?php echo $data['News']['id']; ?>' name='del[<?php echo $data['News']['id']; ?>]'></td>
                            <td><?php echo $data['News']['title']; ?></td>
                            <td class="center"><?php echo date('d/m/Y', strtotime($data['News']['regdate'])); ?></td>
                            <td class="center"><?php echo date("d/m/Y H:i", strtotime($data['News']['publishdate'])); ?></td>
                            <td class="center">
                                <?php
                                echo $this->Html->link('<i class="icon-zoom-in icon-white"></i> Xem</span> ', 
                                                        array('controller' => 'news', 'action' => 'view', $data['News']['id']), 
                                                        array('escape' => false, 'class' => 'btn btn-success')
                                                    ); 
                               ?>
                               <?php
                                echo $this->Html->link('<i class="icon-edit icon-white"></i> Sửa</span> ', 
                                                        array('controller' => 'news', 'action' => 'edit', $data['News']['id']), 
                                                        array('escape' => false, 'class' => 'btn btn-info')
                                                    );
                               ?>
                                <?php
                                echo $this->Html->link('<i class="icon-trash icon-white"></i> Xóa</span> ', 
                                                        array('controller' => 'news', 'action' => 'delete', $data['News']['id'], 'page:'.$this->Paginator->current()), 
                                                        array('escape' => false, 'class' => 'btn btn-danger', 'confirm' => Configure::read('DELETE_CONFIRM'))
                                                    );
                                ?>  

                            </td>
                        </tr>
<?php
                    }
                    ?>
                    </tbody>
                </table>


                <?php
                if($this->Paginator->numbers()){
					echo <<<EOF
						<div class='pagination pagination-centered'>
							<ul>
                    			<li>{$this->Paginator->prev('« Trước ', null, null, null)}</li>
	                    		<li>{$this->Paginator->numbers()}</li>
	                    		<li>{$this->Paginator->next(' Sau »', null, null, array('class' => 'disabled'))}</li>
                			</ul>
                    	<div>
EOF;
                }
                ?> 
        </div>
    </div><!--/span-->

</div><!--/row-->

