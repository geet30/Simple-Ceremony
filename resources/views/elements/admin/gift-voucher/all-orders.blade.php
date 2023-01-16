<div class="row mb-15 mt-20">
    <div class="col-md-4 col-xl-3 d-grid mt-3 mt-md-0 mb-15">
        <div class="dropdown filter-date-calendar-dropdown">
            <a role="button" class="theme-btn primary-btn-border d-inline-flex align-items-center filter-btn w-100" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"><img src="/images/icons/green-calendar.svg" class="me-3" alt="calendar"> Filter by date</a>
            <div class="dropdown-menu p-4 filter_date_div">
                <div class="filter-date-calendar">

                    <div class="calendar-wrapper" id="calendar-wrapper"></div>
                    <input type="hidden" name="booking_date" class="booking_date">
                    <a class="theme-btn primary-btn d-inline-block mt-3" onclick="SearchMultipleFilter('/search-coupon-orders','','simpletabs')">Filter</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-xl-9 d-flex">
        <div class="form-group has-search w-100 position-relative">
            <input type="text" class="form-control" placeholder="Search purchaser’s name">
            <span class="fa fa-search form-control-feedback"></span>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table align-middle theme-table">
        <thead>
            <tr>
                <th>Date purchased</th>
                <th>Purchaser’s name</th>
                <th>Purchaser’s email address</th>
                <th>Amount</th>
                <th>Gift voucher number</th>
            </tr>
        </thead>
        <tbody>
        @if(count($data) > 0)
            @foreach($data as $result)
           
            <tr style="vertical-align: baseline;">
                <td class="body-2 neutral-100" style="min-width:250px;">{{date('M d,Y',strtotime($result->created_at))}}</td>
                <td class="body-2 neutral-100" style="min-width:150px;">{{$result->first_couple_name}}</td>
                <td class="body-2 neutral-100" style="min-width:150px;">{{$result->user->email}}</td>
                <td class="body-2 neutral-100" style="min-width:150px;">1</td>
                <td class="body-2 neutral-100" style="min-width:150px;">{{$result->booking_coupon->voucher_number}}
                </td>
            </tr>
            @endforeach
        @else
                <td colspan="5"><center>No record found </center></td>
        @endIf
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">
                    @include('elements.pagination.pagination', ['title' => 'All orders', 'id' => '#orders', 'class'=>'.orders','data' => $data])  
                </td>
            </tr>
        </tfoot>
    </table>
</div>