<div class="offcanvas offcanvas-end theme-offcanvas partner-module-sidebar" tabindex="-1"
    id="partner_change_password_sidebar" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <p id="offcanvasRightLabel" class="h3 neutral-100">Change password</p>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            {{ $errors->first() }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session()->get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endIf
    <div class="offcanvas-body">
        <form id="resetPassword" onsubmit="submitCommonfunction('resetPassword', '/account', 'POST', this)"
            name="passwordform" class="needs-validation" method="POST" novalidate>
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
                        class="form-control passwordInput body-1 netural-100 " name="password" required=""
                        autocomplete="off" min="8" max="10">
                    <i class="fas right-icon turquoise-100 eyeIcon fa-eye-slash"></i>
                </div>
                <label class="form-label small-text2 mt-2">Your password needs to be at least 6 characters</label>
            </div>
            <div class="col-md-10 col-12 mb-4">
                <label for="password" class="form-label small-text2">Confirm new password</label>
                <div class="password-with-eye">
                    <input type="password" placeholder="Type here password again"
                        class="form-control passwordInput body-1 netural-100 " name="confirm_password" required=""
                        autocomplete="off" min="8" max="10">
                    <i class="fas right-icon turquoise-100 eyeIcon fa-eye-slash"></i>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Save</button>
            </div>
        </form>
    </div>
</div>
