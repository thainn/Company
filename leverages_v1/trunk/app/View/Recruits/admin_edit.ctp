<link href="<?php echo Configure::read('baseurl'); ?>backend/css/jquery-ui-timepicker.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl'); ?>backend/css/jquery.cleditor.css" />
<script type="text/javascript">
	$("#recruits").parent().addClass('active');
</script>

            <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Sửa bài viết</h2>
					</div>
					<div class="box-content">
                        <?php echo $this->Session->flash(); ?>
                        <form class="form-horizontal" method="post" id='recruisform'>
                            <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tiêu đề <span class='note'>(*)</span></label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="title" name="data[title]"  value="<?php echo $item['Recruit']['title']; ?>">
							  </div>
							</div>
							
							
							
							<div class="control-group">
							  <label class="control-label" for="date01">Ngày bắt đầu <span class='note'>(*)</span></label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="startdate"  value="<?php echo $item['Recruit']['startdate']; ?>" name="data[startdate]" readonly style='cursor: pointer;'>
								<p class="help-block">Thời điểm bài tuyển dụng có hiệu lực</p>
							  </div>
							</div>
                                
                            <div class="control-group">
							  <label class="control-label" for="date01">Ngày kết thúc</label>
							  <div class="controls">
								<input  style='cursor:pointer; float:left' type="text" class="input-xlarge datepicker" id="enddate"  value="<?php echo $item['Recruit']['enddate']; ?>" name="data[enddate]" readonly style='cursor: pointer;'>
								<label id='clear' style='cursor:pointer; float:left; margin-left: 10px;margin-top: 5px;'>Clear</label>
								<div class='clear'></div>
								<p class="help-block">Thời điểm bài tuyển dụng hết hiệu lực</p>
							  </div>
							</div>
							<script>
								$('#clear').click(function(){
									$('#enddate').val('');

								});
							</script>
							  
							<div class="control-group">
							  <label class="control-label" for="textarea2">Nội dung chi tiết</label>
							  <div class="controls">
								<textarea class="cleditor" rows="3" name="data[content]"> <?php echo $item['Recruit']['content']; ?></textarea>
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
                                                        array('controller' => 'recruits', 'action' => 'index'), 
                                                        array('class' => 'btn')
                                                    );
                               ?>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
<script>
	var index = 1;
	$('#recruisform').submit(function(){
		if(index++ < 2) return true;
		return false;
	});
	</script>