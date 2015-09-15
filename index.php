<!DOCTYPE html>
<?php
/*~ index.php
.---------------------------------------------------------------------------.
|  Software: SMTP PHP Contact Form                                          |
|   Version: 1.3                                                            |
|   Contact: kodofisi.org											        |
|      Info: http://kodofisi.org			                                |
|   Support: http://kodofisi.org			         	                    |
| ------------------------------------------------------------------------- |
|     Admin: Mehmet Koçak (project admininistrator)                         |
| Copyright (c) 2014-2015, Mehmet Koçak. All Rights Reserved.               |
| ------------------------------------------------------------------------- |
*/
session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>PHP Contact Form - kocakmhmt</title>
		<meta name="description" content="SMTP PHP Contact Form / kodofisi.org">
		<meta name="author" content="Mehmet Koçak">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
			<script type="text/javascript"> 
			function gostergizle()
			{
			$("div#container").show(100); 
			}
			function sendmessage(){ 
			var veriler = $('#contact_form').serialize(); 
			$.ajax({ 
			type: "POST", 
			url: "inc/send.php", 
			data: veriler, 
			success:function(cevap){ 
			$("#send").html(""+cevap); 
			$("div#container").hide(100); 
			} 
			})}; 
			function formReset(id) {
			$('#'+id).each(function(){
			this.reset();
			});
			}
			function kontrolet(){
        var name=$('#name').val();
			name=jQuery.trim(name);
		var email=$('#email').val();
			email=jQuery.trim(email);
		var mess=$('#text').val();
			mess=jQuery.trim(mess);
		var tel=$('#phone').val();
			tel=jQuery.trim(tel);
        var guvenlikKodu=$('#guvenlikKodu').val();
			guvenlikKodu=jQuery.trim(guvenlikKodu);        
        
			if(name==''){
			alert("Please check your name");
			} 	
			else if(email==''){
				alert("Please check your E-Mail");
				}
            else if (tel==''){
				alert("Please check your Phone");
				}
            else if (guvenlikKodu==''){
				alert("Security code is empty!");
				}
            else if(mess==''){
				alert("Please check your Message");
				}

			else { sendmessage() } 
				}
</script>
</head>

<body>

		<center><img src="images/logo.png" alt="kocakmhmt logo"></center>

		
				
		<!-- Form -->
		
		<div class="linkler">
	<center><a class="active" href="#">Contact Form</a>  <a href="about.html">What is this?</a> <a  href="how.html">How to Use?</a> <b><a target="_blank" href="https://github.com/kocakmhmt/SMTP-PHP-Contact-Form">Download!</a></b> <a target="_blank" href="https://www.paypal.me/kocakmhmt"><img height="40" width="130" src="http://www.kocakmhmt.com/phpmailer/images/paypal.png"></a></center>
	</div>
		
		<div id="container">
			<h2>Contact Form</h2>
	<form class="form" id="contact_form" name="contact_form" method="post" action="javascript:void(0);">
		<p class="name">
			<input type="text" name="name" id="name" placeholder="Your Name*"  required/>
			<label for="name">Name Surname<font color="red">*</font></label>
		</p>
		<p class="email">
			<input type="text" name="email" id="email" placeholder="mail@example.com*" required />
			<label for="email">Email<font color="red">*</font></label>
		</p>
		<p class="phone">
			<input type="text" name="phone" id="phone" placeholder="+00123456789*"  required/>
			<label for="phone">Phone<font color="red">*</font></label>
		</p>
		<p class="web">
			<input type="text" name="web" id="web" placeholder="www.example.com" />
			<label for="web">Website</label>
		</p>
		<p class="sec">
		<select  name="subject">
		  <option value="General">General</option>
		  <option value="product">Product Support</option>
		  <option value="new">New Business</option>
		  <option value="other">Other</option>
		</select>
		<label>Contact Reason</label>
		</p>  	
    <input type="text" name="guvenlikKodu" id="guvenlikKodu" required />
    <label for="guvenlikKodu"></label>
 <img src="inc/captcha.php" />
		<p class="text">
			<textarea id="text" name="text" id="text"placeholder="Your Message*"  required/></textarea>
		</p>
	
		<p class="submit">
			<input type="submit" onclick="kontrolet()" value="Send" />
			<input type="reset" value="Reset" />
		</p>
	</form>
	
	</div>
		
	<div style="margin-top: 80px" id="send"></div>
	
	
	
	<!-- Form -->
<center><script type="text/javascript" src="http://app.winwords.adhood.com/92964,670,90"></script></center>
		
		
	<div class="footer">
	<p>Mehmet Koçak © 2015
<a href="http://twitter.com/kocakmhmt"><img src="images/twitter.png" /></a>
<a href="mailto:mkocak@kodofisi.org"><img src="images/mail.png" /></a></p>
	
	
	</div>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47181399-2', 'auto');
  ga('send', 'pageview');

</script>
	</body>
</html>
