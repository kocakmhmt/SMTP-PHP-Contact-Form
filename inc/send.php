<?php
if($_POST)
{
$text=$_POST['text'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$web=$_POST['web'];
$domain=$_SERVER['HTTP_HOST'];
$ipadress=$_SERVER['REMOTE_ADDR'];
$date = date("d.m.Y"); 
$time = date("H:i:s"); 	
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host     = "mail.kodofisi.org"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "mkocak@kodofisi.org";  // SMTP username
$mail->Password = "kocak.123"; // SMTP password
$mail->From     = "mkocak@kodofisi.org"; // it must be a match with SMTP username
$mail->Fromname = "Mehmet Koçak"; // from name
$mail->AddAddress("mkocak@kodofisi.org","Mehmet Koçak"); // SMTP username , Name Surname
$mail->Subject  =  $_POST['subject'];
$content = "<h2>You have a message by $domain</h2>  <p><b>Name:</b>$name</p> <p><b>E-Mail:</b>$email</p> <p><b>Phone:</b>$phone</p> <p><b>Subject:</b>$subject</p> <p><b>Message:</b>$text</p> <p><h5>Date: $date . $time </h5></p> <p><h5>IP Adress of User: $ipadress</h5> </p><p><h5>This message was sent using SMTP-PHP-Contact-Form by kocakmhmt</h5></p>";
$mail->MsgHTML($content);
if(!$mail->Send())
{
   echo "<center>Error! Its wrong!</center>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
echo "<center>Thank you! Your message has reached us! <p><input type='submit' onclick='gostergizle();' value='Back' /></p></center>";
}
?>