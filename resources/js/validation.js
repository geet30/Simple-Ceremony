
// Form validation JS
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        $(".submitBtn").attr("disabled", false);
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
        window.setTimeout(function () {
            var errors = $('.invalid-feedback:visible:first').prev();
            if (errors.length) {
                $('html, body').animate({ scrollTop: errors.offset().top - 10 }, 500);
            }
        }, 0);
      }, false);
    });
  }, false);
})();