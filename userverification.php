<?php
   
   include "dbconnect.php";
   $UserID=$_POST['UserID'];
   $Password=$_POST['Password'];
   
   $sql="select * from user where Userid='".$UserID."' and Password='".$Password."'";
  // echo $sql;
   $rs=mysql_query($sql);
   
   if($data=mysql_fetch_row($rs))
   {
	  include "main.php";
   }
  else
  {
	include "error01.php"; 
	  
  }	  

?>
