
<script type="text/javascript">
$(document).ready(function(){
   
    $('.edit-filter').click(function(){
        
        var name = $(this).data('name');
        var id = $(this).data('id');
        $('#update-filters').find('input[name="name"]').val(name);
        $('#update-filters').find('input[name="id"]').val(id);

    })

    
    $("#update-filters").on("submit", function(e) { 
        e.preventDefault();
        var id = $(this).attr("id");
        var action = $(this).attr("action"); 
        var method = $(this).attr("method");
        var formData = new FormData();
        formData.append('id', $('#filter-edit-id').val());
        formData.append('name', $('#filter-edit-name').val());
        formData.append('_token',  $("input[name=_token]").val() );
      
        var form = $(this);
        submitform(id,action,method,formData,form);
    });
    $("#add-filters").on("submit", function(e) { 
        e.preventDefault();
       
        var id = $(this).attr("id");
        var action = $(this).attr("action"); 
        var method = $(this).attr("method");
        var formData = new FormData();

        formData.append('name', $('#filter-name').val());
        formData.append('_token',  $("input[name=_token]").val());
        var form = $(this);
        submitform(id,action,method,formData,form);
                
    });
    window.findPackage = function(url,that,id){
        
        var userid = $(that).val();
        // console.log(id);
        $.ajax({
            type: 'post',
            url: url,
            data: {
                'id': userid
            },
            dataType: 'json',
            cache: false,
            success: function(response) {
               
                if (response.status) {
                    // console.log(response.data);
                   
                    var temp =  $('#package-'+id);
                    temp.empty();
                    $.each(response.data, function (i, data) {      
                        var total_fee = parseInt(data.total_fee);
                        $('<option>',
                        {
                            value: data.id,
                            text: data.package_name
                        }).html(data.package_name+' - $'+total_fee.toFixed(0)).appendTo("#package-"+id);
                    });

                }
                else{
                    var temp =  $('#package-'+id); // cache it
                    temp.empty();
                    $('<option>',
                    {
                        value: '',
                        text: 'Select package'
                    }).html('Select package').appendTo("#package-"+id);
 
                }
            },
            error: function(response) { // handle the error
                console.log(response.responseJSON.data);
                var temp = $('#package-'+id);
                temp.empty();
                $('<option>',
                {
                    value: '',
                    text: 'Select package'
                }).html('Select package').appendTo("#package-"+id);
                

            },
            

        })
        

    // })
    }

 
});


</script>