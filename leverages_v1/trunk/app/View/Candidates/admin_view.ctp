<?php 


if($error!=null)
{?>
<div align='center'> Không tìm thấy trang bạn yêu cầu </div>
<?php
return;
}
?>

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>Ứng viên</h2>
        </div>
        <div class="box-content">
            <legend>
                <b>Họ tên</b>: <?php echo strip_tags($candidate['Candidates']['fullname'],''); ?>
                <br >
                <b>Giới tính</b>: <?php
                   
                         if( $candidate['Candidates']['sex']=='1')
                         {
                              echo  'Nam';
                         }
                        else {
                                echo  'Nữ';
                        }
                       // print_r($data);
                ?>
                
                
                <br>
             
                
                  <b>Ngày sinh</b>: <?php 
                  echo date('d-m-Y', strtotime($candidate['Candidates']['birthday']));
                  ?>
                  <br>
                
                <b>Email</b>: <?php echo $candidate['Candidates']['email']; ?><br >
              
                <b>Ngày gửi</b>: <?php
             
                                echo date('d-m-Y H:i', strtotime($candidate['Candidates']['senddate']));
            ?> <br>
                <?php
                 $url = $candidate['Candidates']['url'];
               
                if($url!=null)
                {
             
                $path = Router::url('/', true) . 'files/' . $url; 
                ?>
                <a href='<?php echo $path ?>' class='btn btn-success' style="margin: 0 0 10px;">
                   Download  
                <?php } ?>
            </a>
            <br>

        </legend>

        <p>

<?php
echo strip_tags($candidate['Candidates']['introduce'],'');
?>



        </p>
        <p class="center">


<?php
echo $this->Html->link('<i class="icon-chevron-left icon-white"></i> <span class="hidden-tablet"> 
                                                        Quay Về
                                                        </span> ', array('controller' => 'Candidates',
    'action' => 'index'), array('escape' => false, 'class' => 'btn btn-large btn-primary'));
?>     



        </p>



        <div class="clearfix"></div>
    </div>
</div>
</div>