
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
            // console.log($('#calendar_date').val());
            // console.log($('input[name="booking_time"]:checked').val())
            // var validate;
            // if(step=='step-two'){
            //     // const validate = await asyncExample()

            //     validate = checkValidtion(); 
            //     console.log(validate);
            // } 
            //  async function checkValidtion() {
            //     const y = await 20;
            //     console.log(y); // 20
            // }
           
            // return false;
            
            // if(validate != false){
                var calendar_date =  $('#calendar_date').val();
                var booking_time =  $('input[name="booking_time"]:checked').val();
                var locationId =  $('#locationId').val();
                var first_couple_name = $('#first_couple_name').val();
                var second_couple_name = $('#second_couple_name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var ceremony_type = $('input[name="ceremony_type"]:selected').val();
                // history.pushState('', 'tile', ['/url']) 
                
            
                // var formData = new FormData($('#calendar_form')[0]);
                // formData.append('_token',  $("input[name=_token]").val());
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
                        
                    }
                });
            // }
        
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
        // const asyncExample = () => {
        //     return axios(users)
        // }
       
        // const asyncExample = () => {
            window.checkValidtion = function(){
                // var forms = document.getElementById(form_id);
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                f3();
                async function f3() {
                    const y = await 20;
                    console.log('ttt');
                    var validation = Array.prototype.filter.call(forms, function(form) {    
                        console.log('ggg');
                
                        form.addEventListener('click', function(event) {

                            // event.preventDefault();
                            // $(".submitBtn").attr("disabled", false);
                            
                            if (form.checkValidity() === false) {
                                // alert(form.checkValidity())
                                event.preventDefault();
                                event.stopPropagation();
                                console.log(form.checkValidity());
                                return false;
                            }
                            form.classList.add('was-validated');
                            window.setTimeout(function () {
                                var errors = $('.invalid-feedback:visible:first').prev();
                                if (errors.length) {
                                    $('html, body').animate({ scrollTop: errors.offset().top - 10 }, 500);
                                }
                            }, 0);
                        }, false);
                    });
                
                }
               

                    
                
            }
        // }
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
        $("a.back_button").on("click", function(){
            let currentLevel = $(this).closest('.tab').attr('data-level');
            console.log(currentLevel);
            let prevLevel = parseInt(currentLevel) - 1;
            console.log(prevLevel);
            $('.tab').removeClass("active");
            $('.tab').each(function(index, item) {
            if(parseInt($(item).attr('data-level')) === prevLevel) {
                $(item).addClass('active');
            }
            })
        });

    });
  
//   }, false);
</script>