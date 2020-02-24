<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
                                        Reyada.co - Event Ticket Details
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                        <b>User Details: </b><br><br>
                                        <b>Name:</b> <?= $ticket->name ?><br><br>
                                        <b>Email:</b> <?= $ticket->email ?><br><br>
                                        <b>Mobile:</b> <?= $ticket->mobile ?><br><br>                                    
                                        <b>Quantity Purchased:</b> <?= $ticket->no_of_attendees ?><br><br>
                                        <b>Total Cost:</b> <?= $ticket->event_price * $ticket->no_of_attendees ?><br><br>
                                        <b>Payment Confirmation:</b> 
                                            <?php if($ticket->payment_status && $ticket->event_price > 0){ ?>
                                                <?= $ticket->payment_trans ?> (Paid)
                                            <?php }elseif($ticket->event_price == 0){ ?>
                                                Free
                                            <?php }elseif(!$ticket->payment_status && $ticket->event_price > 0){ ?>
                                                Not Paid
                                            <?php } ?>
                                        <br><br>
                                        <b>Event Name:</b> <?= $ticket->event_name ?><br><br>
                                        <b>Date:</b> <?= $ticket->created_date ?><br><br>
                                        <b>Location:</b> <?= $ticket->event_location ?><br><br>

                                        <b>Attendee Details: </b><br><br>
                                        <?php if(count($attendee) > 0){ ?>
                                            <?php $i = 1 ?>
                                            <?php foreach($attendee as $atten){ ?>
                                                <b>== Attendee <?= $i ?> ==</b><br>
                                                <b>Name:</b> <?= $atten->name ?><br><br>
                                                <b>Email:</b> <?= $atten->email ?><br><br>
                                                <?php $i++; ?>
                                            <?php } ?>
                                        <?php } ?>
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
