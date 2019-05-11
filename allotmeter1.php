<?php

     include "banner.php";
	 include "leftpanel.php";
	 include "dbconnect.php";
	 $CID=$_POST['CID'];
	 $MID=$_POST['MID'];
	 
	 mysql_query("Update Consumer set MID='".$MID."' where CID='".$CID."'");
	 
	 echo "<div align=center>";
	 echo "<div style=height:200px;></div>";
	 echo "<div style='background-color:lightblue;'>Meter Succesfully Alloted</div>";
	 echo "</div>";
?>
