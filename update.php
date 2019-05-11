<?php

    include "dbconnect.php";
	
	$MID=$_GET['MID'];
	$UNIT=$_GET['UNIT'];
	$Dated=date('Y-m-d');
	$TimeStamp=date('H:i:s');
	
	$rs=mysql_query("select CID from Consumer where MID='".$MID."'");
	if($data=mysql_fetch_row($rs))
	{
		$CID=$data[0];
	}	
	else
	{
		$CID="ERR_05";
	}	
    $sql="insert into datalog(Dated, TimeStamp,MID,CID,UNIT)values('".$Dated."','".$TimeStamp."','".$MID."','".$CID."','".$UNIT."')"; 	
	//echo $sql;
	mysql_query($sql);
	mysql_query("update consumer set Unit='".$UNIT."' where CID='".$CID."'");
	
	

?>
