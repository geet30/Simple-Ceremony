$(document).ready(function() {
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    window.deleteRecord = function(e,url){
        
        var id =  $(e).attr('id');
        const route = url;
        const data = {'id':id};
        $.ajax({
            method:'POST',
            data:data,
            url:route,
            
            success:function(response){
            },
        });
    } 
});  
