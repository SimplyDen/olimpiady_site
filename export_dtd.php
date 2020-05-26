<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<title>Export</title>
</head>
<body>

<?php
 $hlavicka="<?xml version='1.0' encoding='utf-8'?".">\n
<!DOCTYPE note[
<!ELEMENT note (vykaz*)>
<!ELEMENT vykaz (id,sezon,mesto,zeme,vyber,check)>
<!ELEMENT id (#PCDATA)>
<!ELEMENT sezon (#PCDATA)>
<!ELEMENT mesto (#PCDATA)>
<!ELEMENT zeme (#PCDATA)>
<!ELEMENT vyber (#PCDATA)>
<!ELEMENT check (#PCDATA)>
]>
<note>\n";
$paticka="<note>\n";
$fp=fopen("data_dtd.xml", "w")
$conn=mysql_connect("localhost","user","password");
$conn2=mysql_select_db("user",$conn);
 
 $sql = "SELECT * FROM Olympiady"; 
 $vystup = mysql_query($sql);  
 $fp=fopen("data_dtd.xml","a");
 
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

fwrite($fp,$paticka);
fclose($fp);
mysql_close();
?>
<a href="data_dtd.xml">Data DTD</a> <br>
<a href="index.php"> Databaze</a>
</body>
</html>