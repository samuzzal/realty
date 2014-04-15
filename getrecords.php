<?php
	$username="root";
	$password="";
	$database="realty";
	mysql_connect("localhost",$username,$password);
	
	@mysql_select_db($database) or die( "Unable to select database");
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

<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <h1><a href="index.html" id="logo"></a></h1>
      <div class="wrapper">
        <ul id="icons">
          <li><a href="#" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="images/icon2.jpg" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="images/icon3.jpg" alt=""></a></li>
        </ul>
      </div>
      <nav>
        <ul id="menu">
          <li id="menu_active"><a href="index.php">Main Page</a></li>
          <li><a href="buying.html">Buying Estate</a></li>
          <li><a href="selling.html">Selling Estate</a></li>
          <li><a href="renting.html">Services</a></li> <!--Counselling/Consult/Finance-->
          <li><a href="finance.html">Finance</a></li>
          <li class="end"><a href="contacts.html">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    <!-- / header -->
  </div>
</div>

<?php
/*Placeholder to form the condition part of the SQL query*/
$condition = "where";

if ($_GET["name"] != '') {
	$site_picture = $_GET["name"];
	$condition = $condition." site_picture = \"$site_picture\"";
}

if ($condition == 'where') {
	$query = "select * from prop_info";
}
else {
	$query = "select * from prop_info ".$condition;
}

$result=mysql_query($query);
$num=mysql_numrows($result);
mysql_close();
?>

<center>
<?php
	$i=0;
	while ($i < $num){
?>
	<h4><table style="background-color:Black;color:white" width="700px" border="1" bordercolor="#444444">	
	<TR><TD align='center' colspan=2>
<?php
		print "<h4>".(mysql_result($result,$i,"description"))."</h4>";
?>
	</TD></TR>
	<TR ><TD colspan=2>
<?php
		$image_name = "data/".mysql_result($result,$i,"site_picture");
		print ("<img src=$image_name height=400 width=700 />");
?>
	</TD></TR>
	<TR style="height:25px"><TH width='40%'>Property Type</TH><TD>
<?php
		$type = mysql_result($result,$i,"prop_type");
		if ($type == "ind_house") {
			print ("Independent House");
		}
		else {
			print ($type);
		}
?>
	</TD></TR>
	<TR style="height:25px;"><TH width='40%'>Site Rate</TH><TD>
<?php
		print (mysql_result($result,$i,"rate"));
?>
	</TD></TR>
	<TR style="height:25px;"><TH width='40%'>Home Rate</TH><TD>
<?php
		print (mysql_result($result,$i,"home_rate"));
?>
	</TD></TR>
	<TR style="height:25px;"><TH width='40%'>Area</TH><TD>
<?php
		print (mysql_result($result,$i,"area"));
?>
	</TD></TR>
	<TR style="height:25px;"><TH width='40%'>Dimension</TH><TD>
<?php
		print (mysql_result($result,$i,"dimension"));
?>
	</TD></TR>
	<TR style="height:25px;"><TH width='40%'>Locality</TH><TD>
<?php
		print (mysql_result($result,$i,"locality"));
?>
	</TD></TR>
	<TR style="height:25px;"><TH width='40%'>City</TH><TD>
<?php
		print (mysql_result($result,$i,"city"));
?>
	</TD></TR>
	<TR style="height:25px;"><TH width='40%'>Distance From City</TH><TD>
<?php
		print (mysql_result($result,$i,"distance_from_city"));
?>
	</TD></TR>
	<TR style="height:25px;"><TH width='40%'>Sinte No</TH><TD>
<?php
		print (mysql_result($result,$i,"sinte_no"));
?>
	</TD></TR>
	<TR style="height:25px;"><TH width='40%'>Corner</TH><TD>
<?php
		print (mysql_result($result,$i,"corner"));
?>
	</TD></TR>
	<TR style="height:25px;"><TH width='40%'>Facing</TH><TD>
<?php
		print (mysql_result($result,$i,"facing"));
?>
	</TD></TR>
<?php
		$i++;
?>
	</table></h4>
	<BR>
<?php
	}
?>
</center>
</Body>
