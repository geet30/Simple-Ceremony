
<script type="text/javascript">

    $(document).ready(function(){
       
        $('.calendar-wrapper').calendar({

            onClickDate:function (date) {

                $('#calendar-wrapper').updateCalendarOptions({
                    date: date
                });

                $('#calendar_date').val(new Date(date).toLocaleDateString());

            }
        });
        window.bookingSubmit = function(url,formid){
            console.log(url);
            var calendar_date =  $('#calendar_date').val();
            var booking_time =  $('#booking_time').val();
            // var formData = new FormData();
            // var formulario = $('#calendar_form');
            // var formData = new FormData($('#calendar_form')[0])
            // formData.append('name', $('#addon-name').val());
            // formData.append('_token',  $("input[name=_token]").val());
            $.ajax({
                type: "post",
                url: "post-booking-location-form",
                data: {
                'calendar_date': calendar_date,'booking_time':booking_time,
                
            },
                dataType: 'json',
                cache: false,
               
                success: function(response)
                {
                   
                    $("#addon_list").html(response);
                }
            });
        
        }

       
           
            
        
    });
</script>