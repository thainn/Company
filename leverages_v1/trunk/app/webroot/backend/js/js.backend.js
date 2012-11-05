
function deleteItem(current, module){
    var params = {};
    params['item'] = {};
    
    var count = 0;
    $('.cb_item:checked').each(function(){
    	count++;
       params['item'][$(this).val()] = $(this).val();
    })

    if(count == 0){
    	alert("Bạn chưa chọn mục để xóa.");
    	return false;
    }
    var r = confirm("Bạn có đồng ý xóa không?");

    if(r){
        params['currentpage'] = current;
       
        $.post(baseurl+"admin/"+module+"/delete/", params, function(data) {
            $('#mainlist').html(data);
        });
        return false;
  }
}

    $(document).ready(function(){
        $("#cb_all").click(function(){
            var checked_status = this.checked;
            $(".cb_item").each(function(){
            	this.checked = checked_status;
            })
        });
        
        $(".cb_item").click(function(){
            var checked_status = this.checked;
            if(!checked_status){
                $("#cb_all").attr('checked', checked_status); 
            } 
        })
    });