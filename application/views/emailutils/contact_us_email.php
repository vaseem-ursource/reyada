<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Contact Us Request</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
        <tr>
            <td style="padding: 10px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif;">
                                        <b><img src="<?= base_url() ?>image/logo_red.png" alt="Logo" width="100" style="display: block;" /></b><hr><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 20px;">
                                            Contact Us Request From <b><?= $userdata['full_name'] ?></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                        <b>User Details: </b><br><br>
                                        <b>Name:</b> <?= $userdata['full_name'] ?><br><br>
                                        <b>Email:</b> <?= $userdata['email'] ?><br><br>
                                        <b>Mobile:</b> <?= $userdata['phone'] ?><br><br>
                                        <b>Subject:</b> <?= $enquiry ?><br><br>
                                        <?php if(!empty($userdata['notes'])){ ?>
                                        <b>Message:</b> <?= $userdata['notes'] ?><br><br>
                                        <?php } ?>
                                        <b>Company Name:</b> <?= $userdata['company'] ?><br><br>
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#000" style="padding: 30px 30px 30px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
                                    <strong>Reyada</strong> | Collaborative workspace.
                                    </td>
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
