<script type="text/javascript">
    $(document).ready(function() {

        $('#list-profile-list').addClass("disable-click");
        $('#list-messages-list').addClass("disable-click");
        $('.hide_timeslots').addClass("d-none");
       
       
        $('#booking_start_time').change(function(e) {

            $("#booking_end_time option").removeAttr('disabled');
            $("#booking_end_time option[value='" + $(this).val() + "']").attr('disabled', true);
            var value = $('#booking_start_time option:selected').next().val();
            $("#booking_end_time").val(value).trigger("change");

        })
        
        $('.country-list li').click(function() {
            // alert($(this).data('dial-code'));
            $("#code").val(($(this).data('dial-code')));
        })
        $('#ceremony_type').change(function(e) {
            var url = '/get-booking-ceremony-type';
            $.ajax({
                type: "get",
                url: url,
                data: {'id':$(this).val()},
                dataType: 'html',
                cache: false,             
                success: function(response) {
                    console.log(response);
                    $('.CeremonyResult').html(response);

                },
            });
            
        });
        
        window.submitFirstStep = function(event,id,start_time,end_time,location_name,price,locationId,celebrant_id) {
          
            var form = document.getElementById('calendar_form');
            if ($('#calendar_date').val() == '') {
                alert('please select date from calendar')
                return false;
            }
          
            var formData = new FormData(document.getElementsByName('calendar_form')[0]);
            formData.append('calendar_dayslot_id',id);
            formData.append('celebrant_id',celebrant_id);
            formData.append('location_name',location_name);
            formData.append('booking_start_time',start_time);
            formData.append('booking_end_time',end_time);

            var url = '/post-booking-location-form';
            var step = 'step-one';
        
            bookingSubmit(url, step, formData);

        }
        $('#second-form').click(function(e) {
            e.preventDefault();
            var form = document.getElementById('userDetail');
            if (form.reportValidity()) {
                var url = '/post-booking-user-detail';
                var step = 'step-two';
                var formData = new FormData(document.getElementsByName('userDetail')[0]);

                bookingSubmit(url, step, formData);

            } else {
                form.classList.add('was-validated');
               
                $(document).find('.email_exist').find('.duplicate_email').addClass('d-none');
                $(".tel-input").each(function () {
                    let telInput = $(this).get(0);
                    if (
                        $(this).prop("required") &&
                        !telInput.checkValidity()
                    ) {
                        $(this)
                            .parents(".phone_number")
                            .find(".phone_number_required")
                            .addClass("d-block");
                    } else {
                        $(this)
                            .parents(".phone_number")
                            .find(".phone_number_required")
                            .removeClass("d-block");
                    }
                });
                window.setTimeout(function () {
                    var errors = $(
                        ".invalid-feedback:visible:first"
                    ).prev();
                    if (errors.length) {
                        $(window).scrollTop(0);
                        // $('html, body').animate({ scrollTop: errors.offset().top - 10 }, 500);
                    }
                }, 0);

            }
        })

        window.bookingSubmit = function(url, step, data) {         
            $.ajax({
                type: "post",
                url: url,
                data: data,
                dataType: 'json',
                cache: false,               
                contentType: false,
                processData: false,              
                success: function(response) {
                    if (step == 'step-one') {
                        $('#list-profile-list').removeClass("disable-click");
                        $('#list-profile-list')[0].click();
                    }
                    if (step == 'step-two') {
                        $('#list-messages-list').removeClass("disable-click");
                        $('#list-messages-list')[0].click();
                    }

                },
                error: function(error) {
                    $(window).scrollTop(0);
                    $(document).find('.message').html("<div class='alert alert-danger'>" + error
                        .responseJSON.message + "</div>");
                    return false;
                },

            });
        }

        $('.back_button').click(function(e) {
            var id = $(this).data('id');
            $('#' + id)[0].click();

        });

        if (window.location.href.indexOf("session_id") > -1) {
            $('#show_payment_success_alert').modal('show');
        }


    });
</script>
