<script type="text/javascript">
$(document).ready(function(){
    
    $('.open-add-to-wedding').click(function(){
        var data = {};
        data['price'] = $(this).data('price');
        data['package_id'] = $(this).data('id');
        data['terms'] = $(this).data('terms');
        data['package_name'] = $(this).data('package_name');
        // $('.package_name').val(package_id);
        appendHtml('keyCart', 'cart',data);
       
       
   
   })
    $('.show-addon-basket').click(function(){
        $('#termsModal').modal('hide');
   
   })
});
</script>