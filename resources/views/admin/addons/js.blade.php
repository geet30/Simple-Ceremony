
<script type="text/javascript">
$(document).ready(function(){
    $('.edit-addon').click(function(){
        
        var name = $(this).data('name');
        var id = $(this).data('id');
        $('#update-addons').find('input[name="name"]').val(name);
        $('#update-addons').find('input[name="id"]').val(id);

    })
    
    $("#update-addons").on("submit", function(e) { 
        e.preventDefault();
        var id = $(this).attr("id");
        var action = $(this).attr("action"); 
        var method = $(this).attr("method");
        var formData = new FormData();
        formData.append('id', $('#addon-edit-id').val());
        formData.append('name', $('#addon-edit-name').val());
        formData.append('_token',  $("input[name=_token]").val() );
      
        var form = $(this);
        submitform(id,action,method,formData,form);
    });
    $("#add-addons").on("submit", function(e) { 
        e.preventDefault();
       
        var id = $(this).attr("id");
        var action = $(this).attr("action"); 
        var method = $(this).attr("method");
        var formData = new FormData();

        formData.append('name', $('#addon-name').val());
        formData.append('_token',  $("input[name=_token]").val() );
        var form = $(this);
        submitform(id,action,method,formData,form);
                
    });




   
});


</script>