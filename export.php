<html>
<head>
	<meta charset="utf-8">
<title>Export</title>
</head>
<body>
<?php 
$conn=mysql_connect("localhost","user","password");
$conn2=mysql_select_db("user",$conn);
 
 $sql = "SELECT * FROM Olympiady"; 
 $vystup = mysql_query($sql);  
 $f=fopen("data.xml","w");
 
 while($zaznam=mysql_fetch_array($vystup)):
 
	$vypis=
   "<zaznam>
   <id>$zaznam[ID]</id> 
	<sezon>$zaznam[typ_olymp]</sezon> 
   <mesto>$zaznam[porad_mesto]</mesto> 
   <zeme>$zaznam[zeme]</zeme> 
   <vyber>$zaznam[paral]</vyber> 
   <check>$zaznam[rok]</check> 
   </zaznam> 
	\n";
fwrite($f,$vypis);
endwhile;
fwrite($f,$vypis);
fclose($f);
mysql_close();
?>
<a href="data.xml">Data.xml</a> <br>
<a href="index.php"> Databaze</a>
</body>
</html>