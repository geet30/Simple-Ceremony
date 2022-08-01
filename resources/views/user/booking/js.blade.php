
<script type="text/javascript">

    $(document).ready(function(){
        
        $('#list-profile-list').addClass("disable-click");
        $('#list-messages-list').addClass("disable-click");
        $('.calendar-wrapper').calendar({
            onClickDate:function (date) {
                $('#calendar-wrapper').updateCalendarOptions({
                    date: date
                });

                $('#calendar_date').val(new Date(date).toLocaleDateString());
            }
        });
        
        $('#first-form').click(function(e){
            var form = document.getElementById('calendar_form');
            if (form.reportValidity()) { 
                var data = {};//create an object
               
                if($('#calendar_date').val() !=''){
                    data['calendar_date'] = $('#calendar_date').val();
                }else{
                    data['calendar_date'] = new Date().toLocaleDateString();
                }
                data['booking_time'] = $('input[name="booking_time"]:checked').val();
                data['locationId']  =  $('#locationId').val();
                var url = '/post-booking-location-form';
                var step = 'step-one';
                
                bookingSubmit(url,step,data);

            }else{
                form.classList.add('was-validated');
                window.setTimeout(function () {
                    var errors = $('.invalid-feedback:visible:first').prev();
                    if (errors.length) {
                        $('html, body').animate({ scrollTop: errors.offset().top - 10 }, 500);
                    }
                }, 0);

            }

           
            
        })
        $('#second-form').click(function(e){
            e.preventDefault();
            var form = document.getElementById('userDetail');
           
            if (form.reportValidity()) { 
              
                var data = {};//create an object
                data['locationId']  =  $('#locationId').val();
                data['first_couple_name'] = $('#first_couple_name').val();
                data['second_couple_name'] = $('#second_couple_name').val();
                data['email']  = $('#email').val();
                data['phone']  = $('#phone').val();
                data['ceremony_type']  = $('#ceremony_type').val();

                var url = '/post-booking-user-detail';
                var step = 'step-two';
               

                bookingSubmit(url,step,data);

            }else{
                form.classList.add('was-validated');
                window.setTimeout(function () {
                    var errors = $('.invalid-feedback:visible:first').prev();
                    if (errors.length) {
                        $('html, body').animate({ scrollTop: errors.offset().top - 10 }, 500);
                    }
                }, 0);

            }
        })
       
        window.bookingSubmit = function(url,step,data){
            $.ajax({
                type: "post",
                url: url,
                data : data,
                dataType: 'json',
                cache: false,
            
                success: function(response)
                {

                    
                    if(step=='step-one'){
                        $('#list-profile-list').removeClass("disable-click");
                        $('#list-profile-list')[0].click();
                    }
                    if(step=='step-two'){
                        $('#list-messages-list').removeClass("disable-click");
                        $('#list-messages-list')[0].click();
                    }
                    
                },
                error: function (error) {
                   
                    $(window).scrollTop(0);
                    $(document).find('.message').html("<div class='alert alert-danger'>" + error.responseJSON.message + "</div>");
                    return false;
                },
                
            }); 
        }
        
       
        $('.back_button').click(function(e) {
            var id = $(this).data('id');
            $('#'+id)[0].click();
        
        });
        
        
        if (window.location.href.indexOf("session_id") > -1) {
            $('#show_payment_success_alert').modal('show');
        }

   
    });
    
</script>