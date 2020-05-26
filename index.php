<html>
<head>
	<meta charset="utf-8">
	<title>Olympiady</title>
    <style>
     table{
			background-color: white;
			margin: auto;
   		width: 60%;
		}
    h1{
				width: 50%;
				margin: auto;
				text-align: center;
		}
    </style>
</head>
<body>
<h1>Olympiady</h1>
<table border="1">
 <tr  align="center">

    <td>ID</td>
    <td>Typ olympijské hry</td>
    <td>Rok</td>
    <td>porad mesto</td>
    <td>Zeme</td>
    <td>paralympijske hry</td>
    <td>21 stoleti</td>
</tr>
<?php
$conn=mysql_connect("localhost","user","password");
$conn2=mysql_select_db("user",$conn);

$sql = "SELECT * FROM Olympiady"; 
$vystup = mysql_query($sql);                                        
while ($zaznam = mysql_fetch_array($vystup)):

?>
 
<td> <?php echo $zaznam[ID] ;?></td>
<td> <?php echo $zaznam[typ_olymp] ;?></td>
<td> <?php echo $zaznam[rok] ;?></td>
<td> <?php echo $zaznam[porad_mesto] ;?></td>
<td> <?php echo $zaznam[zeme] ;?></td>
<td> <?php echo $zaznam[paral] ;?></td>
<td> <?php echo $zaznam[stol] ;?></td>



<td><a href="update.php?ID=<?php echo $zaznam[‘ID’]?>">upravit</a></td>
<td><a href="delete.php?ID=<?php echo $zaznam[‘ID’]?>">smazat</a></td>

 
</tr>  
    
<?php
endwhile;
?>

</table>
?>
<a href="form.htm">Pridat novou olympiadu</a>
<a href="export.php"> Export tabulky</a>
<a href="export_dtd.php"> Export DTD</a>
	
</body>
</html>