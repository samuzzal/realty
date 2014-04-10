<?php
	$admin_username = $_POST["username"];
	$admin_password = $_POST["password"];
	
	print "<H4>Username: $admin_username</H4>";
	print "<H4>Password: $admin_password</H4>";
	
	$username="root";
	$password="";
	$database="realty";
	mysql_connect("localhost",$username,$password);
	
	@mysql_select_db($database) or die( "Unable to select database");
	
	$query = "select * from login";
	$result=mysql_query($query);
	$num=mysql_numrows($result);
	mysql_close();
	
	$i=0;
	while ($i < $num){
		$db_username=mysql_result($result,$i,"userid");
		$db_password=mysql_result($result,$i,"password");
		print "<H4>DB Username: $db_username</H4>";
		print "<H4>DB Password: $db_password</H4><BR><BR>";
		$i++;
	}
	
	if (($admin_username==$db_username) and ($admin_password==$db_password)) {
		print "<H2>Success!</H2>";
		header ("Location: http://localhost/realty/insertdata.html");
	}
	else {
		print "<font color='red'><H2>Failure!</H2></font>";
	}
?>
