
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
    $('.select_partner').change(function(e){
        
        var userid = $(this).val();
        $.ajax({
            type: 'post',
            url: 'get-packages',
            data: {
                'id': userid
            },
            dataType: 'json', // what to expect back from the server
            cache: false,
            success: function(response) {
               
                if (response.status) {
                    // console.log(response.data);
                    var temp = $('.select_packages'); // cache it
                    temp.empty();
                    $.each(response.data, function (i, data) {      
                        $('<option>',
                        {
                            value: data.id,
                            text: data.package_name
                        }).html(data.package_name).appendTo(".select_packages");
                    });

                }
                else{
                    var temp = $('.select_packages'); // cache it
                    temp.empty();
                    $('<option>',
                    {
                        value: '',
                        text: 'Select package'
                    }).html('Select package').appendTo(".select_packages");
 
                }
            },
            error: function(response) { // handle the error
                console.log(response.responseJSON.data);
                var temp = $('.select_packages'); // cache it
                temp.empty();
                $('<option>',
                {
                    value: '',
                    text: 'Select package'
                }).html('Select package').appendTo(".select_packages");
                

            },
            

        })
        

    })

 
});


</script>