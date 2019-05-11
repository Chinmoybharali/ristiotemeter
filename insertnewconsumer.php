<?php
   include "dbconnect.php";
   
   $CID=$_POST['CID'];
   $CName=$_POST['CName'];
   $Address=$_POST['Address'];
   $ContactNo=$_POST['ContactNo'];
   $Email=$_POST['Email'];
   $CType=$_POST['CType'];
   $MID=$_POST['MID'];
   
   $sql="insert into Consumer(CID,CName,Address,ContactNo,EMail,CType,MID) values('".$CID."','".$CName."','".$Address."','".$ContactNo."','".$Email."','".$CType."','".$MID."')";
   //echo $sql;
   mysql_query($sql);
   include "addnewconsumer.php";
?> 