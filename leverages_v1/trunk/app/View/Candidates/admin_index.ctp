<?php 

	echo "<script type='text/javascript'>var baseurl = '".Configure::read('baseurl')."';</script>";
                   

?>
  <script src="<?php echo Configure::read('baseurl'); ?>backend/js/jquery_action.js"></script>			

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-folder-open"></i> Danh sách ứng viên</h2>
        </div>
        <div class="box-content">
            <div class='action'>
                <a class="btn btn-danger" href="#" onclick="deleteallCandidates();">
                    Xóa
                </a>       
            </div>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th><input type='checkbox' id="selectall" /></th>
                        <th width='180'>Họ tên</th>
                        <th width='180'>Email</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Ngày gửi</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($candidates as $data) {
                        ?> 
                        <tr>


                            <td class="center"><input type='checkbox' name="cbID"  class="case"  value=<?php echo $data['Candidates']['id']; ?> ></td>
                            <td>  <?php
                            echo strip_tags($data['Candidates']['fullname']);
                            
                            ?></td>
                            <td><?php echo $data['Candidates']['email'] ?></td>
                            <td class="center"><?php echo $data['Candidates']['birthday'] ?></td>
                            <td class="center">Nam</td>
                            <td class="center"> <?php 
                            
                                echo date('d-m-Y H:i', strtotime($data['Candidates']['senddate']));
                            
                            ?></td>
                            <td class="center">
                                <?php
                                echo $this->Html->link('<i class="icon-zoom-in icon-white"></i>  
                                                         Xem
                                                        </span> ', array('controller' => 'candidates',
                                    'action' => 'view', $data['Candidates']['id']), array('escape' => false, 'class' => 'btn btn-success'));
                                ?>
                                
                                   <?php  echo $this->Html->link('<i class="icon-trash icon-white"></i> Xóa</span> ', 
                                                        array('controller' => 'candidates', 'action' => 'deleteNotAjax', $data['Candidates']['id'], 'page:'.$this->Paginator->current()), 
                                                        array('escape' => false, 'class' => 'btn btn-danger', 'confirm' => Configure::read('DELETE_CONFIRM'))
                                                    );
                                
                                ?>  
                                
                                
                              
                            </td>
                        </tr>

                    <?php } ?>



                </tbody>
            </table>
            <div class="pagination pagination-centered">
                <ul>
                    <?php
                    if ($lengthCandidates > Configure::read('LIMIT_CANDIDATE')) {
                        ?>
                        <li>  <?php echo $this->Paginator->prev('Trước ', null, null, null); ?> </li>
                        <li>  <?php echo "" . $this->Paginator->numbers() . ""; ?> </li>
                        <li>   <?php echo $this->Paginator->next(' Sau ', null, null, array('class' => 'disabled')); ?> </li>
                    </ul>
<?php } ?>
            </div>  
        </div>

<?php
if ($this->Session->read('candidateResult') == '1') {
    ?>
            <div class="box-content1">	
                <div class="valid_box">  Xóa Thành Công </div>
            </div>
<?php } ?>
    </div><!--/span-->

</div><!--/row-->
