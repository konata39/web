<?php
	$host = "140.116.245.148";
	$user = "f74021014";
	$upwd = "1234qwerA";
	$db = "f74021014";
	
	$link=mysql_connect($host,$user,$upwd) or die ("Unable to connect!");
	mysql_select_db($db, $link) or die ("Unable to select database!");
	
	$Name = $_GET["key1"];
	
	$query="SELECT * FROM `MapData` where Name = '".$Name."'";
	$result= mysql_query($query,$link) or die ("Error in query: $query.". mysql_error());
	
	if($rows = mysql_fetch_array($result)){
		for($i=0; $i<8; $i++){
			echo $rows[$i];
			if($i<7)echo "&";
		}
	}
	else{
		echo "f".$Name;
	}
	
	
?>