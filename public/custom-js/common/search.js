
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.set_date_time').click(function(){
        
        if($('#booking_date').val() !=''){
            $('#set_date_time').html($('.booking_date').val());
        }else{
            $('#set_date_time').html(new Date().toLocaleDateString('fr-CA')); 
        }

    })
    
    window.SearchAdminAddons = function(url,keyword=null,cls=null){
    
        var tab_id = $("ul.theme-tabs li a.active").attr("id");   
        var sub_tab_id = $("ul.add-on-list-nav li button.active").attr("id");     
        var status =getStatus();
        var divId= sub_tab_id.slice(0, -4);
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
                    $("#"+divId).html(response);
                }else{
                    $('.'+cls).html(response);
                }
            }
        });
    }

    window.SearchMultipleFilter = function(url,keyword=null,cls=null){
        closedDiv('filter_date_div');
        const sub_tab_id = $("ul.add-on-list-nav li button.active").attr("id");
        $("#selectinput").select2("close");
        var firstOptgroup = [];
        var secondOptgroup = [];
        $('.searchingMultiple option:selected').each(function () {
            if($(this).parent().attr('label') == 'Status') {
                firstOptgroup.push($(this).val());    
            }   
            if($(this).parent().attr('label') == 'Location') {
                secondOptgroup.push($(this).val());    
            }       
        });
        var filter = $('.filter_by_categories').val()
        var location= $('#search_location').val();
        var calendar_date = '';
        if($('#calendar_date').val() !=''){
            var  calendar_date= $('#calendar_date').val();
        }
        var booking_start_time  = $('#booking_start_time').val();
        var booking_end_time  = $('#booking_end_time').val();
        var booking_date = $('.booking_date').val();
        var ceremony_date = $('.ceremony_date:checked').val();
        var payment_date = $('.payment_date:checked').val();
        var status =getStatus();
       
        var current_url = window.location.pathname.split('/');
        if(sub_tab_id != undefined) // if we don't have tabs then we need to do this
            var divId= sub_tab_id.slice(0, -4)
        $.ajax({
            type: "post",
            url: url,
            data: {
                'search': keyword,'id': location,'booking_date':calendar_date,'booking_start_time':booking_start_time,'booking_end_time':booking_end_time,'filter':filter,'firstOptgroup':firstOptgroup,'secondOptgroup':secondOptgroup ,'payment_date':payment_date, 'ceremony_date':ceremony_date,'booking_date':booking_date ,'status':status,'current_url':current_url       
            },
            dataType: 'html',
            cache: false,
            
            success: function(response)
            {
               
                if(sub_tab_id != undefined)
                    $("#"+divId).html(response);
                else
                    if(cls =='simpletabs'){
                        $("."+current_url[2]).html(response);
                    }else{
                        $("."+cls).html(response); // this is if we don't have tabs
                    }
            }
        });
    }
 
    window.searchWithoutTabs = function(url,keyword=null,cls, page){
        const route = url;
        const data = {'page':page,'search':keyword};
        $.ajax({
            method:'GET',
            data:data,
            url:route,
            beforeSend:function(){
            },
            success:function(response){
                $("."+cls).html(response);
            },
        });
    }

    window.searchWithTabs = function(url,keyword=null, type){
        const sub_tab_id = $("ul.add-on-list-nav li button.active").attr("id");   
        var status =getStatus();
        
        var divId= sub_tab_id.slice(0, -4)
        $.ajax({
            type: "post",
            url: url,
            data: {
                'search': keyword, 'status':status, 'type':type 
            },
            success: function(response){
                $("#"+divId).html(response);
            }
            
        });
    }

    window.getStatus = function(){
        const sub_tab_id = $("ul.add-on-list-nav li button.active").attr("id");
        var status = '';
        if(sub_tab_id == 'follow-up-tab'){
            status = 0;

        }else if(sub_tab_id == 'booked-tab'){
            status = 1;
        }
        else if(sub_tab_id == 'no-interest-tab'){
            status = 2;
        }
        else if(sub_tab_id == 'lodged-tab'){
            status = 2;
        }
        else if(sub_tab_id == 'lodged-pending-tab'){
            status = 3;
        }
        else if(sub_tab_id == 'non-legal-tab'){
            status = 4;
        }
        else if(sub_tab_id == 'registered-tab'){
            status = 5;
        }
        else if(sub_tab_id == 'finalised-tab'){
            status = 6;
        }
        else if(sub_tab_id == 'settled-tab'){
            status = 7;
        }
        else if(sub_tab_id == 'cancelled-tab'){
            status = 8;
        } 
        else if(sub_tab_id == 'Waiting-for-approval-tab'){
            status = 0;

        }else if(sub_tab_id == 'add-on-approved-tab'){
            status = 1;
        }
        else if(sub_tab_id == 'add-on-reject-tab'){
            status = 2;
        }
        return status;

    }
});