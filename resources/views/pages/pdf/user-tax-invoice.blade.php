@php 


 $headersrc=  asset(config('env.SERVERURL').'/images/invoice-left.png');
 $footerleftsrc=  asset(config('env.SERVERURL').' /images/invoicefooter-left.png');

 $footerrightsrc=  asset(config('env.SERVERURL').'/images/authorised-sign.png');

@endphp

<!DOCTYPE html>
<html>

<head>
   <title>NOIM</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body>
   <table style="width: 100%" cellpadding="0" cellspacing="0">
      <tbody>
         <tr>
            <td>
               <table style="width: 100%" cellpadding="0" cellspacing="0">
                  <tbody>
                     <tr>
                        <td
                           style="background: url({{ $headersrc }}); background-size:contain;background-repeat: no-repeat;height: 70px;background-color: #F7FCFC;width: 100%">
                        </td>
                     </tr>
                  </tbody>
               </table>
               <table style="width: 100%" cellpadding="0" cellspacing="0">
                  <tbody>
                     <tr>
                        <td style="width: 50%;padding: 20px 20px;">
                           <table style="width: 100%" cellpadding="0" cellspacing="0">
                              <tbody>
                                 <tr>
                                    <td
                                       style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                       Invoice from : </td>
                                    <td
                                       style="font-weight: 700;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                       {{ config('env.COMPANYNAME')}}</td>
                                 </tr>
                                 <tr>
                                    <td
                                       style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                       ABN number : </td>
                                    <td
                                       style="font-weight: 700;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                       {{$data->packages[0]->user->abn_number}}</td>
                                 </tr>
                                 <tr>
                                    <td
                                       style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                       Date : </td>
                                    <td
                                       style="font-weight: 700;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                       {{date('M d, Y',strtotime($data->created_at))}}</td>
                                 </tr>
                              </tbody>
                           </table>
                        </td>
                        <td style="width: 50%;padding: 20px 20px;">
                           <table style="width: 100%" cellpadding="0" cellspacing="0">
                              <tbody>
                                 <tr>
                                    <td
                                       style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;width: 50%;text-align: right;">
                                       Invoice to : </td>
                                    <td
                                       style="font-weight: 700;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;width: 50%;text-align: right;">
                                       {{getUserBookingDetails()->first_couple_name}} & {{getUserBookingDetails()->second_couple_name}}</td>
                                 </tr>
                              </tbody>
                           </table>
                        </td>
                     </tr>
                  </tbody>
               </table>
               <table style="width: 100%" cellpadding="0" cellspacing="0">
                  <thead style="background: #62CBC9;">
                     <tr>
                        <th style="font-weight: 700;font-size: 15px;line-height: 20px;color: #fff;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: left;">
                           Package Name</th>
                        <th style="font-weight: 700;font-size: 15px;line-height: 20px;color: #fff;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: left;">
                           Ceremony date</th>
                        <th style="font-weight: 700;font-size: 15px;line-height: 20px;color: #fff;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: right;">
                           Partner Name</th>
                        <th style="font-weight: 700;font-size: 15px;line-height: 20px;color: #fff;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: right;">
                           Total</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td
                           style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: left;">
                           {{$data->packages[0]->package_name}}</td>
                        <td
                           style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: left;">
                           {{date('M d, Y',strtotime(getUserBookingDetails()->booking_date))}}</td>
                        <td
                           style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: right;">
                           {{$data->packages[0]->user->name}}</td>
                        <td
                           style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: right;">
                           {{$data->packages[0]->total_fee}}</td>
                     </tr>
                     <tr>
                        <td style="padding: 1px;background: #62CBC9;"></td>
                        <td style="padding: 1px;background: #62CBC9;"></td>
                        <td style="padding: 1px;background: #62CBC9;"></td>
                     </tr>
                  </tbody>
               </table>
               <table style="width: 100%" cellpadding="0" cellspacing="0">
                  <tbody>
                     <tr>
                        <td></td>
                     </tr>
                  </tbody>
               </table>
             
               <table style="width: 100%" cellpadding="0" cellspacing="0">
                  <tbody>
                     <tr>
                        <td style="width: 50%;padding: 20px 20px;"></td>
                        <td style="width: 50%;padding: 20px 20px;">
                           <table style="width: 100%" cellpadding="0" cellspacing="0">
                              <tbody>
                                 <tr>
                                    <td
                                       style="font-weight: 700;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;width: 50%;">
                                       Total</td>
                                    <td style="width: 50%;"></td>
                                 </tr>
                                 <tr>
                                    <td
                                       style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;width: 50%;">
                                       Total Fee : </td>
                                    <td
                                       style="font-weight: 700;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;width: 50%;">
                                       $ 0 Inc GST</td>
                                 </tr>
                                 <tr>
                                    <td
                                       style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;width: 50%;">
                                       GST component : </td>
                                    <td
                                       style="font-weight: 700;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;width: 50%;">
                                       $ 0</td>
                                 </tr>
                              </tbody>
                           </table>
                        </td>
                     </tr>
                  </tbody>
               </table>
               <table style="width: 100%" cellpadding="0" cellspacing="0">
                  <tbody>
                     <tr>
                        <td style="width: 50%;padding: 20px 20px;"></td>
                        <td style="width: 50%;padding: 200px 20px 20px 20px;">
                           <table style="width: 100%" cellpadding="0" cellspacing="0">
                              <tbody>
                                 <tr>
                                    <td style="width: 50%;"></td>
                                    <td style="width: 50%;background: #1C1C1C;padding: 1px 0;"></td>
                                 </tr>
                                 <tr>
                                    <td style="width: 50%;"></td>
                                    <td
                                       style="font-weight: 700;font-size: 13px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;width: 50%;letter-spacing: 1.5px;text-align: center;padding-top: 4px;">
                                       Authorised Sign</td>
                                 </tr>
                              </tbody>
                           </table>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
      </tbody>
   </table>
</body>

</html>