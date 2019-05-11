<html>
  <head>
       <meta http-equiv="refresh" content="1">
  </head>
  
  <div align=center style="background-color:darkblue;color:lightblue;height:100px;">
  <h1> IoT Based Energy Meter </h1>
  Developed by Chinmoy Bharali, Pari Chetia and Kuhima Begum @ RIST # ECE # 2019
   
  
</div>

 </html> 
<?php


 
	include "leftpanel.php";
	include "dbconnect.php";
?>

<div align=center>
 
    <?php
	
	    session_start();
			    
		$CID=$_POST['CID'];
		if($CID=="")
		{
			$CID=$_SESSION['CID'];
		}
		else
		{
		  $_SESSION['CID']=$CID;	
		}	
		
		$rs=mysql_query("select * from consumer where CID='".$CID."'");
		if($data=mysql_fetch_row($rs))
		{
			
		    echo "<div style='height:10px;'></div>";
			echo "<table>";
			echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Consumer ID</td><td style='background-color:cyan;width:200px;border-radius:10px;'>".$data[0]."</td></tr>";
		    echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Consumer Name</td><td style='background-color:cyan;width:200px;border-radius:10px;'>".$data[1]."</td></tr>";
			echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Address</td><td style='background-color:cyan;width:100px;border-radius:10px;'>".$data[2]."</td></tr>";
			echo "<tr><td style='background-color:lightblue;width:200px;border-radius:10px;'>Contact No</td><td style='background-color:cyan;width:100px;border-radius:10px;'>".$data[3]."</td></tr>";
			
			echo "</table>";
			
	         $sql="select Dated,TimeStamp,Unit from datalog where SLID=(select max(slid) from datalog where CID='".$CID."')";

           	$rs=mysql_query($sql);
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
	