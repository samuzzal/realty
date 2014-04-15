<?php

	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	
	print "<html>";
	print "<head><title>Inserted Records</title>";	
?>
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<script src="js/jquery-1.6.js" ></script>
	<script src="js/cufon-yui.js"></script>
	<script src="js/cufon-replace.js"></script>
	<script src="js/Didact_Gothic_400.font.js"></script>
	<script src="js/jquery.nivo.slider.pack.js"></script>
	<script src="js/atooltip.jquery.js"></script>
	<script src="js/jquery.jqtransform.js" ></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	</head>
<?php
	print "<body style='font-family:verdana;font-size:12pt;font-weight:bold'>";
	print "<div style='padding-left:191px;padding-top:50px;'>";
	print "<div style='width:500px;background-color:black;color:white;padding-left:10px;padding-top:10px;padding-bottom:10px;padding-right:10px'>";
	print "Name: $name<BR>";
	print "Telephone: $phone<BR>";
	print "Email: $email<BR>";
	print "Message: $message<BR>";
	print "</div>";
	
	$username="root";
	$password="";
	$database="realty";

	mysql_connect("localhost",$username,$password);
	@mysql_select_db($database) or die( "Unable to select database");
	$query = "insert into contacts (`name`, `phone_no`, `email`, `message`) values('$name','$phone', '$email','$message')";
	//print "$query";
	
	mysql_query($query);
	print "<BR><BR><div style='width:500px;background-color:black'>";
	Print "<BR><h5 style=\"padding-left:10px\">Thanks for posting your message. We will get back to you shortly.</h5></div>";
	
	mysql_close();
	
	print ("<br><h5><a href='javascript:history.back(1);'>Back</a></h5>");
	print ("</div></body></html>");
?>