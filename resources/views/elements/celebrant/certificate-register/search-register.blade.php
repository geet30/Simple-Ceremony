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
           
                $certificate_no=$request->booking_details->marriage_certificate->certificate_prefix.$request->booking_details->marriage_certificate->first_certificate_no.$request->booking_details->marriage_certificate->certificate_suffix;
                $couple_name =(isset($request)) ?$request->first_couple_name.' & '.$request->second_couple_name :'';
                if($request->booking_details->marriage_certificate->status == 1){
                  $status = 'Destroyed';
                  $created_at = date('M d,Y',strtotime($request->booking_details->marriage_certificate->date_of_use));
                }else{
                  $status = 'Active';                
                  $created_at = (isset($request)) ? date('M d,Y',strtotime($request->booking_date)):'';
                }
                
                $booking_id = (isset($request->id)) ? $request->id:'';
            ?>
        
            <tr>
               <td class="body-2 neutral-100">{{$certificate_no}}</td>
               <td class="body-2 neutral-100">{{$created_at}}</td>
               <td class="body-2 neutral-100">{{$couple_name}}</td>
               <td class="body-2 neutral-100">{{$status}}</td>
               <td class="body-2 neutral-100">{{$request->details}}</td>
              
               <td  style="min-width:300px;">
                  <ul class="mb-0 pl-0">
                  @if($couple_name !='')
                  <a role="button" data-couple_name="{{$couple_name}}" data-id="{{$request->booking_details->marriage_certificate}}" data-booking_id="{{$booking_id}}" data-certificate_no="{{$certificate_no}}" data-action="{{ route('certificate-register.update', $request->booking_details->marriage_certificate)}}" data-status ="{{$request->booking_details->marriage_certificate->status}}" data-details="{{$request->booking_details->marriage_certificate->details}}" data-created_at="{{$created_at}}" class="table-link getEditData offcanvasCommonClass" data-bs-toggle="offcanvas" data-bs-target="#edit-certificate-register" aria-controls="edit-certificate-register">Edit</a>
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