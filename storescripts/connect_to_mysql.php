<?php  

// Run the actual connection here  
mysql_connect("localhost","root","") or die ("could not connect to mysql");
mysql_select_db("mystore") or die ("no database");              
?>