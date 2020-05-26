<html> 
<head>
	<meta charset="UTF-8">
	<title>Nádraží­</title>
		
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
<h3>Úprava záznamu</h3>

 ID: <?php echo $_GET["ID"]; ?><br>
 
Typ olympiady: <?php echo $_GET["sezon"]; ?><br>

Rok: <?php echo $_GET["rok"]; ?><br>
 
Porad mesto: <?php echo $_GET["mesto"]; ?><br>

Zeme: <?php echo $_GET["zeme"]; ?><br>

Paral hry: <?php echo $_GET["vyber"]; ?><br>

21 Stoleti :  

<?php echo $_GET['check']; ?>

<?php
$id=$_GET["ID"];
$typ_olymp=$_GET["sezon"]; 
 $rok=$_GET["rok"];
 $porad_mesto=$_GET["mesto"];
 $zeme=$_GET["zeme"]; 
 $paral=$_GET["vyber"];
 $stol=$_GET["check"];
if (isset($_GET["check"])){
 echo "Ano";
 }else{
 echo "Ne";
 } 
echo '<br/>';

$conn=mysql_connect("localhost","user","password");
$conn2=mysql_select_db("user",$conn);

if ($conn) {
echo "Server připojen";
}
else { echo "Server nepřipojen"; 
}

echo '<br/>';
if ($conn2) {
echo "Databáze připojena";
}
else { echo "Databáze nepřipojena"; 
}
echo '<br/>';

$sql= "UPDATE Olympiady SET rok='$rok', porad_mesto='$porad_mesto',
zeme ='$zeme ', paral='$paral', 
   stol='$stol' WHERE ID='$id'";
   
$pom=mysql_query($sql);  

if($pom)    {
echo "Záznam byl úspěšně upraven!";
} else {
echo "Chyba";
echo mysql_error(); 
}

mysql_close($conn);

?>
<br/>
<a href="index.php">[Pokračovat]</a>
</body>
</html>