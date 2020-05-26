<!DOCTYPE html>
<html>
<head>
	<title>export XSD</title>
	<meta charset="utf-8">
</head>
<body>
<?php
$hlavicka="<?xml version='1.0' encoding='windows-1250'?".">
<xsi:schemaLocation='schema.xsd'>\n";
$fp=fopen("data_dtd.xml","w");
fwrite($fp, string);
fclose($fp);

$conn=mysql_connect("localhost","user","password");
$conn2=mysql_select_db("user",$conn);
$sql = "SELECT * FROM Olympiady"; 
$vystup = mysql_query($sql);  
$fp=fopen("data_xsd.xml", "a");
while($zaznam=mysql_fetch_array($vystup)):
 
	$vypis=
   "<zaznam ID=\"$zaznam[ID]\">
   <id>$zaznam[ID]</id> 
	<sezon>$zaznam[typ_olymp]</sezon> 
   <mesto>$zaznam[porad_mesto]</mesto> 
   <zeme>$zaznam[zeme]</zeme> 
   <vyber>$zaznam[paral]</vyber> 
   <check>$zaznam[rok]</check> 
   </zaznam> 
	\n";
fwrite($fp,$vypis);
endwhile;

fwrite($fp);
fclose($fp);
mysql_close();
?>
<a href="data_dtd.xml">Data DTD</a> <br>
<a href="index.php"> Databaze</a>
?>
</body>
</html>