<?php
echo "<script type='text/javascript'>var baseurl = '" . Configure::read('baseurl') . "';</script>";
?>
<script src="<?php echo Configure::read('baseurl'); ?>backend/js/jquery_action.js"></script>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-calendar"></i> Danh sách thông tin liên hệ</h2>
        </div>
        <div class="box-content">
            <div class='action'>
                <a class="btn btn-danger" href="#" onclick="deleteallContacts();">
                    Xóa
                </a>
            </div>

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>
                <div class="controls"> <input type='checkbox'    id="selectall"/> </div>

                </th>
                <th width='180'>Họ tên</th>
                <th width='500'>Nội dung liên hệ</th>
                <th>Ngày gửi</th>
                <th>Tùy chọn</th>
                </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($contact as $data) {
                        ?> 

                        <tr>
                            <td class="center">
                                <div class="elements">  
                                    <input type='checkbox' name="cbID" id="cbID" class="case"  value=<?php echo $data['Contact']['id']; ?>>
                                </div>
                            </td>
                            <td><?php echo  strip_tags($data['Contact']['name']); ?></td>
                            <td><?php
                    echo AppHelper::cutString($data['Contact']['content'], 100, '...')
                        ?></td>
                            <td class="center"> <?php
                                echo date('d-m-Y H:i', strtotime($data['Contact']['send_date']));

                        ?> </td>
                            <td class="center">

                                <?php
                                echo $this->Html->link('<i class="icon-zoom-in icon-white"></i>  
                                                         Xem
                                                        </span> ', array('controller' => 'contacts',
                                    'action' => 'view', $data['Contact']['id']), array('escape' => false, 'class' => 'btn btn-success'));
                                ?>
                                  <?php  echo $this->Html->link('<i class="icon-trash icon-white"></i> Xóa</span> ', 
                                                        array('controller' => 'contacts', 'action' => 'deleteNotAjax', $data['Contact']['id'], 'page:'.$this->Paginator->current()), 
                                                        array('escape' => false, 'class' => 'btn btn-danger', 'confirm' => Configure::read('DELETE_CONFIRM'))
                                                    );
                                
                                ?>     

                               
                                
                                
                                
                                
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="pagination pagination-centered">

                <?php
                if ($lengthContact > Configure::read('LIMIT_CONTACT')) {
                    // echo $this->Session->read('contactResult');
                    ?>
                    <ul>
                        <li>  <?php echo $this->Paginator->prev('Trước ', array('rel' => ''), null, null); ?> </li>
                        <li>  <?php echo "" . $this->Paginator->numbers() . ""; ?> </li>
                        <li>   <?php echo $this->Paginator->next(' Sau ', null, null, array('class' => 'disabled')); 
                     //  echo $this->here;
                       //echo $this->params['Paginator'];
                       // echo $this->Paginator->current();
                        ?> </li>
                    </ul>
                <?php } ?>
            </div>               
        </div>    


        <?php
        if ($this->Session->read('contactResult') == '1') {
            ?>

            <div class="box-content1">	
                <div class="valid_box">  Xóa Thành Công </div>
            </div>
        <?php }?>



    </div><!--/span-->

</div><!--/row-->