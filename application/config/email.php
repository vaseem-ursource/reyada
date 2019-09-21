<?php
/* application/config/email.php */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| SendGrid Setup
|--------------------------------------------------------------------------
|
| All we have to do is configure CodeIgniter to send using the SendGrid
| SMTP relay:
*/
$config['protocol']	= 'smtp';
$config['smtp_port']	= '465';
$config['smtp_host']	= 'smtp.sendgrid.net';
$config['smtp_user']	= 'apikey';
$config['smtp_pass']	= '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';

$config['smtp_crypto']     = 'ssl';
$config['mailtype']     = 'html';
$config['smtp_timeout']     = '4';
$config['charset']     = 'iso-8859-1';

//for localhost testing
// $config['protocol']	= 'smtp';
// $config['smtp_port']	= '587';
// $config['smtp_host']	= 'smtp.sendgrid.net';
// $config['smtp_user']	= 'apikey';
// $config['smtp_pass']	= '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';
// $config['mailtype']     = 'html';