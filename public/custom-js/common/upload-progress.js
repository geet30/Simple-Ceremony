$(document).ready(function() {
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      
    window.uploadProgress = function(e,url,form_id,fileId){
            e.preventDefault();
            var formData=new FormData();
            formData.append('file',e.target.files[0]);
            var filename = e.target.files[0].name;
            $.ajax({
                type: "post",
                url: url,
                data: formData,
                dataType:'json',
                processData: false,
                contentType: false,
               
                // beforeSend:function(){
                //     $('#success').empty();
                //     $('.progress-bar').text('0%');
                //     $('.progress-bar').css('width', '0%');
                // },
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    $(e.target).parent().next('.progress-box').addClass('d-block').removeClass('d-none');
                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = ((evt.loaded / evt.total) * 100);
                            
                            $(e.target).parent().next('.progress-box').find(".progress-percentage").width(percentComplete + '%');
                            $(e.target).parent().next('.progress-box').find(".progress-percentage").html(percentComplete+'%');
                            $(e.target).parent().next('.progress-box').find(".progress-bar").width(percentComplete + '%');
                            $(e.target).parent().next('.progress-box').find(".progress-bar").html(percentComplete+'%');
                        }
                    }, false);
                    return xhr;
                },
                success:function(data)
                {
                    
                    if(data.status == true)
                    {
                        $(e.target).prop('disabled', true);
                        $(e.target).parent().next('.progress-box').find('.progress-box').addClass('d-none').removeClass('d-block');
                        console.log($(e.target).parent().next().next('.uploaded-box'));
                        $(e.target).parent().next().next('.uploaded-box').addClass('d-block').removeClass('d-none');
                        $(e.target).parent().next().next('.uploaded-box').find('.filename').append(filename);
                        $(e.target).parent().parent().next('.next-div-to-file').find('.removeClass').attr('id',data.image);
                       
                        
                    }
                }
            });
        // });
    }
   
});
        
    
   