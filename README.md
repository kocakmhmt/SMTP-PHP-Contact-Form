
# SMTP-PHP-Contact-Form
This Contact Form using a SMTP. We are using the SMTP is not the PHP mail() function because the mail function can be attached to the mails sent by the ip filter . Can fall to junk box.
Used by many open-source projects: Wordpress, Drupal, 1CRM, SugarCRM, Yii, Joomla! and many more Integrated SMTP support - send without a local mail server SMTP authentication with LOGIN, PLAIN, NTLM and CRAM-MD5 mechanisms over SSL and TLS transports
##Form
1- Form Control with PHP&Ajax
2- No Refresh page, save your bandwidth
3- Easy setup and customization code for you
4- captcha control

## Settings
Adjust according to your own line file specified in "send.php", copy to your FTP server . Add to your page where you want the form in the "index.php" file . Make sure that all the files in the same folder .

## Codes which you must change in send.php
```bash
$mail->Host     = "mail.kocakm.com"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "m@kocakm.com";  // SMTP username
$mail->Password = "password"; // SMTP password
$mail->From     = "m@kocakm.com"; // it must be a match with SMTP username
$mail->Fromname = "Mehmet Koçak"; // from name
$mail->AddAddress("m@kocakm.com","Mehmet Koçak"); // SMTP username , Name Surname
```

## Online demo
[http://www.kocakm.com/phpmailer](http://www.kocakm.com/phpmailer)
