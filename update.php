<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Olympiady</title>
	<style>
	body{
		background-color: orange;
	}
	table{
		border: 4px double black;
		border-spacing: 7px 11px;
		background-color: white;
		position: relative;
		text-align: left;
		left: 500px;
		
		}
	h2{
		position: relative;
		left:600px;
		}
	td{
		padding: 5px;
	}
		input:required {
		box-shadow:none;
		}
		input:invalid {
		box-shadow:0 0 3px red;
		}
		
	}
	</style>
</head>
<body>
	<?php

$id=$_GET["ID"];

 ?>
 <h1>Úprava</h1>
 <?php
$conn=mysql_connect("localhost","user","password");
$conn2=mysql_select_db("user",$conn);
$sql = "SELECT * FROM Olympiady WHERE ID=$id";
$vystup = mysql_query($sql);
$zaznam = mysql_fetch_array($vystup);
 ?>
	<h2>Olympiady</h2>
<form action="update_save.php" method="get" name="form">
	<table>
	<tr> <td> ID: </td> <td> <input type="hidden"  size=16 name="ID" value="<?php echo $id ;?>" > </td>  </tr>
	<tr><td>Typ olympijcke hry</td>
		<td>
		<select name="sezon" required value="<?php echo $zaznam['typ_olymp'] ;?>">
			<option value="Letni">Letni
			<option value="Zimni">Zimni
		</td>
		</select>
	</tr>
	<tr><td>Rok</td>
		<td><input type="text" name="rok" required value="<?php echo $zaznam['rok'] ;?>"></td>
	<tr><td>Pořadatelské město</td>
		<td><input type="text" name="mesto" required  value="<?php echo $zaznam['mesto'] ;?>"></td>
	</tr>
	<tr><td>Země</td>
		<td><input type="text" name="zeme" required value="<?php echo $zaznam['zeme'] ;?>"></td>
	<tr><td>Paralympijské hry ?</td>
		<td>
		<input type="radio" name="vyber" value="Ano" required value="<?php echo $zaznam['paral'] ;?>">Ano
		<input type="radio" name="vyber" value="Ne"  required value="<?php echo $zaznam['paral'] ;?>" >Ne
		</td>
		</tr>
	<tr><td>Olympiada 21 stoleti</td>
		<td><input type="checkbox" name="check" required value="<?php echo $zaznam['stol'] ;?>">	</td>
	</tr>
	<tr>
		<td><input type="submit" value="Odeslat">
			<input type="reset" value="Smazat">
	</tr>
	</table>

</body>
</html>