<script type="text/javascript">
$(document).ready(function(){
    $(document).on('click', '.assign_celebrant', function() {
       var id = $(this).data('id');
       $('.booking_id').val(id);
    })
    $("#add-celebrants").on("submit", function(e) { 
        e.preventDefault();
       
        var id = $(this).attr("id");
        var action = $(this).attr("action"); 
        var method = $(this).attr("method");
        var formData = new FormData();
        formData.append('id', $('.booking_id').val());
        formData.append('celebrant_id', $('#celebrant_id').val());
        formData.append('_token',  $("input[name=_token]").val() );
        var form = $(this);
        submitform(id,action,method,formData,form);
                
    });
   
});
</script>