
$(document).ready(function(){
 
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    
    window.SearchBookingRecords = function(url){
        var  location= $('#search_location').val();
        var  calendar_date= $('#calendar_date').val();
        
        $.ajax({
            type: "post",
            url: url,
            data: {
                'search': location,'calendar_date':calendar_date
                
            },
            dataType: 'html',
            cache: false,
            
            success: function(response)
            {
                $("#searchResult").html(response);
                
            }
        });
    }
    window.SearchRecords = function(url,keyword=null){
        
        var tab_id = $("ul.theme-tabs li a.active").attr("id");
       
        var sub_tab_id = $("ul.add-on-list-nav li button.active").attr("id");
        var status ='';
        if(sub_tab_id == 'Waiting-for-approval-tab'){
            status = 0;

        }else if(sub_tab_id == 'add-on-approved-tab'){
            status = 1;
        }
        else if(sub_tab_id == 'add-on-reject-tab'){
            status = 2;
        }
        
       
        if(tab_id == 'information-tab'){
            var table = 'partner_products';
        }else if(tab_id == 'celebrants-tab'){
            var table = 'addons';
        }
        $.ajax({
            type: "post",
            url: url,
            data: {
                'search': keyword,'table':table,'status':status
                
            },
            dataType: 'html',
            cache: false,
            
            success: function(response)
            {
               
                if(tab_id == 'information-tab'){
                    $('#'+sub_tab_id+'_searchList').html(response);
                }else{
                    $("#addon_list").html(response);
                }
            }
        });
    }
  

    window.changeStatus = function(url,id,status,detail){ 
       
       
        if(status == 2){

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