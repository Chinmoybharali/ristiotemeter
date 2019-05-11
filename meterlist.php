<?php


    include "banner.php";
	include "<leftpanel.php";
	include "dbconnect.php";
?>

<div align=center>
 
     <?php
	 
	    $rs=mysql_query("select * from Meter");
		echo "<div style='height:50px;'></div>";
		echo "<table>";
		echo "<tr  style='background-color:darkblue;color:white;'> <td>Meter ID</td><td> Capacity </td><td>Unit</td></tr>"; 
		$rc=1;
		while($data=mysql_fetch_row($rs))
		{
			if($rc==1)
			{
				echo "<tr style='background-color:white;'><td>".$data[0]."</td><td>".$data[1]."</td><td>".$data[2]."</td></tr>";			
			    $rc=2;
			}
		else
			{
				echo "<tr style='background-color:lightblue;'><td>".$data[0]."</td><td>".$data[1]."</td><td>".$data[2]."</td></tr>";			
			    $rc=1;
			}
		
	}
	 
	 
	 ?>
	 
	 
</div>
	