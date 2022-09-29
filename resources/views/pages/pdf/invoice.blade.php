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
   <table style=";max-width:800px;background-color:#fff; font-family: 'Montserrat', sans-serif;" align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" >
      <tr>
         <td>
            <table style="">
               <tr>
                  <td> &nbsp; </td>
               </tr>
            </table>
         </td>
      </tr>
      <tr>
         <td>
            <table cellpadding="0" cellspacing="0" style="width:100% ; background-color: #F7FCFC;">
               <tr>
             
                  <td style="width:50%"> <img src="{{ $headersrc }}"  cellpadding="0" cellspacing="0" alt="" style="max-width: 100%;height: auto;"> </td>
               </tr>
            </table>
         </td>
      </tr>
      <tr>
         <td>
            <table style="width:100%"  cellpadding="20" >
               <tr>
                  <td>
                     <table style="width:100%"  >
                        <tr>
                           <td style="width:50%">
                              <table style="width:100%" >
                                 <tr>
                                    <td style="font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;">Invoice from</td>
                                    <td class="celebrant_name" style="font-weight:700;font-size: 12px;line-height: 20px; color: #1C1C1C;"> : {{$data->recipient_name}}</td>
                                 </tr>
                                 
                                 
                                 <tr>
                                    <td style="font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;">ABN number</td>
                                    <td style="font-weight:700;font-size: 12px;line-height: 20px; color: #1C1C1C;"> : {{$data->abn_number}}</td>
                                 </tr>
                                 <tr>
                                    <td style="font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;">Date Create</td>
                                    <td style="font-weight:700;font-size: 12px;line-height: 20px; color: #1C1C1C;">: {{date('M d, Y',strtotime($data->created_at))}}</td>
                                 </tr>
                              </table>
                           </td>
                           <td style="width:50%;vertical-align: middle;">
                              <table style="float: right;" >
                                 <tr>
                                    <td style="font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align:right;">Invoice to </td>
                                    <td style="font-weight:700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align:right;padding-right: 15px;"> : {{ config('env.COMPANYNAME')}}</td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td>
                     <table style="width:100%">
                        <thead style="background-color: #62CBC9;">
                           <tr>
                              <th style="font-weight: 700;font-size: 15px;line-height: 13px; color: #FFFFFF;text-align: left;padding: 15px;">Type of ceremony</th>
                              <th style="font-weight: 700;font-size: 15px;line-height: 13px; color: #FFFFFF;text-align: left;padding: 15px;">Ceremony date</th>
                              <th style="font-weight: 700;font-size: 15px;line-height: 13px; color: #FFFFFF;text-align: right;padding: 15px;">Couple</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr style="border-bottom:1px solid #62CBC9;">
                              <td style="min-width:300px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;padding-left: 15px;">{{config('ceremonyStatus.typeOfCeremony.'.$data->booking->ceremony_type) }}</td>
                              <td style="min-width:200px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: left;padding-left: 15px;">{{date('M d, Y',strtotime($data->booking->booking_date))}}</td>
                              <td style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: right;padding-right: 15px;">{{$data->booking->first_couple_name}} & {{$data->booking->second_couple_name}}</td>
                           </tr>
                           
                           
                        </tbody>
                        <tfoot>
                           <tr>
                              <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;padding: 0;">&nbsp;</td>
                              <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: left;padding: 0;padding-top: 20px;padding-left: 15px;">Total Fee:</td>
                              <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: right;padding: 0;"></td>
                           </tr>
                           <tr>
                              <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;padding: 0;">&nbsp;</td>
                              <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: left;padding: 0;padding-left: 15px;">Less administration Fee:</td>
                              <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: right;padding: 0;padding-right: 15px;"></td>
                           </tr>
                           <tr>
                              <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;padding: 0;">&nbsp;</td>
                              <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: left;padding: 0;padding-left: 15px;">Administration Fee:</td>
                              <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: right;padding: 0;padding-right: 15px;"></td>
                           </tr>
                           <tr>
                              <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;padding: 0;">&nbsp;</td>
                              <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: left;padding: 0;padding-top: 20px;padding-left: 15px;">Total :</td>
                              <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: right;padding: 0;"></td>
                           </tr>
                           <tr>
                              <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;padding: 0;">&nbsp;</td>
                              <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: left;padding: 0;padding-left: 15px;">Celebrant Fee:</td>
                              <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: right;padding: 0;padding-right: 15px;"></td>
                           </tr>
                           <tr>
                              <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;padding: 0;">&nbsp;</td>
                              <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: left;padding: 0;padding-left: 15px;">GST component:</td>
                              <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: right;padding: 0;padding-right: 15px;"></td>
                           </tr>
                        </tfoot>
                     </table>
                  </td>
               </tr>
            </table>
         </td>
      </tr>
      <tr>
         <td>
            <table cellpadding="0" cellspacing="0" style="width:100% ;    position: absolute;    bottom: 0px;width: 100%; ">
               <tr>
                  <td>
                     <table style="width:100%;" cellpadding="20">
                        <tr>
                           <td>
                              <img src="{{$footerrightsrc}}" style="float:right;    width: 20%;">
                          </td>
                        </tr>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td style="height:20px">&nbsp;</td>
               </tr>
               <tr>
                  <td>
                     <table style="width:100%;background-color: #F7FCFC;">
                        <tr>
                           <td><img src="{{$footerleftsrc}}"></td>
                        </tr>
                     </table>
                  </td>
               </tr>
            </table>
         </td>
      </tr>
   </table>
</body>

</html>