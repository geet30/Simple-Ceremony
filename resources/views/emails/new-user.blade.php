<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td width="5%">&nbsp;</td>
        <td width="90%" align="left" valign="top">
            <font style="color:#df5555; font-size:24px"><strong style="font-weight:500"><em><span style="color:#464647">Hi</span> <?php echo $data['email']; ?>,</em></strong></font><br /><hr style=" border-color:#BFBFBF" /><br />
            <font style="font-family: 'Open Sans',arial,  sans-serif; color:#3b3b3b; font-size:20px; line-height:24px">
            <strong style="margin-bottom:15px; display:inline-block; font-weight:500">Account created</strong>
            </font>
            <br />
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:13px; line-height:21px">
            Your account has been created in Simple Ceremonies company. Below is your credential.
            </font><br>
            <font style="font-family: 'Open Sans', arial, sans-serif; color:#3b3b3b; font-size:12px; line-height:21px; font-weight: bold">
            Email -  &nbsp;<?php echo $data['email']; ?> <br>
            Password - &nbsp;<?php echo $data['password']; ?> <br>
            </font>
    <center>
        <a href="{{ route('login') }}" style=" color:#fff; font-size:18px; line-height:30px; text-decoration:none; padding:10px 15px; display:inline-block; background:#df5555; margin:15px 0;" target="_blank">Login</a>
    </center>
    <font style="font-family: 'Open Sans', sans-serif; color:#fff; font-size:13px; line-height:21px">
    Thanks &amp; Regards,<br />
    {{ env('EMAILFOOTER') }} </font></td>
<td width="5%">&nbsp;</td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
            <tr>
                <td align="center"><br /><font style="font-family: 'Open Sans', sans-serif; color:#3b3b3b; font-size:13px; line-height:21px"><i>Need help? Have feedback? Feel free to email us at <span style=" color:#df5555">{{!empty($data['default_mail'])? $data['default_mail'] : 'support@simpleceremonies.com'}}</span></i></font><br /><br /></td>
            </tr>



        </table>
    </td>
    <td>&nbsp;</td>
</tr>
</table>