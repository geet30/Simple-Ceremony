
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td width="5%">&nbsp;</td>
        <td width="90%" align="left" valign="top">
            <font style="color:#df5555; font-size:24px"><strong style="font-weight:500"><em><span style="color:#464647"></span>Reset Password</em></strong></font><br /><hr style=" border-color:#BFBFBF" /><br />
            <font style="font-family: 'Open Sans',arial,  sans-serif; color:#3b3b3b; font-size:20px; line-height:24px">
            
            </font>
            <br />
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:13px; line-height:21px">
            
            </font><br>
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:12px; line-height:21px; font-weight: bold">
           
            You are receiving this email because we received a password reset request for your account. <br>
            <a href="{{ url('password/reset/' . $data . '?email=' . $notifiable['email']) }}">Reset Password</a> <br>
            <p>If you did not request a password reset, no further action is required.</p>
            </font>
    <center>
        
    </center>
    <font style="font-family: 'Open Sans', sans-serif; color:#fff; font-size:13px; line-height:21px">
    Thanks &amp; Regards,<br />
    {{ env('EMAILFOOTER') }} </font></td>
<td width="5%">&nbsp;</td>
</tr>

</table>
