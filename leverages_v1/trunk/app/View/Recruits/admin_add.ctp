<link href="<?php echo Configure::read('baseurl'); ?>backend/css/jquery-ui-timepicker.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl'); ?>backend/css/jquery.cleditor.css" />

            <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Thêm mới</h2>
					</div>
					<div class="box-content">
                        <?php echo $this->Session->flash(); ?>
                        <form class="form-horizontal" method="post">
                            <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Tiêu đề (*)</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="title" name="data[title]"  ">
							  </div>
							</div>
							
							
							
							<div class="control-group">
							  <label class="control-label" for="date01">Ngày bắt đầu</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="startdate"  name="data[startdate]">
								<p class="help-block">Thời điểm bài tuyển dụng có hiệu lực</p>
							  </div>
							</div>
                                
                            <div class="control-group">
							  <label class="control-label" for="date01">Ngày kết thúc</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="enddate" name="data[enddate]">
								<p class="help-block">Thời điểm bài tuyển dụng hết hiệu lực</p>
							  </div>
							</div>
							
							  
							<div class="control-group">
							  <label class="control-label" for="textarea2">Nội dung chi tiết</label>
							  <div class="controls">
								<textarea class="cleditor" rows="3" name="data[content]"> </textarea>
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
							 
                             <?php echo $this->Html->link('Hủy', 
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