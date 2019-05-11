<?php
    include "banner.php";
	include "<leftpanel.php";
?>

<div align=center>
 <div style="height:100px;"></div>
   <form action=addmeter1.php method=POST>
   <table style="background-color:lightblue;padding:10px;border-radius:20px;">
      <tr><td>Meter ID</td><td><input type=text name=MID></td></tr>
	  <tr><td>Capacity</td><td>
	                           <select name=Capacity>
							       <option value='1 KV'> 1 KV </option>
							       <option value='2 KV'> 2 KV </option>
							       <option value='3 KV'> 3 KV </option>
							       <option value='4 KV'> 4 KV </option>
							       <option value='5 KV'> 5 KV </option>
								   
							   </select>
							   
						   </td></tr>
	  <tr><td>Unit</td><td><input type=number name=UNIT></td></tr>
		
	<tr><td></td><td align=right><input type=reset value=Clear></input><input type=submit value=Submit></input></td></tr>
            	  
   </table>
  </form> 


</div>
	