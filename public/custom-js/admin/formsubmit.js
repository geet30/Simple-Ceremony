
$(document).ready(function(){
 
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    

    window.changeStatus = function(url,id,status,detail,tab_id,type){ 
       
       
        if(status == 2 && type =='addon'){

            var secondoffcanvas = document.getElementById('offcanvasgivefeedbackaddons')
            var bsOffcanvas2 = new bootstrap.Offcanvas(secondoffcanvas)
            bsOffcanvas2.show()
            $('#product_id').val(id);
            

            // return false;
        }else{
            changeStatusAjax(url,id,status,detail);
        }
       
    }
    

    window.changeStatusAjax = function(url,id,status,detail){
      
        var tab_id = $("ul.add-on-list-nav li button.active").attr("id");
        $.ajax({
            type: "post",
            url: url,
            data: {
                'id': id,'status':status,
                
            },
            dataType: 'json',
            cache: false,
            beforeSend:function(){
                $('#loading').show();
            },
            success: function(response)
            {
                $('#'+tab_id+'_'+id).removeAttr('class');
                $('#'+tab_id+'_'+id).addClass('btn dropdown-toggle '+response.data.class);
                $('#'+tab_id+'_'+id).find("#change_status-"+id).html(response.data.status);
                if(detail == 'detail'){
                    window.location.reload();
                }else{
    
                    window.location = tab_id;
                }
                $('#loading').hide();
              
            }
        });
    }
    window.submitFeedbackform = function(action,method,formData,form,status,detail,product_id){
        $('.form-error').html('');
        $('.message').html('');
        $.ajax({
            url: action,           
            type: method,
            dataType: 'json', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            beforeSend:function(){
                $('#loading').show();
            },
            success: function(response) {
                if (response.status) {
                    form.trigger("reset");
                    $(document).find('.message').html("<div class='alert alert-success'>" + response.message + "</div>");
                    changeStatusAjax('/change-status',product_id,status,detail)

                }
                else{
                    setTimeout(function() { 
                        $(document).find('.message').html("<div class='alert alert-danger'>" + response.message + "</div>"); 
                    }, 300);
                
                    
                }
                $('#loading').hide();
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
            beforeSend:function(){
                $('#loading').show();
            },
            success: function(response) {
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
                $('#loading').hide();
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

    window.submitCommonfunction= function(id,action,method,form){
        $('.form-error').html('');
        $('.message').html('');
        $.ajax({
            url: action,
            dataType: 'JSON', // what to expect back from the server
            data: $('#'+id).serialize(),
            type: method,
            beforeSend:function(){
                $('#loading').show();
            },
            success: function(response) {
                if (response.status) {
                    $(document).find('.message').html("<div class='alert alert-success'>" + response.message + "</div>");
                    setTimeout(function () { location.reload(); }, 1000);
                }
                else{
                    setTimeout(function() { 
                        $(document).find('.message').html("<div class='alert alert-danger mb-3 alert-block'>" + response.message + "</div>"); 
                    }, 300); 
                    hideAlert();  
                }
                $('#loading').hide();
            },
            error: function(response) {  
                if( response.status === 400 ) {
                    $(document).find('.message').html("<div class='alert alert-danger mb-3 alert-block'>" + response.responseJSON.message + "</div>");
                    hideAlert(); 
                }
                try {
                    $.each(response.responseJSON.errors,function(field_name,error){
                        $(document).find('[name='+field_name+']').after('<span class="form-error">' +error+ '</span>')
                    }) 
                } catch (err) {
                }
            },
        })
    }

    function hideAlert(){
        if($(".alert").is(":visible")){
            $(".alert").slideDown(300).delay(3000).slideUp(300);
        }
    }
});