<?php


    include "banner.php";
	include "leftpanel.php";
	include "dbconnect.php";
?>

<div align=center>
 
    <?php
	
	    $CID=$_POST['CID'];
		
		$rs=mysql_query("select * from consumer where CID='".$CID."'");
		if($data=mysql_fetch_row($rs))
		{
			
		    echo "<div style='height:100px;'></div>";
			echo "<table>";
			echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Consumer ID</td><td style='background-color:cyan;width:200px;border-radius:10px;'>".$data[0]."</td></tr>";
		    echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Consumer Name</td><td style='background-color:cyan;width:200px;border-radius:10px;'>".$data[1]."</td></tr>";
			echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Address</td><td style='background-color:cyan;width:200px;border-radius:10px;'>".$data[2]."</td></tr>";
			echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Contact No</td><td style='background-color:cyan;width:200px;border-radius:10px;'>".$data[3]."</td></tr>";
			echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Email</td><td style='background-color:cyan;width:100px;border-radius:10px;'>".$data[4]."</td></tr>";
			echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Area</td><td style='background-color:cyan;width:200px;border-radius:10px;'>".$data[5]."</td></tr>";
			echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Consumer Type</td><td style='background-color:cyan;width:100px;border-radius:10px;'>".$data[6]."</td></tr>";
			echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Meter ID</td><td style='background-color:cyan;width:100px;border-radius:10px;'>".$data[7]."</td></tr>";
			echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Unit</td><td style='background-color:cyan;width:100px;border-radius:10px;'>".$data[8]."</td></tr>";
			echo "</table>";
			
			echo "<a href=details.php?CID=".$data[0]."> Detail Consumption Record </a>";
		
	}
	    else
		{
			echo "<div style='height:200px;'></div>";
			echo "<div style='width:300px;background-color:lightblue;color:red;'>Sorry!! Invalid Consumer ID</div>";
		}	
	
	?>
	
	 
	 
</div>
	