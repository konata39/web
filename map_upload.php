<?php
	$host = "140.116.245.148";
	$user = "f74021014";
	$upwd = "1234qwerA";
	$db = "f74021014";
	
	$link=mysql_connect($host,$user,$upwd) or die ("Unable to connect!");
	mysql_select_db($db, $link) or die ("Unable to select database!");
	
	$Map0 = $_GET["KeyMap0"];
	$Map1 = $_GET["KeyMap1"];
	$Mwalk = $_GET["KeyMwalk"];
	$Name = $_GET["KeyName"];
	$Xmax = $_GET["KeyXmax"];
	$Ymax = $_GET["KeyYmax"];
	$Bsize = $_GET["KeyBsize"];
	$MapSrc = $_GET["KeyMapSrc"];
	
	
	$query="SELECT * FROM `MapData` where Name = '".$Name."'";
	$result= mysql_query($query,$link) or die ("Error in query: $query.". mysql_error());
	
	if($rows = mysql_fetch_array($result)){
		echo "Map name have already existed !!";
	}
	else{
		$query2 = "INSERT INTO `MapData` (`Name`,`MapSrc`,`Xmax`,`Ymax`,`Bsize`,`Map0`,`Map1`,`Mwalk`) VALUES ('".$Name."','".$MapSrc."','".$Xmax."','".$Ymax."','".$Bsize."','".$Map0."','".$Map1."','".$Mwalk."')"; 
		$result2 = mysql_query($query2,$link) or die ("Error in query: $query2.". mysql_error());
		if($result2){
			echo "Success upload map !!";
		}
	}
	
	
?>