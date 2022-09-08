<script type="text/javascript">
    $(document).ready(function() {
        $(".disabled").attr("disabled", "disabled");
        $('.partner_save_btn').css('visibility', 'hidden');
        $('.partner-edit_info').click(function() {
            $(window).scrollTop(0);
            $(".disabled").removeAttr("disabled");
            $('.location_list_div').css('display', 'none');
            $('.partner-edit_info').css('visibility', 'hidden');
            $('.partner_save_btn').css('visibility', 'visible');
        })
        $("#add-locations").on("submit", function(e) {
            e.preventDefault();

            var id = $(this).attr("id");
            var action = $(this).attr("action");
            var method = $(this).attr("method");
            var formData = new FormData();

            formData.append('name', $('#location-name').val());
            formData.append('_token', $("input[name=_token]").val());
            var form = $(this);
            submitform(id, action, method, formData, form);

        });

    });
</script>
