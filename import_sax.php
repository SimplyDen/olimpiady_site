<?php
	$conn=mysql_connect("localhost","user","password");
	$conn2=mysql_select_db("user",$conn);
 	$sql="CREATE TABLE IF NOT EXISTS Olympiady('ID',int NOT NULL AUTO_INCREMENT,'typ_olymp',
 	'porad_mesto','zeme','rok','vyber','paral',PRIMARY KEY(ID)";
 	if (!mysql_query($sql)) echo mysql_errno($conn);
 	
?>