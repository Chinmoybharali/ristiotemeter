<?php
    include "banner.php";
	include "<leftpanel.php";
?>

<div align=center>
 <div style="height:100px;"></div>
   <form action=insertnewconsumer.php method=POST>
   <table style="background-color:lightblue;padding:10px;border-radius:20px;">
      <tr><td>Consumer ID</td><td><input type=text name=CID></td></tr>
	  <tr><td>Consumer Name</td><td><input type=text name=CName></td></tr>
      <tr><td>Address</td><td><textarea name=Address style="height:100px;width:200px;"></textarea> </td></tr>
	  <tr><td>Contact Number</td><td><input type=text name=ContactNo></td></tr>
	  <tr><td>Email</td><td><input type=email name=Email></td></tr>
	  <tr><td>Consumer Type</td><td><select name=CType>
	                                  <option value=Domestic>Domestic</option>
									  <option value=Commercialo>Commercial</option>
									 </select></td></tr>
      <tr><td>Meter ID</td><td><input type=text name=MID></td></tr>
	  <tr><td></td><td align=right><input type=reset value=Clear></input><input type=submit value=Submit></input></td></tr>
            	  
   </table>
  </form> 


</div>
	