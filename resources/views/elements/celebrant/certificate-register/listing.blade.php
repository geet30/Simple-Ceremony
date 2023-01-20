<table class="table align-middle theme-table">
      <thead>
         <tr>
            <th>Certificate</th>
            <th>Date of use</th>
            <th>Name of couples</th>
            <th>Status</th>
            <th>Details</th>
            <th></th>
         </tr>
      </thead>
      <tbody>
        
         @if(count($data) > 0)
            @foreach($data as $request)
               <?php 
         
                  $certificate_no  = $request->certificate_prefix.$request->first_certificate_no.$request->certificate_suffix;
                  //  $certificate_no = $request->booking_details->marriage_certificate_number;
                  $couple_name =(isset($request->booking_result)) ?$request->booking_result->first_couple_name.' & '.$request->booking_result->second_couple_name :'';
                  if($request->status == 1){
                     $status = 'Destroyed';
                     $created_at = date('M d,Y',strtotime($request->date_of_use));
                  }else{
                     $status = 'Active';
                     $created_at = (isset($request->booking_result)) ? date('M d,Y',strtotime($request->booking_result->booking_date)):'';
                  }
                  
                  $booking_id = (isset($request->booking_result->id)) ? $request->booking_result->id:'';
               ?>
         
               <tr>
                  <td class="body-2 neutral-100 table-anchor-link">
                     <a href="" role="button" class="table-link getEditData offcanvasCommonClass" data-bs-toggle="offcanvas" data-bs-target="#edit-certificate-register" aria-controls="edit-certificate-register"></a>{{$certificate_no}}</td>
                  <td class="body-2 neutral-100 table-anchor-link">
                     <a href="" role="button" class="table-link getEditData offcanvasCommonClass" data-bs-toggle="offcanvas" data-bs-target="#edit-certificate-register" aria-controls="edit-certificate-register"></a>{{$created_at}}</td>
                  <td class="body-2 neutral-100 table-anchor-link">
                     <a href="" role="button" class="table-link getEditData offcanvasCommonClass" data-bs-toggle="offcanvas" data-bs-target="#edit-certificate-register" aria-controls="edit-certificate-register"></a>   
                     {{$couple_name}}</td>
                  <td class="body-2 neutral-100 table-anchor-link">
                     <a href="" role="button" class="table-link getEditData offcanvasCommonClass" data-bs-toggle="offcanvas" data-bs-target="#edit-certificate-register" aria-controls="edit-certificate-register"></a>
                     {{$status}}</td>
                  <td class="body-2 neutral-100 table-anchor-link">
                     <a href="" role="button" class="table-link getEditData offcanvasCommonClass" data-bs-toggle="offcanvas" data-bs-target="#edit-certificate-register" aria-controls="edit-certificate-register"></a>{{$request->details}}</td>
               
                  <td  style="min-width:300px;">
                     <ul class="mb-0 pl-0">
                     @if($couple_name !='')
                     <a href="" role="button" data-couple_name="{{$couple_name}}" data-id="{{$request->id}}" data-booking_id="{{$booking_id}}" data-certificate_no="{{$certificate_no}}" data-action="{{ route('certificate-register.update', $request->id)}}" data-status ="{{$request->status}}" data-details="{{$request->details}}" data-created_at="{{$created_at}}" class="table-link getEditData offcanvasCommonClass" data-bs-toggle="offcanvas" data-bs-target="#edit-certificate-register" aria-controls="edit-certificate-register">Edit</a>
                     @endif
                  
                     </ul>
                  </td>
               </tr>
            @endforeach
         @else
            <td colspan="6"><center>No record found </center></td>
         @endIf
         
      </tbody>
      <tfoot>
         <tr>
            <td colspan="6">
            @include('elements.pagination.pagination', [
                  'title' => 'Marriage Certificate Register',
                  '' => '',
                  'data' => $data,
                  'id' => '#celebrantRegister',
                  'class' => '.celebrantRegister',
               ])
            </td>
         </tr>
      </tfoot>
   </table>