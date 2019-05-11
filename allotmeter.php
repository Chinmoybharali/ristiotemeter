<?php
    include "banner.php";
	include "<leftpanel.php";
?>

<div align=center>
 <div style="height:100px;"></div>
   <form action=allotmeter1.php method=POST>
   <table style="background-color:lightblue;padding:10px;border-radius:20px;">
      <tr><td>Consumer ID</td><td><input type=text name=CID></td></tr>
	  <tr><td>Meter ID</td><td><input type=text name=MID></td></tr>
	  <tr><td></td><td align=right><input type=reset value=Clear></input><input type=submit value=Allot></input></td></tr>
            	  
   </table>
  </form> 


</div>
	