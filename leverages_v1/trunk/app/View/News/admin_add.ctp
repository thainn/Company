<link href="<?php echo Configure::read('baseurl'); ?>backend/css/jquery-ui-timepicker.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl'); ?>backend/css/jquery.cleditor.css" />
        

            <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Thêm mới</h2>
					</div>
					<div class="box-content">
                        <?php echo $this->Session->flash(); ?>
                        <form class="form-horizontal" method="post" id='newsform'>
                            <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tiêu đề <span class='note'>(*)</span></label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="title" name="data[title]">
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">URL</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id='url' name="data[url]">
								<p class="help-block">Đường dẫn của bài viết gốc</p>
							  </div>
							</div>
							
							
							<div class="control-group">
							  <label class="control-label" for="date01">Ngày giờ đăng <span class='note'>(*)</span></label>
							  <div class="controls">
								<input type="text" class="input-xlarge timepicker" id="postdate" value="" name="data[publishdate]" readonly style='cursor: pointer;'>
								<p class="help-block">Thời điểm bài viết được đăng trên website</p>
							  </div>
							</div>
							
							  
							<div class="control-group">
							  <label class="control-label" for="textarea2">Nội dung chi tiết</label>
							  <div class="controls">
								<textarea class="cleditor" rows="3" name="data[content]"></textarea>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="date01">&nbsp;</label>
							  <div class="controls">
								<p class="help-block note">(*): Thông tin bắt buộc</p>
							  </div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Lưu nội dung</button>
							 
                              <?php
                                	echo $this->Html->link('Hủy', 
                                                        array('controller' => 'news', 'action' => 'index'), 
                                                        array('class' => 'btn')
                                                    );
                               ?>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

<script src="<?php echo Configure::read('baseurl'); ?>backend/js/jquery-ui-timepicker.js"></script>
<script src="<?php echo Configure::read('baseurl'); ?>backend/js/jquery-ui-sliderAccess.js"></script>
<!-- datetime plugin -->
	<script>
	//datepicker
	$('.timepicker').datetimepicker({
		dateFormat: 'dd/mm/yy',
		timeFormat: 'hh:mm'
	});
	var index = 1;
	$('#newsform').submit(function(){
		if(index++ < 2) return true;
		return false;
	});
	</script>