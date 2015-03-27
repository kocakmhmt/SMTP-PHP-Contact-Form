<!DOCTYPE html>
<?php
/*~ index.php
.---------------------------------------------------------------------------.
|  Software: SMTP PHP Contact Form                                          |
|   Version: 1.1                                                            |
|   Contact: kodofisi.org											        |
|      Info: http://kodofisi.org			                                |
|   Support: http://kodofisi.org			         	                    |
| ------------------------------------------------------------------------- |
|     Admin: Mehmet Koçak (project admininistrator)                         |
| Copyright (c) 2014-2015, Mehmet Koçak. All Rights Reserved.               |
| ------------------------------------------------------------------------- |
*/
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>PHP Contact Form - kocakmhmt</title>
		<meta name="description" content="SMTP PHP Contact Form / kodofisi.org">
		<meta name="author" content="Mehmet Koçak">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="style.css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
			<script type="text/javascript"> 
			function gostergizle()
			{
			$("div#container").show(100); 
			}
			function sendmessage(){ 
			var veriler = $('#contact_form').serialize(); 
			$.ajax({ 
			type: "POST", 
			url: "send.php", 
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
			if(name==''){
			alert("Please check your name");
			} 	
			else if(email==''){
				alert("Please check your E-Mail");
				}
			else if (tel==''){
				alert("Please check your phone");
				}
				else if(mess==''){
				alert("Please check your Message");
				}
			else { sendmessage() } 
				}
			</script>
			
</head>

<body>
		<center><img src="logo.png" alt="kocakmhmt logo"></center>
		
		<div id="container">
			<h2>Contact Form</h2>
	<form class="form" id="contact_form" name="contact_form" method="post" action="javascript:void(0);">
		<p class="name">
			<input type="text" name="name" id="name" placeholder="Your Name*"  required/>
			<label for="name">Name Surname<font color="red">*</font></label>
		</p>
		<p class="email">
			<input type="email" name="email" id="email" placeholder="mail@example.com*" required />
			<label for="email">Email<font color="red">*</font></label>
		</p>
		<p class="phone">
			<input type="tel" name="phone" id="phone" placeholder="+00123456789*"  required/>
			<label for="email">Phone<font color="red">*</font></label>
		</p>
		<p class="web">
			<input type="url" name="web" id="web" placeholder="www.example.com" />
			<label for="web">Website</label>
		</p>
		<p class="sec">
		<select name="subject">
		  <option value="General">General</option>
		  <option value="product">Product Support</option>
		  <option value="new">New Business</option>
		  <option value="other">Other</option>
		</select>
		<label>Contact Reason</label>
		</p>
		<p class="text">
			<textarea name="text" id="text"placeholder="Your Message*"  required/></textarea>
		</p>
		
		<p class="submit">
			<input type="submit" onclick="kontrolet()" value="Send" />
			<input type="reset" value="Reset" />
		</p>
	</form>
	
	</div>
	<div id="send"></div>
	<p><center>Mehmet Koçak © 2015 | <a href="http://facebook.com/kocakmhmt">Facebook!</a>, <a href="http://twitter.com/kocakmhmt">Twitter</a>, <a href="mailto:mkocak@kodofisi.org">E-Posta</a> | <a href="LICENSE">GNU/GPL</a></p>
	<p><a href="https://github.com/kocakmhmt/SMTP-PHP-Contact-Form">Download!</a></center></p>
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
