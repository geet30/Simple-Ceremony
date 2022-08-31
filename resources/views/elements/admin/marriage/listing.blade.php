<table class="table align-middle theme-table">
    <thead>
    <tr>
        <th>Preferred couple’s name</th>
        <th>Booking created</th>
        <th>Progress</th>
        <th>Marriage celebrant</th>
        <th>Location</th>
        <th>Wedding date</th>
        <th>Status</th>
        <th>Days till marriage</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @foreach($data as $result)
            <tr>
                <td style="min-width:160px" class="body-2">{{$result->first_couple_name}} & {{$result->second_couple_name}}</td>
                <td  style="min-width:130px" class="body-2">{{date('M d, Y',strtotime($result->created_at))}}</td>
                <td style="min-width:50px" class="body-2" >20% <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">New booking</span></a>
                    </span>
                </td>
                <td class="body-2 neutral-100" style="min-width:140px;"><a href="" data-bs-toggle="offcanvas" data-bs-target="#marriage-celebrant"  class="text-decoration-underline  add-link ">Assign marriage celebrant</a></td>
                <td class="body-2 neutral-100" style="min-width:130px;">
                   {{$result->location->name}}
                </td>
                <td class="body-2 neutral-100" style="min-width:130px;">{{date('M d,Y',strtotime($result->booking_date))}}</td>
                <td style="min-width:120px;">
                
                    <span class="status booked">Booked</span>
                </td>
               
                <td  style="min-width:60px;" class="body-2 neutral-100">
                <?php 
                    
                    $to=date_create(date('Y-m-d'));
                    $from=date_create($result->booking_date);
                    $diff=date_diff($to,$from);
                    echo $diff->format('%a days');
                ?> 
                </td>
                <td ></td>
                <td style="min-width:100px;">
                    <a href="/order-details" class="table-link">View info</a>
                </td>
            </tr>
            <!-- <tr>
                <td style="min-width:160px" class="body-2">David & Sarah</td>
                <td  style="min-width:130px" class="body-2">Feb 21, 2022</td>
                <td style="min-width:50px" class="body-2" >20% <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">New booking</span></a>
                    </span>
                </td>
                <td class="body-2 neutral-100" style="min-width:140px;"><a href="" data-bs-toggle="offcanvas" data-bs-target="#marriage-celebrant"  class="text-decoration-underline  add-link ">Assign marriage celebrant</a></td>
                <td class="body-2 neutral-100" style="min-width:130px;">
                    Bradfield Park
                </td>
                <td class="body-2 neutral-100" style="min-width:130px;">Sept 01, 2022</td>
                <td style="min-width:120px;">
                    <span class="status booked">Booked</span>
                </td>
                <td  style="min-width:60px;" class="body-2 neutral-100">
                    220 days
                </td>
                <td ></td>
                <td style="min-width:100px;">
                    <a href="/order-details" class="table-link">View info</a>
                </td>
            </tr>
            <tr>
                <td class="body-2 neutral-100" >John & Emma</td>
                <td class="body-2 neutral-100" >Feb 20, 2022</td>
                <td style="min-width:50px" class="body-2" >20% 
                    <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">New booking</span></a>
                    </span>
                </td>
                <td class="body-2 neutral-100">Michael 
                    <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip"><img src="/images/status/success.svg" class="img-fluid" alt="success">
                    <span class="w-auto">Approved</span></a>
                    </span>
                </td>
                <td class="body-2 neutral-100">
                    Tench Park
                </td>
                <td class="body-2 neutral-100" >Aug 20, 2022</td>
                <td>
                    <span class="status booked">Booked</span>
                </td>
                <td class="body-2 neutral-100">
                    220 days
                </td>
                <td ></td>
                <td >
                    <a href="/order-details" class="table-link">View info</a>
                </td>
            </tr>
            <tr>
                <td class="body-2 neutral-100">Joe & Jessica</td>
                <td class="body-2 neutral-100" >Feb 15, 2022</td>
                <td style="min-width:50px" class="body-2" >30% <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span>Data Entered into NoIM</span></a>
                    </span>
                </td>
                <td class="body-2 neutral-100">Alex 
                    <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip"><img src="/images/status/pending.svg" class="img-fluid" alt="pending">
                    <span class="">Waiting for approval </span></a>
                    </span>
                </td>
                <td class="body-2 neutral-100">
                    Hunter Valley
                </td>
                <td class="body-2 neutral-100">Aug 15, 2022</td>
                <td>
                    <span class="status lodged">Lodged</span>
                </td>
                <td  style="min-width:60px;" class="body-2 neutral-100">
                    198 days
                </td>
                <td ><a class="table-link button-2" data-bs-toggle="modal" data-bs-target="#note">Note</a></td>
                <td>
                    <a href="/order-details" class="table-link">View info</a>
                </td>
            </tr>
            <tr>
                <td class="body-2 neutral-100">Chloe & Amy</td>
                <td class="body-2 neutral-100" >Feb 15, 2022</td>
                <td style="min-width:50px" class="body-2" >40% <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span>The data has been uploaded and signed and the NoIM along with the ID has been witnessed</span></a>
                    </span>
                </td>
                <td class="body-2 neutral-100">Jane 
                    <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip theme-tip-Rejected"><img src="/images/status/error.svg" class="img-fluid" alt="error">
                    <span class="">
                        <div class="d-flex">
                        <div class="align-self-center me-2">Rejected</div>
                        <div class="turquoise-100 align-self-center">Assign other marriage celebrants</div>
                        </div>
                <br/>
                <div class="white-box">
                    <p class="button-1 text-black">Reason :</p>
                    <p class="body-3-medium text-black">There is the same schedule with other person 2s</p>
                </div>
                </span></a>
                    </span>
                </td>
                <td class="body-2 neutral-100">
                    Mort Bay - Balmain
                </td>
                <td class="body-2 neutral-100">Aug 14, 2022</td>
                <td>
                    <span class="status pending">Lodged (Pending)</span>
                </td>
                <td  style="min-width:60px;" class="body-2 neutral-100">
                    190 days
                </td>
                <td ></td>
                <td>
                    <a href="/order-details" class="table-link">View info</a>
                </td>
            </tr>
            <tr>
                <td class="body-2 neutral-100">Sam & Sophie</td>
                <td class="body-2 neutral-100" >Feb 15, 2022</td>
                <td style="min-width:50px" class="body-2" >50% <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">All details have been entered and correct docs uploaded </span></a>
                    </span>
                </td>
                <td class="body-2 neutral-100">Johnson 
                    <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip"><img src="/images/status/pending.svg" class="img-fluid" alt="pending">
                    <span class="">Waiting for approval</span></a>
                    </span>
                </td>
                <td class="body-2 neutral-100">
                    Baulkham Hills
                </td>
                <td class="body-2 neutral-100">Aug 12, 2022</td>
                <td>
                    <span class="status pending">Lodged (Pending)</span>
                </td>
                <td  style="min-width:60px;" class="body-2 neutral-100">
                    187 days
                </td>
                <td ><a class="table-link button-2" data-bs-toggle="modal" data-bs-target="#note">Note</a></td>
                <td>
                    <a href="/order-details" class="table-link">View info</a>
                </td>
            </tr>
            <tr>
                <td class="body-2 neutral-100">Jorsey & Erin</td>
                <td class="body-2 neutral-100" >Feb 10, 2022</td>
                <td style="min-width:50px" class="body-2" >10% <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">Request to custom location</span></a>
                    </span>
                </td>
                <td class="body-2 neutral-100">-</td>
                <td class="body-2 color-red">
                    Need custom location
                </td>
                <td class="body-2 neutral-100">Aug 12, 2022</td>
                <td>
                    <span class="status pending">Pending</span>
                </td>
                <td  style="min-width:60px;" class="body-2 neutral-100">
                    180 days
                </td>
                <td ></td>
                <td>
                    <a href="/order-details" class="table-link">View info</a>
                </td>
            </tr>
            <tr>
                <td class="body-2 neutral-100">Matt & Zoe</td>
                <td class="body-2 neutral-100" >Feb 08, 2022</td>
                <td style="min-width:50px" class="body-2" >80% <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">Marriage celebrant has registered the couple's ceremony and entered the registration number</span></a>
                    </span>
                </td>
                <td class="body-2 neutral-100">Max 
                    <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip"><img src="/images/status/success.svg" class="img-fluid" alt="success">
                    <span class="w-auto">Approved</span></a>
                    </span>
                </td>
                <td class="body-2 neutral-100">
                    Merewether - Newca..
                </td>
                <td class="body-2 neutral-100">Aug 10, 2022</td>
                <td>
                    <span class="status registered">Registered</span>
                </td>
                <td  style="min-width:60px;" class="body-2 neutral-100">
                    178 days
                </td>
                <td ><a class="table-link button-2" data-bs-toggle="modal" data-bs-target="#note">Note</a></td>
                <td>
                    <a href="/order-details" class="table-link">View info</a>
                </td>
            </tr>
        
        
            <tr>
                <td class="body-2 neutral-100">Max & Jade</td>
                <td class="body-2 neutral-100" >Feb 08, 2022</td>
                <td style="min-width:50px" class="body-2" >70% <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip"><img src="/images/icons/Info-light.svg" class="img-fluid"><span class="">Celebrant has confirmed all details</span></a>
                    </span>
                </td>
                <td class="body-2 neutral-100">Michael
                    <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip "><img src="/images/status/success.svg" class="img-fluid" alt="success">
                    <span class="w-auto">Approved</span></a>
                    </span>
                </td>
                <td class="body-2 neutral-100">
                    Bondi Beach
                </td>
                <td class="body-2 neutral-100">July 1, 2022</td>
                <td>
                    <span class="status pending">Lodged (Pending)</span>
                </td>
                <td  style="min-width:60px;" class="body-2 color-red">
                    30 days <span class="align-self-center ms-1 info-icon">
                    <a href="" class="theme-tip red-theme-tip"><img src="/images/status/exclamation.svg" class="img-fluid" alt="exclamation">
                    <span class="">Waiting for approval</span></a>
                    </span>
                </td>
                <td ><a class="table-link button-2" data-bs-toggle="modal" data-bs-target="#note">Note</a></td>
                <td>
                    <a href="/order-details" class="table-link">View info</a>
                </td>
            </tr> -->
        @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td colspan="10">
            <div class="theme-pagination d-flex justify-content-end">
                <div class="align-self-center me-4 button-1">Rows per page: 10</div>
                <div class="align-self-center me-4 button-1 ">1-10 of 150</div>
                <div class="align-self-center">
                <a class="d-inline-flex me-4" href=""><img src="/images/pagination/left.svg"
                    class="img-fluid"></a>
                <a class="d-inline-flex me-4" href=""><img src="/images/pagination/right.svg"
                    class="img-fluid"> </a>
                </div>
            </div>
        </td>
    </tr>
    </tfoot>
</table>