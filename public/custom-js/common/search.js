
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
    
    window.SearchBookingRecords = function(url){
        var  location= $('#search_location').val();
        
        if($('#calendar_date').val() !=''){
            var  calendar_date= $('#calendar_date').val();
        }else{
            var  calendar_date = new Date().toLocaleDateString();
        }
        console.log(calendar_date);
        
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
});