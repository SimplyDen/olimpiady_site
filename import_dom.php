<!DOCTYPE html>
<html>
<head>
	<title>Import DOM</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$conn=mysql_connect("localhost","user","password");
$conn2=mysql_select_db("user",$conn);
 	$sql="CREATE TABLE IF NOT EXISTS Olympiady('ID',int NOT NULL AUTO_INCREMENT,'typ_olymp',
 	'porad_mesto','zeme','rok','vyber','paral',PRIMARY KEY(ID)";
	if (!mysql_query($sql)) echo mysql_errno($conn);

	$dom = new DOMDocument();
	$dom->load('data.xml');

	$id = $dom->getElementsByTagName("id");
	$rok = $dom->getElementsByTagName("rok");
	$sezon = $dom->getElementsByTagName("sezon");
	$mesto = $dom->getElementsByTagName("mesto");
	$zeme = $dom->getElementsByTagName("zeme");
	$vyber = $dom->getElementsByTagName("vyber");
	$check = $dom->getElementsByTagName("check");

	for($i=0;$i<=$id->length-1;$i++) {
	$1id = $id->item($i)->nodeValue;
	$1rok = $rok->item($i)->nodeValue;
	$1sezon = $sezon->item($i)->nodeValue;
	$1mesto = $mesto->item($i)->nodeValue;
	$1zeme = $zeme->item($i)->nodeValue;
	$1vyber = $vyber->item($i)->nodeValue;
	$1check = $check->item($i)->nodeValue;

	$prikaz="INSERT INTO `e16063`.`Olympiady` (`ID`,`Sezon`,`Mesto`,`Zeme`,`Rok`,`paral olymp','21 stoleti')
	VALUES ('$1id','$1sezon','$1mesto','$1rok','$1vyber','$1check')";
	if (mysql_query($prikaz)) echo "<br><font color='limegreen'>Vloženi pobehla v pořadku</font>"; else echo mysql_errno($spojeni);
}
mysql_close();
?>
</body>
</html>