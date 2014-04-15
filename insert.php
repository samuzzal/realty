<?php

	$prop_type = $_POST["proptype"];
	$bedroom = $_POST["bedroom"];
	$rate = $_POST["rate"];
	$home_rate = $_POST["home_rate"];
	$area = $_POST["area"];
	$dimension = $_POST["dimension"];
	$locality = $_POST["locality"];
	$city = $_POST["city"];
	$description = $_POST["description"];
	$distance_from_city = $_POST["distance_from_city"];	
	$sinte_no = $_POST["sinte"];
	$corner = $_POST["corner"];
	$facing = $_POST["facing"];
	$image_name = $_POST["image_name"];
	
	if ($home_rate == '') {
		$home_rate = "NULL";
	}
	/*if ($picture == '') {
	$picture = "NULL";
	}*/
	
	if ($prop_type == 'Individual House'){
	$prop_type = "ind_house";
	}
	
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
	print "prop_type: $prop_type<BR>";
	print "site rate: $rate<BR>";
	print "home rate: $home_rate<BR>";
	print "Number of bedrooms: $bedroom<BR>";
	print "area: $area<BR>";
	print "diemnsion: $dimension<BR>";
	print "loclality: $locality<BR>";
	print "city: $city<BR>";
	print "description: $description<BR>";
	print "Distance from City: $distance_from_city<BR>";
	print "sinte no: $sinte_no<BR>";
	print "corner: $corner<BR>";
	print "facing: $facing<BR>";
	print "image filename: $image_name<BR>";
	print "</div>";
	
	$username="root";
	$password="";
	$database="realty";
	
	mysql_connect("localhost",$username,$password);
	
	@mysql_select_db($database) or die( "Unable to select database");
	
	$query = "insert into prop_info(`prop_type`, `bedroom`, `rate`, `area`, `dimension`, `locality`, `city`, `description`, `distance_from_city`, `sinte_no`, `corner`, `site_picture`,`home_rate`,`facing`) values('$prop_type','$bedroom','$rate','$area','$dimension','$locality','$city','$description','$distance_from_city','$sinte_no','$corner','$image_name','$home_rate','$facing')";
	
	//print "$query";
	
	mysql_query($query);
	print "<BR><BR><div style='width:500px;background-color:black'>";
	Print "<BR><h4>Data saved successfully!!!</h4></div>";
	
/*	$query = "select * from prop_info";
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	$i=0;
	while ($i < $num){
		$prop_type=mysql_result($result,$i,"prop_type");
		$rate=mysql_result($result,$i,"rate");
		print "<H4>DB Prop_type: $prop_type</H4>";
		print "<H4>DB rate: $rate</H4><BR><BR>";
		$i++;
	}
*/	
	mysql_close();
	
	print ("<br><h5><a href='javascript:history.back(1);'>Back</a></h5>");
	print ("</div></body></html>");
?>