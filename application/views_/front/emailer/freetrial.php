<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>WeboConnect</title>
    <style>
        body {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        @media only screen and (max-width: 680px) {
            body,
            table,
            td,
            p,
            a {
                -webkit-text-size-adjust: none !important;
            }
            img {
                height: auto !important;
               /* max-width: 100% !important;*/
            }
            table {
                width: 100% !important;
            }
            td {
                font-size: 13px !important;
            }
            td.header {
                width: auto !important;
            }
            td.header-heading {
                padding: 49px 0 0 0 !important;
                font-size: 16px !important;
            }
            table.invoice-detail {
                padding: 0 0 !important;
            }
            td.user {
                font-size: 16px !important;
                font-weight: 600 !important;
            }
            td.detail45 {
                width: 30% !important;
            }
            td.detail18 {
                width: 23.33% !important;
            }
        }
    </style>
</head>

<body>
    <table border="0" align="center" cellpadding="0" cellspacing="0" style="width: 600px; max-width: 640px; min-width: 320px; -webkit-text-size-adjust: 100%; background: #001431; color: #ffffff; padding: 20px 20px 20px 20px; margin: 35px auto 0;">
        <tr>
            <td>
                <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="background-color: #ffffff;padding:0px 20px 30px 20px;">
                    <tr>
                        <td valign="top">
                            <table width="400px" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td colspan="2" align="center" style="color:#1c1c1c;padding:15px 0 10px 0px;">
                                        <a href="https://weboconnect.com/" target="_blank" style="display:inline-block;"><img src="<?php echo base_url();?>assets/emailer/logo.png" alt="Logo" style="max-width:200px;height:auto;display:block;" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="color:#1c1c1c;font-size:20px;font-weight:500;padding-top:20px;padding-bottom:20px;">
                                        Hello <?= ucfirst($name); ?>,
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="color:#1c1c1c;font-size:14px;line-height:1.67;padding-bottom:30px;">
                                        Thank you for filling the free trial request form. <?php echo $sendmessage; ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td colspan="2" style="color:#1c1c1c;font-size:16px;font-weight:600;line-height:1.67;padding-bottom:5px;">
                                        Regards,<span><img src="<?php echo base_url();?>assets/emailer/hand.png" alt="logo" style="width: 30px;display: inline-block;vertical-align: bottom;"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="color:#1c1c1c;font-weight:600;font-size:16px;line-height:1.4;">
                                        Team Weboconnect
                                    </td>
                                </tr>
								<tr>
									<td colspan="2" style="color:#1c1c1c;font-weight:600;font-size:16px;line-height:1.4;">
                                       <a href="http://weboconnect.com" target="_blank">http://weboconnect.com</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>
                <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"  style="background-color:#01458e;padding:20px 20px 20px 20px;">
                    <tr>
                        <td valign="middle" width="50%" style="font-size:13px;line-height:1.67;color:#fff;">
                            Copyright &copy; 2019 Weboconnect 
                        </td>
                        <td valign="middle" width="50%" align="right" style="text-align:right;">
                            <a href="https://www.facebook.com/WeboConnect/" target="_blank" style="margin-right:4px;"><img src="<?php echo base_url();?>assets/emailer/facebook-icon.png" alt="Facebook Logo" /></a>
                            <a href="https://twitter.com/weboconnect/" target="_blank" style="margin-right:4px;"><img src="<?php echo base_url();?>assets/emailer/twitter-icon.png" alt="Twitter Logo" /></a>
							<a href="https://www.linkedin.com/in/weboconnect/" target="_blank" style="margin-right:4px;"><img src="<?php echo base_url();?>assets/emailer/linkedin-icon.png" alt="linkedin-icon Logo" /></a>
							<a href="https://web.skype.com/?skype:coreit5?chat" target="_blank" style="margin-right:4px;"><img src="<?php echo base_url();?>assets/emailer/skype.png" alt="skype Logo" /></a>
							<a href="https://api.whatsapp.com/send?phone=918447141991" target="_blank" style="margin-right:4px;"><img src="<?php echo base_url();?>assets/emailer/whatsapp.png" alt="whatsapp Logo" /></a>
                           
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>