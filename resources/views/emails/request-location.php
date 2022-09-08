<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
   <!-- START HEADER/BANNER -->
   <tbody>
      <tr>
         <td align="center">
            <table  width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
               <tbody>
                  <tr>
                     <td align="center" valign="top"  bgcolor="#d70c14">
                        <table  width="60%"  border="0" align="center" cellpadding="0" cellspacing="0">
                           <tbody>
                              <tr>
                                 <td height="40"></td>
                              </tr>
                              <tr>
                                 <td align="center" style="line-height: 0px;">
                                    <img style="display:block; line-height:0px; font-size:0px; border:0px;" src="{{ asset('/images/pinspy.png')}}"  alt="logo">
                                    
                                 </td>
                              </tr>
                              <tr>
                                 <td height="50"></td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
      <!-- END HEADER/BANNER -->
      <!-- START 3 BOX SHOWCASE -->
      <tr>
         <td align="center">
            <table  width="60%" border="0" align="center" cellpadding="0" cellspacing="0" style=" margin-left:20px; margin-right:20px; border-left: 1px solid #dbd9d9; border-right: 1px solid #dbd9d9;">
               <tbody>
                  <tr>
                     <td height="35"></td>
                  </tr>
                  <tr>
                     <td align="left" style="padding-left:20px ; padding-right:20px; font-family: 'Montserrat', sans-serif; font-size:20px; font-weight: bold; color:#2a3a4b;">Hello Admin,</td>
                     <p>Below are the custom location details</p>
                  </tr>
                  <tr>
                     <td height="10"></td>
                  </tr>
                  <tr>
                     <td align="left" style="padding-left:20px ; padding-right:20px; font-family: 'Montserrat', sans-serif; font-size:16px; color:#2a3a4b; line-height:24px; font-weight: 400;">
                     <p> Phone Number :  + <?php echo$data['country_code'].$data['phone'] ?></p>
                     <p> Event Date  : <?php echo $data['event_date'] ?></p>
                     <p> Event Start Time  : <?php echo $data['event_start_time'] ?></p>
                     <p> location Name  : <?php echo $data['name'] ?> </p>
                     <p> Street Address  :  <?php echo $data['address'] ?> </p>
                     <p> Suburb  :  <?php echo $data['town'] ?> </p>
                     <p> post Code  : <?php echo $data['post_code'] ?> </p>
                     <p> State  : <?php echo $data['state'] ?> </p> 
                     <p> Co-ordinates  : <?php echo $data['coordinates'] ?> </p> 
                     <p> Specific Location   :  <?php echo $data['direction'] ?> </p> 
                     <p> Parking Detail   : <?php echo $data['parking_details'] ?> </p> 
                     <p>Parking Cost   :  <?php echo $data['parking_cost'] ?></p>
                     </td>
                  </tr>
                  <tr>
                     <td height="80"></td>
                  </tr>
                  <tr>
                     <td align="left" style="padding-left:20px ; padding-right:18px; font-family: 'Montserrat', sans-serif;  color:#2a3a4b; line-height:24px; font-weight:400;font-size:16px">
                     With Regards,
                     </td>
                  </tr>
                  <tr>
                     <td align="left" style="padding-left:20px ; padding-right:18px; font-family: 'Montserrat', sans-serif; color:#2a3a4b; line-height:24px; font-weight:400;font-size:16px">
                    <?php echo $data['username'] ?>
                     </td>
                  </tr>
                  <tr>
                     <td height="35"></td>
                  </tr>
                  <tr align="left" valign="top">
                     <td>
                        <table class="button" style="border-left: 1px solid #dbd9d9; border-right: 1px solid #dbd9d9;"" bgcolor="#e9191e" width="100%" cellpadding="0" cellspacing="0">
                           <tbody>
                              <tr>
                                 <td width="10"></td>
                                 <td height="30" align="center" style="font-family: 'Montserrat', sans-serif; font-size:16px; color:#ffffff; font-weight:400;">
                                    <!-- <a style="color:white">Verify Email</a>  -->
                                 </td>
                                 <td width="10"></td>
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
         <td height="5"></td>
      </tr>
      <!-- END FOOTER -->
   </tbody>
</table>