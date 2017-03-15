<?php include_once("template_header.php");?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="pageContent">

<?php

$temp = "";

include "storescripts/connect_to_mysql.php"; 

$sql = mysql_query("SELECT * FROM products")or die ("cannot select tables");


$pic="";

while($row = mysql_fetch_array($sql))
{  
		
		echo $pic='<img style="border:#666 1px solid;" src="inventory_images/' . $row["id"] . '.jpg" alt="' . $row["product_name"] . '" width="77" height="102" border="1" />';
		
		
		 echo "<b> ID: </b>";
		 echo $row["id"];
		 echo "<b> name: </b> ";
		 echo $row["product_name"];
		 echo " <b>Price:</b> $";
		 echo $row["price"];
		 echo " <b>Details:</b> ";
		 echo $row["details"];
		 echo " <b>Category:</b> ";
		 echo $row["category"];
		 echo " <b>Date:</b> ";
		 echo strftime("%b %d, %Y", strtotime($row["date_added"]));
		 echo "<br>";
		 
		 
}

?>

</div>


<?php include_once("template_footer.php");?>
 
 

</body>
</html>