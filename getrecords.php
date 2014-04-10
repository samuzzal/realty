<?php
	$username="root";
	$password="";
	$database="realty";
	mysql_connect("localhost",$username,$password);
	
	@mysql_select_db($database) or die( "Unable to select database");
	
	$query = "select * from prop_info";
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	mysql_close();
?>
<Head>
	<Title>Retrieved Records</Title>
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
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
	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<style type="text/css">.bg{behavior:url("js/PIE.htc");}</style>
	<![endif]-->
</Head>
<Body>
<center>
	<span><h3><font color="darkblue">Retrieved Records</font></h3></span>
	<table width="500px" border="1" bordercolor="#444444">
<?php
	$i=0;
	while ($i < $num){
?>	
	<TR style="background-color:skyblue;color:darkblue;height:25px"><TH width='40%'>Property Type</TH><TD>
<?php
		print (mysql_result($result,$i,"prop_type"));
?>
	</TD></TR>
	<TR style="background-color:lightblue;color:darkblue;height:25px;"><TH width='40%'>Rate</TH><TD>
<?php
		print (mysql_result($result,$i,"rate"));
?>
	</TD></TR>
	<TR style="background-color:skyblue;color:darkblue;height:25px;"><TH width='40%'>Area</TH><TD>
<?php
		print (mysql_result($result,$i,"area"));
?>
	</TD></TR>
	<TR style="background-color:lightblue;color:darkblue;height:25px;"><TH width='40%'>Dimension</TH><TD>
<?php
		print (mysql_result($result,$i,"dimension"));
?>
	</TD></TR>
	<TR style="background-color:skyblue;color:darkblue;height:25px;"><TH width='40%'>Locality</TH><TD>
<?php
		print (mysql_result($result,$i,"locality"));
?>
	</TD></TR>
	<TR style="background-color:lightblue;color:darkblue;height:25px;"><TH width='40%'>City</TH><TD>
<?php
		print (mysql_result($result,$i,"city"));
?>
	</TD></TR>
	<TR style="background-color:skyblue;color:darkblue;height:25px;"><TH width='40%'>Description</TH><TD>
<?php
		print (mysql_result($result,$i,"description"));
?>
	</TD></TR>
	<TR style="background-color:lightblue;color:darkblue;height:25px;"><TH width='40%'>Distance From City</TH><TD>
<?php
		print (mysql_result($result,$i,"distance_from_city"));
?>
	</TD></TR>
	<TR style="background-color:skyblue;color:darkblue;height:25px;"><TH width='40%'>Sinte No</TH><TD>
<?php
		print (mysql_result($result,$i,"sinte_no"));
?>
	</TD></TR>
	<TR style="background-color:lightblue;color:darkblue;height:25px;"><TH width='40%'>Corner</TH><TD>
<?php
		print (mysql_result($result,$i,"corner"));
?>
	</TD></TR>
<?php
		$i++;
	}
?>
	</table>
</center>
</Body>
