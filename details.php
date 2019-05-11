<?php


    include "banner.php";
	include "leftpanel.php";
	include "dbconnect.php";
?>

<div align=center>
 
    <?php
	
	    $CID=$_GET['CID'];
		
		$rs=mysql_query("select * from consumer where CID='".$CID."'");
		if($data=mysql_fetch_row($rs))
		{
			
		    echo "<div style='height:10px;'></div>";
			echo "<table>";
			echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Consumer ID</td><td style='background-color:cyan;width:200px;border-radius:10px;'>".$data[0]."</td></tr>";
		    echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Consumer Name</td><td style='background-color:cyan;width:200px;border-radius:10px;'>".$data[1]."</td></tr>";
			echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Unit</td><td style='background-color:cyan;width:100px;border-radius:10px;'>".$data[8]."</td></tr>";
			echo "</table>";
			
	
           	$rs=mysql_query("select Dated,TimeStamp,Unit from datalog where CID='".$CID."'");
		    echo "<table>";
			echo "<tr style='background-color:darkblue;color:white;'><td>Date</td><td>Time Stamp </td><td> Unit </td></tr>";
			
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
			
		  echo "</table>";
			
	   }
	    else
		{
			echo "<div style='height:200px;'></div>";
			echo "<div style='width:300px;background-color:lightblue;color:red;'>Sorry!! Invalid Consumer ID</div>";
		}	
	
	?>
	
	 
	 
</div>
	