
<script type="text/javascript">
$(document).ready(function(){
    // alert($('#image_id').val());
    if($('#image_id').val()=='' || $('#image_id').val()=='0'){
        $('.delete-voucher-image').css('visibility','hidden');
    }
    $('.delete-icon-span').click(function(){
        $('#image_id').val('');
        $('.drop-zone__thumb').remove();
        $('.delete-voucher-image').css('visibility','hidden');
       
        $('.drop-zone__input').before(`<span class="drop-zone__prompt text-center d-flex flex-column py-5 text-center">
            <img src="/images/icons/jpg-logo.svg" class="img-fluid jpg-icon">
            <span class="dark-blue-100 h4 text-center">Drop your photos here,<br>
            or <span class="turquoise-100 text-decoration cursor-pointer">browse file</span></span>
            </span>`);

    })
 
});


</script>