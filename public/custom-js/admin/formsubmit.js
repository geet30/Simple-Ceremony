$(document).ready(function(){
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    window.SearchRecords = function(url,keyword=null){
        
        $.ajax({
            type: "post",
            url: url,
            data: {
                'search': keyword,
                
            },
            dataType: 'html',
            cache: false,
            beforeSend: function(html) 
            {
                // $('#loading').show();
            },
            success: function(response)
            {
                // setTimeout(() => {
                //     // $('#loading').hide();
                // }, 500);
                $("#addon_list").html(response);
                // $("#flash").hide();
            }
        });
    }
    window.changeStatus = function(url,id,status){ 
             
        $.ajax({
            type: "post",
            url: url,
            data: {
                'id': id,'status':status,
                
            },
            dataType: 'json',
            cache: false,
            success: function(response)
            {
                $('#dropdownMenuButton1-'+id).removeAttr('class');
                $('#dropdownMenuButton1-'+id).addClass('btn dropdown-toggle '+response.data.class);
                $("#change_status-"+id).html(response.data.status);
                
            }
        });
    }

    window.submitform = function(id,action,method,formData,form){
        $('.form-error').html('');
        $('.message').html('');
        $.ajax({
            url: action,
            dataType: 'json', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            type: method,

            success: function(response) {
                // console.log(response.data);
                if (response.status) {
                    form.trigger("reset");
                    $(document).find('.message').html("<div class='alert alert-success'>" + response.message + "</div>");
                    setTimeout(function () { location.reload(); }, 1000);

                }
                else{
                    setTimeout(function() { 
                        $(document).find('.message').html("<div class='alert alert-danger'>" + response.message + "</div>"); 
                    }, 300);
                
                    
                }
                // display success response from the server
            },
            error: function(response) { // handle the error
                
                try {
                    $.each(response.responseJSON.errors,function(field_name,error){
                        $(document).find('[name='+field_name+']').after('<span class="form-error">' +error+ '</span>')
                    })
                    
                } catch (err) {

                }

            },

        })
    }
});