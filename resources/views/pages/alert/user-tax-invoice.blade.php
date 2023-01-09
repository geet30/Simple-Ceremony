<div class="modal fade" id="tax_invoice_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content border-0 rounded-0">
         <div class="modal-body p-0" style="min-height:94vh">
            <table style="width: 100%" cellpadding="0" cellspacing="0">
               <tbody>
                  <tr>
                     <td>
                        <table style="width: 100%" cellpadding="0" cellspacing="0">
                           <tbody>
                              <tr style="width:100%;background-color: #F7FCFC;">
                                 <td
                                    style="width:70%;background: url(/images/invoice-left.png); background-size:contain;background-repeat: no-repeat;height: 70px;">
                                 </td>
                                 <td style="width:30%;background: url(/images/invoice-right.png);background-size:contain;background-repeat: no-repeat;height: 70px;padding-right: 21px;"></td>
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
                                             <td style="font-weight: 700;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                                {{ config('env.COMPANYNAME')}}</td>
                                          </tr>
                                          <tr>
                                             <td
                                                style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                                ABN number : </td>
                                             <td class="abn_number"
                                                style="font-weight: 700;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                                </td>
                                          </tr>
                                          <tr>
                                             <td
                                                style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;">
                                                Date  : </td>
                                             <td class="date"
                                                style="font-weight: 700;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;"></td>
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
                                             <td class="couple_name"
                                                style="font-weight: 700;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;width: 50%;text-align: right;">{{getUserBookingDetails()->first_couple_name}} & {{getUserBookingDetails()->second_couple_name}}</td>
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
                                 <th
                                    style="font-weight: 700;font-size: 15px;line-height: 20px;color: #fff;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: left;">
                                    Package Name</th>
                                 <th
                                    style="font-weight: 700;font-size: 15px;line-height: 20px;color: #fff;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: left;">
                                    Ceremony date</th>
                                 <th
                                    style="font-weight: 700;font-size: 15px;line-height: 20px;color: #fff;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: right;">
                                    Partner Name</th>
                                <th
                                    style="font-weight: 700;font-size: 15px;line-height: 20px;color: #fff;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: right;">
                                    Total</th>
                              </tr>
                           </thead>
                           <tbody>
                            <?php ?>
                              <tr>
                                 <td class="package_name"
                                    style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: left;"></td>
                                 <td class="ceremony_date"
                                    style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: left;">{{date('M d, Y',strtotime(getUserBookingDetails()->booking_date))}}</td>
                                 <td class="partner_name"
                                    style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: right;"></td>
                                <td class="total"
                                    style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;padding: 15px 20px;text-align: right;"></td>
                              </tr>
                              <tr>
                                 <td style="padding: 1px;background: #62CBC9;"></td>
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
                                             <td class="total"
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
                                          <tr>
                                            <td style="font-weight: 400;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;width: 50%;"> Date Paid </td>
                                            <td class="date" style="font-weight: 700;font-size: 12px;line-height: 20px;color: #1C1C1C;font-family: 'Montserrat', sans-serif;width: 50%;"> </td>
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
                                             <td><img src="/images/authorised-sign.png" style="float:right;width: 50%;"></td>
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
         </div>
      </div>
   </div>
</div>