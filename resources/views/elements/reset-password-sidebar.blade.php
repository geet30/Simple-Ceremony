<div class="offcanvas offcanvas-end theme-offcanvas partner-module-sidebar" tabindex="-1"
    id="admin_change_password_sidebar" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <p id="offcanvasRightLabel" class="h3 neutral-100">Change password</p>

        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
    </div>
    <div class="offcanvas-body">
        <div class="offcanvas-body">
            <form class="needs-validation" novalidate id="resetPassword" method="POST">
                <div class="message"></div>
                @csrf
                <div class="col-md-10 col-12 mb-4">
                    <label for="InputName" class="form-label small-text2">Current password</label>
                    <input type="password" placeholder="Type your current password here"
                        class="form-control body-1 netural-100" name="current_password" id="InputName" required>
                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                                alt="Require Icon"></span>current password is
                        required</div>
                </div>
                <div class="col-md-10 col-12 mb-4">
                    <label for="password" class="form-label small-text2">New password</label>
                    <div class="password-with-eye">
                        <input type="password" placeholder="Type your new password here"
                            class="form-control passwordInput body-1 netural-100 passwordCls" minlength="6"
                            name="password" required="" autocomplete="off" min="8" maxlength="10">
                        <i class="fas right-icon turquoise-100 eyeIcon fa-eye-slash eyeIcon"></i>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                                    alt="Require Icon"></span>Current password is
                            required and enter the correct length</div>
                    </div>
                    <label class="form-label small-text2 mt-2">Your password needs to be at least 6 characters</label>
                </div>
                <div class="col-md-10 col-12 mb-4">
                    <label for="password" class="form-label small-text2">Confirm new password</label>
                    <div class="password-with-eye">
                        <input type="password" placeholder="Type here password again"
                            class="form-control passwordInput body-1 netural-100 confirmPasswordCls"
                            name="confirm_password" required="" autocomplete="off" minlength="6" maxlength="10">
                        <i class="fas right-icon turquoise-100 eyeIcon fa-eye-slash eyeIcon"></i>
                        <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                                    alt="Require Icon"></span>Current password is
                            required and enter the correct length</div>
                        <div class="custom-error confirm_password_message d-none"> <span><img class="me-2"
                                    src="/images/require-iocn.svg" alt="Require Icon"></span>Password and confirm
                            password does not matched.
                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#resetPassword').on('submit', function(e) {
        e.preventDefault();
        var form = $("#resetPassword")[0]
        if (form.checkValidity() === true) {
            if ($('.passwordCls').val() == $('.confirmPasswordCls').val()) {
                $('.confirm_password_message').addClass('d-none');
                submitCommonfunction('resetPassword', '/account', 'post')
            } else {
                $('.confirm_password_message').addClass('d-block');
                $('.confirm_password_message').removeClass('d-none');
                e.stopPropagation();
            }
        }

    })
</script>
