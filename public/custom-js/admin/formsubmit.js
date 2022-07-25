$(window).on('load', function () {
    // console.log('load');
    $('ul.add-on-list-nav').find('li button').removeClass('active').removeClass('show');
    if (window.location.href.indexOf("add-on-approved-tab") > -1) {
        console.log('tt');
        $('ul.add-on-list-nav').find('li button').removeClass('active').removeClass('show');
        // $('ul.add-on-list-nav').find('li button#add-on-approved-tab').addClass("active");
        $('ul.add-on-list-nav').find('li button#add-on-approved-tab').click();
        // $('#add-on-approved').
        // $('#add-on-approved-tab').click();
    
    }
    if (window.location.href.indexOf("Waiting-for-approval-tab") > -1) {
        $('ul.add-on-list-nav').find('li button#Waiting-for-approval-tab').click();
        // $('#Waiting-for-approval-tab').click();
    } 
    if (window.location.href.indexOf("all-ads-on-tab") > -1) {
    
        $('ul.add-on-list-nav').find('li button#all-ads-on-tab').click();
        // $('#Waiting-for-approval-tab').click();
    
    } 
    if (window.location.href.indexOf("add-on-reject-tab") > -1) {
    
        $('ul.add-on-list-nav').find('li button#add-on-reject-tab').click();
        // $('#Waiting-for-approval-tab').click();
    
    } 
});
$(document).ready(function(){
 
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    window.SearchRecords = function(url,keyword=null){
        // alert('gfdg');
        var tab_id = $("ul.theme-tabs li a.active").attr("id");
        console.log(tab_id);
        var sub_tab_id = $("ul.add-on-list-nav li button.active").attr("id");
        console.log(sub_tab_id);
        if(tab_id == 'information-tab'){
            var table = 'partner_products';
        }else if(tab_id == 'celebrants-tab'){
            var table = 'addons';
        }
        $.ajax({
            type: "post",
            url: url,
            data: {
                'search': keyword,'table':table
                
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
                if(tab_id == 'information-tab'){
                   
                    // $(".searchList").html(response);
                    $('#'+sub_tab_id+'_searchList').html(response);
                }else{
                    $("#addon_list").html(response);
                }
                
                // $("#flash").hide();
            }
        });
    }

    

    window.changeStatus = function(url,id,status){ 
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
                
                $('#detail_change_class-'+id).removeAttr('class');
                $('#detail_change_class-'+id).addClass('p-1 px-3 d-inline text-decoration-none ms-3 d-none '+response.data.class);
                // if(tab)
         
                $('#'+tab_id+'_'+id).find("#change_status-"+id).html(response.data.status);
                window.location = tab_id;
                // if(tab_id =='add-on-approved-tab'){
                //     window.location = tab_id;
                // }else if(tab_id == 'waiting-for-approval-tab'){

                // }else if(tab_id =='add-on-reject-tab'){

                // }
                // else if(tab_id =='all-ads-on-tab'){
                //     window.location = tab_id;
                // }

                //on change p status get krke compare krke usi tab p reload krana h
                
            }
        });
    }
    // console.log('trr');
    // console.log(window.location.href);
    
    // window.addSlug = function(){
    //     var tab_id = $(this).find('li').find('button.active').attr("id");
    //     console.log(tab_id);
    // }
    $('ul.add-on-list-nav').click(function(){

        var tab_id = $(this).find('li').find('button.active').attr("id");
        history.pushState('', '', [tab_id])
        // console.log(tab_id);
    
    });
    

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