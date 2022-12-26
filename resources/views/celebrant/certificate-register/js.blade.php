

<script type="text/javascript">
$(document).ready(function(){
   

    $('.getEditData').click(function(){
       
        var couple_name = $(this).data('couple_name');
        var certificate_no = $(this).data('certificate_no');
       
        $("#update-certificate").prop("action",$(this).data('action'));

        $("#update-certificate").find('#certificate_no').val(certificate_no);
        // $('#certificate_no').val('selectedvalue');
        $("#update-certificate").find('#certificate_no [value='+certificate_no+']').attr('selected', 'true');
        $('#name_of_couple').val(couple_name);

    })
    
    $("#update-certificate").on("submit", function(e) { 
        e.preventDefault();
        var id = $(this).attr("id");
        var action = $(this).attr("action"); 
        var method = $(this).attr("method");
        var formData = new FormData();
        formData.append('id', $('#addon-edit-id').val());
        formData.append('name', $('#addon-edit-name').val());
        formData.append('_token',  $("input[name=_token]").val() );
      
        var form = $(this);
        submitform(id,action,method,formData,form);
    });
    $("#add-certificate").on("submit", function(e) { 
        e.preventDefault();      
        var id = $(this).attr("id");
        var action = $(this).attr("action"); 
        var method = $(this).attr("method");
        var formData = new FormData();

        formData.append('certificate_prefix', $('#certificate_prefix').val());
        formData.append('certificate_suffix', $('#certificate_suffix').val());
        formData.append('first_certificate_no', $('#first_certificate_no').val());
        formData.append('no_of_certificates', $('#no_of_certificates').val());

        formData.append('_token',  $("input[name=_token]").val() );
        var form = $(this);
        submitform(id,action,method,formData,form);
                
    });
 
});


</script>