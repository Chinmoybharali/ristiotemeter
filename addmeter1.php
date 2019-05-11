<?php

     include "banner.php";
	 include "leftpanel.php";
	 include "dbconnect.php";
	
	 $MID=$_POST['MID'];
	 $Capacity=$_POST['Capacity'];
     $UNIT=$_POST['UNIT'];
	 
	 mysql_query("insert into Meter (MID,Capacity,Unit)values('".$MID."','".$Capacity."','".$UNIT."')");
	 
	 echo "<div align=center>";
	 echo "<div style=height:200px;></div>";
	 echo "<div style='background-color:lightblue;'>New Meter Added Succesfully</div>";
	 echo "</div>";
?>
