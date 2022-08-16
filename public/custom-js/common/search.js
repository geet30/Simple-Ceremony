
$(document).ready(function(){
 
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $('.calendar-wrapper').calendar({
            onClickDate:function (date) {
                $('#calendar-wrapper').updateCalendarOptions({
                    date: date
                });

                $('#calendar_date').val(new Date(date).toLocaleDateString());
            }
        });
        $('.set_date_time').click(function(){
            if($('#calendar_date').val() !=''){
                $('#set_date_time').html($('#calendar_date').val());
            }else{
                $('#set_date_time').html(new Date().toLocaleDateString());
               
            }

        })
    
    window.SearchResults = function(url){
        var filter = $('.filter_by_categories').val()
        
        var  location= $('#search_location').val();
        var calendar_date = '';
        if($('#calendar_date').val() !=''){
            var  calendar_date= $('#calendar_date').val();
        }else{
            // var  calendar_date = new Date().toLocaleDateString();
        }
       
        var booking_start_time  = $('#booking_start_time').val();
        var booking_end_time  = $('#booking_end_time').val();
        
        // return false;
        $.ajax({
            type: "post",
            url: url,
            data: {
                'id': location,'booking_date':calendar_date,'booking_start_time':booking_start_time,'booking_end_time':booking_end_time,'filter':filter
                
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
});