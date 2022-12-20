<div class="offcanvas offcanvas-end theme-offcanvas partner-module-sidebar" tabindex="-1" id="admin_fee_sidebar"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <p id="offcanvasRightLabel" class="h3 neutral-100">Setting admin fee</p>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
    </div>
    <div class="offcanvas-body">
        <form class="needs-validation" novalidate id="saveTax" method="POST">
            <div class="message"></div>
            @csrf
            <div class="col-md-10 col-12 mb-4">
                <label for="celebrant_tax" class="form-label small-text2">Admin fee for marriage celebrants</label>
                <div class=" position-relative">
                    <span class="currency-sign body-1 netural-100">$</span>
                    <input type="number" step="0.1" value="{{ auth()->user()->taxdetail->celebrant_tax ?? '' }}"
                        class="form-control body-1 netural-100 ps-4" name="celebrant_tax" id="celebrant_tax" maxlength="4"
                        required>
                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                                alt="Require Icon"></span> Celebrant fee is required</div>
                </div>
            </div>
            <div class="col-md-10 col-12 mb-4">
                <label for="partner_tax" class="form-label small-text2">Admin fee for partners</label>
                <div class=" position-relative">
                   
                    <input type="number" value="{{ auth()->user()->taxdetail->partner_tax ?? '' }}" class="form-control body-1 netural-100 ps-2" name="partner_tax" id="partner_tax" maxlength="4" required>
                    <span class="percentage-sign body-1 netural-100">%</span>
                    <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg"
                                alt="Require Icon"></span>Partner fee is required</div>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" id="submit_button" class="theme-btn primary-btn border-0">Save</button>
            </div>
        </form>
    </div>
</div>
<script>
    $('#saveTax').on('submit', function(e) {
        e.preventDefault();
        var form = $("#saveTax")[0]
        if (form.checkValidity() === true) {
            submitCommonfunction('saveTax', '/account/save-tax', 'post')
        }

    })
</script>
