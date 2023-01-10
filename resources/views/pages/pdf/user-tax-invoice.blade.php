<!DOCTYPE html>
<html style="height: 100%">
   <head>
      <title>NOIM</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <style>
         footer {
            width: 100%;
            position: absolute;
            bottom: 0;
            right: 0;
            left:0;
         }
      </style>
   </head>
   <body style="width:100%">
      <main>
         <table style="width:100%;" cellpadding="0" cellspacing="0">
            <tbody>
               <tr>
                  <td>
                     <table style="width: 100%" cellpadding="0" cellspacing="0">
                        <tbody>
                           <tr style="width:100%;background: #F7FCFC;">
                              <td style="width:75%"> <img src="http://simpleceremoniesacc.crebos.online/images/invoice-left.png"  cellpadding="0" cellspacing="0" alt="" style="max-width: 100%;height: auto;"> </td>
                              <td style="width:25%"> <img src="http://simpleceremoniesacc.crebos.online/images/invoice-right.png"  cellpadding="0" cellspacing="0" alt="" style="width: 50%;max-width: 100%;height: auto;float:right;padding-right: 21px;"> </td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td>
                     <table style="width: 100%" cellpadding="0" cellspacing="0">
                        <tbody>
                           <tr>
                              <td style="width: 50%;padding: 50px 20px 50px 20px;">
                                 <table style="width: 70%" cellpadding="0" cellspacing="0">
                                    <tbody>
                                       <tr>
                                          <td
                                             style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                             Invoice from </td>
                                          <td style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding-right:10px;">:</td>
                                          <td
                                             style="font-weight: bold;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                             {{ config('env.COMPANYNAME')}}</td>
                                       </tr>
                                       <tr>
                                          <td
                                             style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                             ABN number </td>
                                          <td style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding-right:10px;">:</td>
                                          <td
                                             style="font-weight: bold;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                             {{$data->packages[0]->user->abn_number}}</td>
                                       </tr>
                                       <tr>
                                          <td
                                             style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                             Date </td>
                                          <td style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding-right:10px;">:</td>
                                          <td style="font-weight: bold;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                             {{date('M d, Y',strtotime($data->created_at))}}</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                              <td style="width: 50%;padding: 50px 20px 50px 20px;">
                                 <table style="width: 100%" cellpadding="0" cellspacing="0">
                                    <tbody>
                                       <tr>
                                          <td style="width: 75%;"></td>
                                          <td
                                             style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;width: 25%;">
                                             Invoice to </td>
                                       </tr>
                                       <tr>
                                          <td style="width: 75%;"></td>
                                          <td
                                             style="font-weight: bold;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;width: 25%;">
                                             {{getUserBookingDetails()->first_couple_name}} & {{getUserBookingDetails()->second_couple_name}}</td>
                                       </tr>
                                       <tr>
                                          <td style="width: 70%;height: 23px;"></td>
                                          <td style="width: 30%;height: 23px;"></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td style="padding: 0px 20px;">
                     <table style="width: 100%" cellpadding="0" cellspacing="0">
                        <thead>
                           <tr>
                              <th style="background: #62CBC9;font-weight: bold;font-size: 29px;line-height: 38px;color: #fff;font-family: 'Montserrat', sans-serif;padding: 18px 20px;text-align: left;">
                                 Package Name</th>
                              <th style="background: #62CBC9;font-weight: bold;font-size: 29px;line-height: 38px;color: #fff;font-family: 'Montserrat', sans-serif;padding: 18px 20px;text-align: left;">
                                 Ceremony date</th>
                              <th style="background: #62CBC9;font-weight: bold;font-size: 29px;line-height: 38px;color: #fff;font-family: 'Montserrat', sans-serif;padding: 18px 20px;text-align: right;">
                                 Partner Name</th>
                              <th style="background: #62CBC9;font-weight: bold;font-size: 29px;line-height: 38px;color: #fff;font-family: 'Montserrat', sans-serif;padding: 18px 20px;text-align: right;">
                                 Total</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td
                                 style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding: 18px 20px;text-align: left;">
                                 {{$data->packages[0]->package_name}}</td>
                              <td
                                 style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding: 18px 20px;text-align: left;">
                                 {{date('M d, Y',strtotime(getUserBookingDetails()->booking_date))}}</td>
                              <td
                                 style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding: 18px 20px;text-align: right;">
                                 {{$data->packages[0]->user->name}}</td>
                              <td
                                 style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding: 18px 20px;text-align: right;">
                                 {{$data->packages[0]->total_fee}}</td>
                           </tr>
                           
                           <tr>
                              <td style="padding: 1px;background: #62CBC9;"></td>
                              <td style="padding: 1px;background: #62CBC9;"></td>
                              <td style="padding: 1px;background: #62CBC9;"></td>
                              <td style="padding: 1px;background: #62CBC9;"></td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td>
                     <table style="width: 100%" cellpadding="0" cellspacing="0">
                        <tbody>
                           <tr>
                              <td style="width: 70%;padding: 50px 20px 50px 20px;"></td>
                              <td style="width: 30%;padding: 50px 20px 50px 20px;">
                                 <table style="width: 100%" cellpadding="0" cellspacing="0">
                                    <tbody>
                                       <tr>
                                          <td
                                             style="font-weight: bold;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;width: 50%;">
                                             Total</td>
                                          <td></td>
                                          <td></td>
                                       </tr>
                                       <tr>
                                          <td style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                             Total Fee </td>
                                          <td style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding-right:10px;">:</td>
                                          <td style="font-weight: bold;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                             $ 0 Inc GST</td>
                                       </tr>
                                       <tr>
                                          <td style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                             GST component </td>
                                          <td style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding-right:10px;">:</td>
                                          <td style="font-weight: bold;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                             $ 0</td>
                                       </tr>
                                       <tr>
                                          <td style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                             Date paid </td>
                                          <td style="font-weight: 500;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding-right:10px;">:</td>
                                          <td style="font-weight: bold;font-size: 26px;line-height: 38px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                             Dec 16 2022</td>
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
      </main>
      <footer>
         <table cellpadding="0" cellspacing="0" style="width: 100%;">
            <tbody>
               <tr>
                  <td style="width: 70%;padding: 20px 20px;"></td>
                  <td style="width: 30%;padding: 200px 20px 20px 20px;">
                     <table style="width: 100%" cellpadding="0" cellspacing="0">
                     <tbody>
                           <tr>
                              <td style="width: 50%;"></td>
                              <td style="padding-right: 40px;"><img src="http://simpleceremoniesacc.crebos.online/images/authorised-sign.png"></td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td style="height:40px">&nbsp;</td>
               </tr>
               <tr style="background: #F7FCFC;">
                  <td><img src="http://simpleceremoniesacc.crebos.online/images/invoicefooter-left.png"></td>
               </tr>
            </tbody>
         </table>
      </footer>
   </body>
</html>