// Form validation JS
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    "use strict";
    window.addEventListener(
        "load",
        function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName("needs-validation");
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(
                forms,
                function (form) {
                    form.addEventListener(
                        "submit",
                        function (event) {
                            $("#loading").show();
                            if (form.checkValidity() === false) {
                                $("#loading").hide();
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add("was-validated");
                            $(".tel-input").each(function () {
                                let telInput = $(this).get(0);
                                if (
                                    $(this).prop("required") &&
                                    !telInput.checkValidity()
                                ) {
                                    $(this)
                                        .parents(".phone_number")
                                        .find(".phone_number_required")
                                        .addClass("d-block");
                                } else {
                                    $(this)
                                        .parents(".phone_number")
                                        .find(".phone_number_required")
                                        .removeClass("d-block");
                                }
                            });
                            window.setTimeout(function () {
                                var errors = $(
                                    ".invalid-feedback:visible:first"
                                ).prev();
                                if (errors.length) {
                                    $(window).scrollTop(0);
                                    // $('html, body').animate({ scrollTop: errors.offset().top - 10 }, 500);
                                }
                            }, 0);
                        },
                        false
                    );
                }
            );
        },
        false
    );
})();
