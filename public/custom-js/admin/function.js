
$(document).ready(function(){
    window.showFeedback = function(text,parentClass,close){ 
        var feedback =` <div class="alert alert-primary alert-dismissible" role="alert">
        <div class="d-flex">
           <div class="me-3"><img src="/images/info.svg" class="img-fluid" alt="info-icon"></div>

           <div class="feedbackDiv">
              <p class="body-1 mb-0">${text}</p>
           </div>
        </div>
     </div>`;
        $('.'+parentClass).append(feedback)
        $('.'+close).click();
    }
    //function to append selection locations in celebrant form  
    window.assignLocation = function(input,parentClass,close){ 
        const text = $('.'+input+" option:selected").text();
        if(checkLocationExistance(text)==false){
          $('.'+close).click();
        $("."+input).val('').trigger('change')
          return;
        }
        const val = $('.'+input).val();
        $('.emptyRecord').css('display', 'none');
        var celebrantLocation ='<div class="row locDiv mb-2"><div class="col-10 col-sm-8 col-md-6"><input type="text" value="'+text+'" readonly class="form-control body-1 netural-100 locationText" > <input type="hidden" value='+val+' name="locations[]"></div><div class="col-2 col-sm-4 col-md-6"><a class="cross-icon" onclick="remove(`locDiv`,this)"><img src="/images/icons/cross.svg" class="img-fluid"></a></div></div>';
        $('.'+parentClass).append(celebrantLocation)
        $('.'+close).click();

        $("."+input).val('').trigger('change')
        // $(".select2Popup").val('').trigger('change')
    }

    //function to check already existance of location
    window.checkLocationExistance = function(text) { 
        const clsArr = $('.locationText');
        var status = true;
        clsArr.each(function(index, ele){
          if(text==$(ele).val()){
            status = false
          }
        }); 
        return status
    }

    //function to change the status of record
    window.changeStatusWithouttab = function(url,id,status){
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
                window.location.reload();
            }
        });
    }
    window.duplicateEmail = function(element){
        var email = $(element).val();
        $.ajax({
            type: "POST",
            url: "/checkemail",
            data: {email:email},
            dataType: "json",
            success: function(res) {
                $('#second-form').prop("disabled",false);
                console.log(res.status,'statuys');
                $(document).find('.email_exist').find('.duplicate_email').addClass('d-none');
                if(res.status == false){
                    $(document).find('.email_exist').find('.duplicate_email').removeClass('d-none');
                    $(document).find('.email_exist').find('.duplicate_email').addClass('d-block');
                    $('#second-form').prop("disabled",true);
                    
                }else{
                    $(document).find('.email_exist').find('.duplicate_email').removeClass('d-block');
                    $(document).find('.email_exist').find('.duplicate_email').addClass('d-none');
                    
                }
                
            },
            error: function (jqXHR, exception) {

            }
        });
    }

    //hide and show element
    window.displayItem = function(ele, cls) {
        $('.'+ele).addClass('d-none');
        $('.'+cls).addClass('d-block');
        $('.'+cls).removeClass('d-none');
        $(document).find('.change_password').removeClass('d-none');
        $(document).find('.change_password').addClass('d-block');
        $('.readonlyInput').attr("readonly", false); 
        $('.readonlyInput').attr("disabled", false); 
    }

    //function to browse image
    window.browseImage =function(ele, cls){
        $('.'+cls).click()
    }

    //preview single image
    window.readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.previewImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    window.changeStatusText = function(cls,parentcls,inputcls,val,text){
        $("."+parentcls).removeClass("waiting-approval approved rejected");
        $("."+parentcls).addClass(cls);
        $("."+parentcls).text(text);
        $("."+inputcls).val(val);
    }

    //function to change the status of record
    window.readNotification = function(url,redirection){
        $.ajax({
            type: "PUT",
            url: url,
            dataType: 'json',
            cache: false,
            success: function(response)
            {
                window.location = redirection;
            }
        });
    }
});
