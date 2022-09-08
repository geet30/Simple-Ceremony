
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
    
    window.SearchResults = function(url,keyword=null){
        $("#selectinput").select2("close");
        var filter = $('.filter_by_categories').val()
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
        var location= $('#search_location').val();
        var calendar_date = '';
        if($('#calendar_date').val() !=''){
            var  calendar_date= $('#calendar_date').val();
        }
        var booking_start_time  = $('#booking_start_time').val();
        var booking_end_time  = $('#booking_end_time').val();
        $.ajax({
            type: "post",
            url: url,
            data: {
                'search': keyword,'id': location,'booking_date':calendar_date,'booking_start_time':booking_start_time,'booking_end_time':booking_end_time,'filter':filter,'firstOptgroup':firstOptgroup,'secondOptgroup':secondOptgroup
                
            },
            dataType: 'html',
            cache: false,
            
            success: function(response)
            {
                $(".searchResult").html(response);
                
            }
        });
    }
    window.SearchResultsWithTab = function(url,keyword=null){
        const sub_tab_id = $("ul.add-on-list-nav li button.active").attr("id");
        $("#selectinput").select2("close");
        var filter = $('.filter_by_categories').val()
        var location= $('#search_location').val();
        var calendar_date = '';
        if($('#calendar_date').val() !=''){
            var  calendar_date= $('#calendar_date').val();
        }
        var booking_start_time  = $('#booking_start_time').val();
        var booking_end_time  = $('#booking_end_time').val();
        var divId= sub_tab_id.slice(0, -4)
        console.log(divId);
        $.ajax({
            type: "post",
            url: url,
            data: {
                'search': keyword,'id': location,'booking_date':calendar_date,'booking_start_time':booking_start_time,'booking_end_time':booking_end_time,'filter':filter               
            },
            dataType: 'html',
            cache: false,
            
            success: function(response)
            {
                $("#"+divId).html(response);
                
            }
        });
    }
    window.SearchRecords = function(url,keyword=null){
       
        var tab_id = $("ul.theme-tabs li a.active").attr("id");
        
        var sub_tab_id = $("ul.add-on-list-nav li button.active").attr("id");
        var sub_tab_target = $("ul.add-on-list-nav li button.active").attr("data-bs-target");
        var status ='';
        if(sub_tab_id == 'Waiting-for-approval-tab'){
            status = 0;

        }else if(sub_tab_id == 'add-on-approved-tab'){
            status = 1;
        }
        else if(sub_tab_id == 'add-on-reject-tab'){
            status = 2;
        }
        var divId= sub_tab_id.slice(0, -4);
        console.log(divId,'divid');
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
                    $("#addon_list").html(response);
                }
            }
        });
    }

    window.searchBookingAddon = function(url,keyword=null){
        $.ajax({
            type: "post",
            url: url,
            data: {
                'search': keyword,
            },
            dataType: 'html',
            cache: false,
            success: function(response)
            {
                $("#searchAddon").html(response);
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
        console.log('keyword',keyword);
        var status ='';
        if(sub_tab_id == 'follow-up-tab'){
            status = 0;

        }else if(sub_tab_id == 'booked-tab'){
            status = 1;
        }
        else if(sub_tab_id == 'no-interest-tab'){
            status = 2;
        }
        var divId= sub_tab_id.slice(0, -4)
        console.log(divId, 'divId');
        $.ajax({
            type: "post",
            url: url,
            data: {
                'search': keyword, 'status':status, 'type':type 
            },
            success: function(response){
                console.log(response, 'response'); 
                $("#"+divId).html(response);
            }
            
        });
    }
});