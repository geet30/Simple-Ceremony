
<script type="text/javascript">
$(document).ready(function(){
    $('.delete-voucher-image').css('visibility','hidden');
   

    $('.delete-icon-span').click(function(){
        $('.drop-zone__thumb').remove();
        // $('.drop-zone__thumb').removeAttr("style");
        // $('.drop-zone__thumb').removeData("label");
        $('.delete-voucher-image').css('visibility','hidden');
       
        $('.drop-zone__input').before(`<span class="drop-zone__prompt text-center d-flex flex-column py-5 text-center">
            <img src="/images/icons/jpg-logo.svg" class="img-fluid jpg-icon">
            <span class="dark-blue-100 h4 text-center">Drop your photos here,<br>
            or <span class="turquoise-100 text-decoration cursor-pointer">browse file</span></span>
            </span>`);

    })
 
});


</script>