
<div class="modal fade" id="tax_invoice_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content border-0 rounded-0">
         <div class="modal-body p-0"  style="min-height:94vh">
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
                           <td style="width:50%"> <img src="/images/invoice-left.png"  cellpadding="0" cellspacing="0" alt="" style="max-width: 100%;height: auto;"> </td>
                           <td style="width:50%"> 
                           <!-- <img src="/images/invoice-right.png"  cellpadding="0" cellspacing="0" alt="" style="    width: 50%;max-width: 100%;height: auto;float: right;padding-right: 21px;">  -->
                           </td>
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
                                             <td style="font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;">Invoice from    : </td>
                                             <td class="celebrant_name" style="font-weight:700;font-size: 12px;line-height: 20px; color: #1C1C1C;"> </td>
                                          </tr>
                                         
                                          
                                          <tr>
                                             <td style="font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;">ABN number</td>
                                             <td class="abn_number" style="font-weight:700;font-size: 12px;line-height: 20px; color: #1C1C1C;"> : 090909090</td>
                                          </tr>
                                          <tr>
                                             <td style="font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;">Date Create</td>
                                             <td class="date" style="font-weight:700;font-size: 12px;line-height: 20px; color: #1C1C1C;">: Feb 21, 2022</td>
                                          </tr>
                                       </table>
                                    </td>
                                    <td style="width:50%">
                                       <table style="width:100%;  justify-content: end;   display: flex; " >
                                          <tr>
                                             <td style="font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;">Invoice to </td>
                                             <td style="font-weight:700;font-size: 12px;line-height: 20px; color: #1C1C1C;"> : {{ config('env.COMPANYNAME')}}</td>
                                            
                                          </tr>
                                       </table>
                                    </td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <table style="width:100%" cellpadding="18">
                                 <thead style="background-color: #62CBC9;">
                                    <tr>
                                      
                                       <th style="font-weight: 700;font-size: 15px;line-height: 13px; color: #FFFFFF;">Type of ceremony</th>
                                       <th style="font-weight: 700;font-size: 15px;line-height: 13px; color: #FFFFFF;text-align: left;padding-left: 0;">Ceremony date</th>
                                       <th style="font-weight: 700;font-size: 15px;line-height: 13px; color: #FFFFFF;text-align: right;">Couple</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr style="border-bottom:1px solid #62CBC9;">
                                      
                                       <td class="ceremony_type" style="min-width:400px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;">Add item description here</td>
                                       <td class="ceremony_date"  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: left;padding-left: 0;">$123</td>
                                       <td class="couple"  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: right;">$123</td>
                                    </tr>
                                    
                                    
                                 </tbody>
                                 <tfoot>
                                    <tr>
                                       <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;padding: 0;">&nbsp;</td>
                                       <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: left;padding: 0;padding-top: 20px;">Total Fee:</td>
                                       <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: right;padding: 0;"></td>
                                    </tr>
                                    <tr>
                                       <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;padding: 0;">&nbsp;</td>
                                       <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: left;padding: 0;">Less administration Fee:</td>
                                       <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: right;padding: 0;"></td>
                                    </tr>
                                    <tr>
                                       <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;padding: 0;">&nbsp;</td>
                                       <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: left;padding: 0;">Administration Fee:</td>
                                       <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: right;padding: 0;">
                        
                                    </td>
                                    </tr>
                                    <tr>
                                       <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;padding: 0;">&nbsp;</td>
                                       <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: left;padding: 0;padding-top: 20px;">Total :</td>
                                       <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: right;padding: 0;"></td>
                                    </tr>
                                    <tr>
                                       <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;padding: 0;">&nbsp;</td>
                                       <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: left;padding: 0;">Celebrant Fee:</td>
                                       <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: right;padding: 0;"></td>
                                    </tr>
                                    <tr>
                                       <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;padding: 0;">&nbsp;</td>
                                       <td  style="min-width:100px;font-weight: 400;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: left;padding: 0;">GST component</td>
                                       <td  style="min-width:100px;font-weight: 700;font-size: 12px;line-height: 20px; color: #1C1C1C;text-align: right;padding: 0;">
                                    
                                    </td>
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
                                       <img src="/images/authorised-sign.png" style="float:right;    width: 20%;">
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
                                    <td><img src="/images/invoicefooter-left.png"></td>
                                 </tr>
                              </table>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>