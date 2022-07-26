
<script type="text/javascript">

    $(document).ready(function(){
        $('#list-profile-list').attr("disabled","disabled");
        $('#list-messages-list').attr("disabled","disabled");
        $('.calendar-wrapper').calendar({

            onClickDate:function (date) {

                $('#calendar-wrapper').updateCalendarOptions({
                    date: date
                });

                $('#calendar_date').val(new Date(date).toLocaleDateString());

            }
        });
       
       
        window.bookingSubmit = function(url,step,form_id){
            // var that = this;
            // that.preventDefault();
            // 

            // setTimeout(function(){
                // if($('.invalid-feedback').is(":visible")==false){
                    
                    var calendar_date =  $('#calendar_date').val();
                    var booking_time =  $('input[name="booking_time"]:checked').val();
                    var locationId =  $('#locationId').val();
                    var first_couple_name = $('#first_couple_name').val();
                    var second_couple_name = $('#second_couple_name').val();
                    var email = $('#email').val();
                    var phone = $('#phone').val();
                    var ceremony_type = $('input[name="ceremony_type"]:selected').val();
                    // history.pushState('', 'tile', ['/url']) 
                
            
              
                    $.ajax({
                        type: "post",
                        url: url,
                        // data : formData,
                        data: {                   
                            'calendar_date': calendar_date,'booking_time':booking_time,'locationId':locationId,
                            'first_couple_name': first_couple_name,'second_couple_name':second_couple_name,'email':email,'phone':phone,'ceremony_type':ceremony_type,
                        },
                        dataType: 'json',
                        cache: false,
                    
                        success: function(response)
                        {

                            if(step=='step-one'){
                                //condition lgani second page ka slug 
                                // slug me return krna h view
                                //through cache data show 

                                $('#list-profile-list').prop("disabled", false);
                                $('#list-profile-list')[0].click();
                            }
                            if(step=='step-two'){
                            
                                $('#list-messages-list').prop("disabled", false);
                                $('#list-messages-list')[0].click();
                            }
                            
                        },
                        
                    }); 
                // }
            // }, 2000);
            
           
        
        }
        
       
        $('.back_button').click(function(e) {
            var id = $(this).data('id');
            $('#'+id)[0].click();
        
        });
        
        
        if (window.location.href.indexOf("session_id") > -1) {
            $('#show_payment_success_alert').modal('show');
        }

   
    });
    
    $(document).ready(function(){
       
        $('.list-group a').click(function(e) {
            e.preventDefault();
            $(this).tab('show');
        });
        // store the currently selected tab in the hash value
        $(".list-group > a").on("shown.bs.tab", function(e) {
            var id = $(e.target).attr("href").substr(1);
            window.location.hash = id;
        });
        // on load of the page: switch to the currently selected tab
        var hash = window.location.hash;
        $('.list-group a[href="' + hash + '"]').tab('show');

        

    });
</script>