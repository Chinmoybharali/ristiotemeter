<?php


    include "banner.php";
	include "<leftpanel.php";
	include "dbconnect.php";
?>

<div align=center>
 
     <?php
	 
	    $rs=mysql_query("select * from consumer");
		echo "<div style='height:50px;'></div>";
		echo "<table>";
		echo "<tr  style='background-color:darkblue;color:white;'> <td>Consumer ID</td><td> Consumer Name</td><td>Address</td><td>Contact No</td><td> EMail</td><td> ARea</td><td> Consumer Type</td><td> Meter ID</td></tr>"; 
		$rc=1;
		while($data=mysql_fetch_row($rs))
		{
			if($rc==1)
			{
				echo "<tr style='background-color:white;'><td>".$data[0]."</td><td>".$data[1]."</td><td>".$data[2]."</td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[5]."</td><td>".$data[6]."</td><td>".$data[7]."</td></tr>";			
			    $rc=2;
			}
		else
			{
				echo "<tr style='background-color:lightblue;'><td>".$data[0]."</td><td>".$data[1]."</td><td>".$data[2]."</td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[5]."</td><td>".$data[6]."</td><td>".$data[7]."</td></tr>";			
			    $rc=1;
			}
		
	}
	 
	 
	 ?>
	 
	 
</div>
	