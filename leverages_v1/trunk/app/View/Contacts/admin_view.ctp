<?php 


if($error!=null)
{?>
<div align='center'> không tìm thấy trang Bạn Yêu Cầu </div>
<?php
return;
}
?>

<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2>Nội dung Liên hệ</h2>
        </div>
        <div class="box-content">
            <legend>
                <b>Người gửi : </b><?php echo strip_tags($contact['Contact']['name']); ?><br >
                <b>Email</b>: <?php echo $contact['Contact']['email']; ?><br >
                <b>Ngày gửi :</b> <?php
        echo date('d-m-Y H:i',  strtotime($data['Contact']['send_date']));
        ?> <br >
            </legend>

<?php echo strip_tags($contact['Contact']['content']); ?>

            <p class="center">

<?php
echo $this->Html->link('<i class="icon-chevron-left icon-white"></i>   
                                                      Quay Về
                                                        </span> ', array('controller' => 'contacts',
    'action' => 'index'), array('escape' => false, 'class' => 'btn btn-large btn-primary'));
?>     

            </p>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
