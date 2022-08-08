
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
            success: function(response)
            {
                $('#'+tab_id+'_'+id).removeAttr('class');
                $('#'+tab_id+'_'+id).addClass('btn dropdown-toggle '+response.data.class);
                // $('#detail_change_class-'+id).removeAttr('class');
                // $('#detail_change_class-'+id).addClass('p-1 px-3 d-inline text-decoration-none ms-3 d-none '+response.data.class);
                $('#'+tab_id+'_'+id).find("#change_status-"+id).html(response.data.status);
                if(detail == 'detail'){
                    window.location.reload();
                }else{
    
                    window.location = tab_id;
                }
              
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
            

            success: function(response) {
                // console.log(response.data);
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