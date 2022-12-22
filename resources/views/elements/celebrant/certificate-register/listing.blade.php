<table class="table align-middle theme-table">
      <thead>
         <tr>
            <th>Certificate</th>
            <th>Date of use</th>
            <th>Name of couples</th>
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
                $couple_name =(isset($request->booking_result)) ?$request->booking_result->first_couple_name.'&'.$request->booking_result->second_couple_name :'';
                $created_at = (isset($request->booking_result)) ? date('M d,Y',strtotime($request->booking_result->booking_details->created_at)):'';
            ?>
         
            <tr>
               <td class="body-2 neutral-100">{{$certificate_no}}</td>
               <td class="body-2 neutral-100">{{$created_at}}</td>
               <td class="body-2 neutral-100">{{$couple_name}}</td>
               <td class="body-2 neutral-100"></td>
              
               <td  style="min-width:300px;">
                  <ul class="mb-0 pl-0">
                  <a href="" role="button" data-couple_name="{{$couple_name}}" data-id="{{$request->id}}" data-certificate_no="{{$certificate_no}}" data-action="{{ route('certificate-register.update', $request->id)}}" class="table-link getEditData" data-bs-toggle="offcanvas" data-bs-target="#edit-certificate-register" aria-controls="edit-certificate-register">Edit</a>
                
                  </ul>
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
            @include('elements.pagination.pagination', [
                  'title' => 'Locations',
                  '' => '',
                  'data' => $data,
                  'id' => '#celebrantRegister',
                  'class' => '.celebrantRegister',
               ])
            </td>
         </tr>
      </tfoot>
   </table>