<ul class="row add-on-list-nav p-0 mb-0 list-unstyled mb-2 mt-2">
    <li class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
        <div class="nav-link">
            <div class="add-ons-nav d-flex">
                <div class="add-ons-nav-image me-4">
                    <img src="/images/admin/partner/report-user.svg" alt="All add-ons">
                </div>
                <div class="add-ons-nav-data text-start ">
                    <h3 class="h3"> ${{ number_format(totalRevenue($data),2)}}</h3>
                    <p class="subheader-2">Total Revenue</p>
                </div>
            </div>
        </div>
    </li>
    <li class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
        <div class="nav-link">
            <div class="add-ons-nav d-flex">
                <div class="add-ons-nav-image me-4">
                    <img src="/images/admin/partner/report-location.svg" alt="All add-ons">
                </div>
                <div class="add-ons-nav-data text-start ">
                    <h3 class="h3">${{ number_format(totalCofgs($data),2)}}</h3>
                    <p class="subheader-2">Total Costs</p>
                </div>
            </div>
        </div>
    </li>
    <li class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 mb-3">
        <div class="nav-link">
            <div class="add-ons-nav d-flex">
                <div class="add-ons-nav-image me-4">
                    <img src="/images/admin/partner/booking-performed.svg" alt="All add-ons">
                </div>
                <div class="add-ons-nav-data text-start ">
                    <h3 class="h3">${{ number_format(totalMargin($data),2)}}</h3>
                    <p class="subheader-2">Total Margin</p>
                </div>
            </div>
        </div>
    </li>
</ul>