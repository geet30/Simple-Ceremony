
$('.eyeIcon').click(function(){
      if($(this).hasClass('fa-eye-slash')){   
        $(this).removeClass('fa-eye-slash');          
        $(this).addClass('fa-eye');         
        $('.passwordInput').attr('type','text');          
      }else{
        $(this).removeClass('fa-eye');
        $(this).addClass('fa-eye-slash');  
        $('.passwordInput').attr('type','password');
      }
  });

