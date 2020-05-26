<html> 
<head>
	<meta charset="utf-8">
	<title>Smazat Data</title>
		
<style>
		body{
			background-color: lightblue;
		}
		
		h1{
				width: 50%;
				margin: auto;
		}
		
		
</style>
</head>
<body>


 
<?php

$id=$_GET["ID"];

?>
 
<?php
$conn=mysql_connect("localhost","user","password");
$conn2=mysql_select_db("user",$conn);
$sql = ("DELETE FROM Olympiady WHERE ID=$id");
mysql_query($sql);

 mysql_close($conn);

 
if($sql)
{
echo "<br>Data byla smazána.<br><br>";
}
else
{
echo "<br>Chyba pøi mazání dat.<br><br>";
echo $ID;



}


 ?>
<a href="index.php">[Pokraèovat]</a>




	</body>
</html>