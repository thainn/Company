<?php
echo "<script type='text/javascript'>var baseurl = '" . Configure::read('baseurl') . "';</script>";
?>
<link href="<?php echo Configure::read('baseurl'); ?>backend/css/jquery-ui-timepicker.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo Configure::read('baseurl'); ?>backend/css/jquery.cleditor.css" />
<link href="<?php echo Configure::read('baseurl'); ?>backend/css/jquery-ui-timepicker.css" rel="stylesheet">

<script src="<?php echo Configure::read('baseurl'); ?>backend/js/jquery-ui-timepicker.js"></script>
<script src="<?php echo Configure::read('baseurl'); ?>backend/js/jquery-ui-sliderAccess.js"></script>
<!-- datetime plugin -->
	<script>
	//datepicker
	$('.timepicker').datetimepicker({
		dateFormat: 'dd/mm/yy',
		timeFormat: 'hh:mm'
	});
	</script>

<script type="text/javascript">
	$("#mails").parent().addClass('active');
</script>
<script src="<?php echo Configure::read('baseurl'); ?>backend/js/mail.js"></script>

<div id="content" class="span10">
    <!-- content starts -->


    <div class="row-fluid sortable">		
        <div class="box span12">
            
            <div id="headermessage">
                <div class="box-header well" data-original-title>
                    <h2><div id="contenHeader">
                              <div class="controls"> 
                                  
                                 
                         
                              <input type='checkbox'id="selectall"/> 
                              <font id="buttonDelete">
                           
                              </font>
                           
                                  
                                  </div>
                        </div>
                    </h2>
                    <div id="message" align="right">
                    </div>
                </div>
                 
            </div>
                              

               <div id="messageGarbage">
                <div class="vh"></div>
                </div>
        
<!--        <div class="box-content">
            <legend>
                <b>Người gửi : </b>A<br >
                <b>Email</b>: sdsd<br >
                <b>Ngày gửi :</b> 01-01-1970 00:00 <br >
            </legend>

            AAAAAAA
            <p class="center">

<a href="/leverages/trunk/admin/contacts" class="btn btn-large btn-primary"><i class="icon-chevron-left icon-white"></i>   
                                                      Quay Về
                                                        </span> </a>     

            </p>
            <div class="clearfix"></div>
        </div>-->
    
                
                    
        <div id="contenmail">
            
            
            
            
<!--                    <table class="table"><thead><tr><th>
                        
                    </th> <th width='180'>&nbsp;&nbsp;&nbsp;</th>  <th width='500'>&nbsp;                  
                </th>  <th>&nbsp;</th></tr> </thead>  <tbody> 

                    <?php
                    foreach ($contact as $data) {

                        if ($data['Contact']['checked'] == 0) {
                            ?>
                            <tr>
                                <td class="center"><div> <input type='checkbox' 
                                                                name="cbID"  class="case"  value=<?php echo $data['Contact']['id'] ?>>
                                    </div>  </td> <td>
                                    <b>
                                        <?php
                                        echo strip_tags($data['Contact']['name']);
                                        ?>
                                    </b>
                                </td>  
                                <td>
                                    <?php
                                    $id = $data['Contact']['id'];
                                    ?>
                                    <b>
                                        <a  href="#" onclick="viewDetail(<?php $id ?>)">
                                            <?php
                                            echo AppHelper::cutString($data['Contact']['content'], 100, '...');
                                            ?>   
                                        </a>       
                                    </b>
                                </td>    
                                <td>

                                  <b>  <?php echo date('d-m-Y H:i', strtotime($data['Contact']['send_date'])); ?> </b></td> 
                            </tr> 
                            <?php
                        } else {
                            ?>

                            <tr>
                                <td class="center"><div> <input type='checkbox' 
                                                                name="cbID"  class="case"  value=<?php echo $data['Contact']['id'] ?>>
                                    </div>  </td> <td>

                                    <?php
                                    echo strip_tags($data['Contact']['name']);
                                    ?>

                                </td>  
                                <td>
                                    <?php
                                    $id = $data['Contact']['id'];
                                    ?>

                                    <a  href="#" onclick="viewDetail(<?php $id ?>)">
                                        <?php
                                        echo AppHelper::cutString($data['Contact']['content'], 100, '...');
                                        ?>   
                                    </a>       



                                </td>    

                                <td>

                                    <?php echo date('d-m-Y H:i', strtotime($data['Contact']['send_date'])); ?> </td> 
                            </tr>

                        <?php } ?>

                        <?php
                    }
                    ?>

                </tbody>
             </table>  -->
            </div>
                
                
                
                
                
                
        </div>










        <!--/span-->

    <!--/row-->


    <!-- content ends -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->


