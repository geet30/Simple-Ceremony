

<script type="text/javascript">
$(document).ready(function(){
   
    $(document).find(".getEditData").on("click", function(e) { 
       
        var couple_name = $(this).data('couple_name');
        // alert(couple_name,'couple_name');
        
        var certificate_no = $(this).data('id');
        var booking_id = $(this).data('booking_id');
        var details = $(this).data('details');        
        var created_at = $(this).data('created_at');
        var status = $(this).data('status');
        
        $('#update-certificate').find('#id').val(certificate_no);
        $('#update-certificate').find('#booking_id').val(booking_id);
        $('#update-certificate').find('#date_use').val(created_at);
        $('#update-certificate').find('#details').val(details);
        if(status ==1){
            $('#update-certificate').find('#status').val(status).prop('checked',true);
        }else{
            $('#update-certificate').find('#status').val(status).prop('checked',false);
        }            
        $("#update-certificate").prop("action",$(this).data('action'));      
        $("#update-certificate").find('#certificate_no').val(certificate_no).trigger("change");
        $('#name_of_couple').val(couple_name);

    })
    
    $("#update-certificate").on("submit", function(e) { 
        e.preventDefault();
        var id = $(this).attr("id");
        var action = $(this).attr("action"); 
        var method = $(this).attr("method");
        var formData = new FormData();
        formData.append('id', $('#certificate_no').val());
        formData.append('booking_id', $('#booking_id').val());
        formData.append('date_use', $('#date_use').val());
        var status =0;
        if ( $('#status').prop("checked")) {
            status = 1;
        }
        
        formData.append('status', status);
        formData.append('details', $('#details').val());      
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