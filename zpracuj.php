<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8">
 <title>Olympiady</title>
 <style>
 body{
 background-color: yellow;
 }
 h2{
 position: relative;
 left:600px;
 
 }
 table{
 position: relative;
 left: 500px;
 border: 2px double black;
 background-color:white;
 }
 </style>
</head>
<body> 
 <?php 
 $typ_olymp=$_GET["sezon"]; 
 $rok=$_GET["rok"];
 $porad_mesto=$_GET["mesto"];
 $zeme=$_GET["zeme"]; 
 $paral=$_GET["vyber"];
 $stol=$_GET[‘check’];
 if(isset ($_GET[“check”])){$stol=“Ano”;} else {$stol=“Ne”;}
 
$conn=mysql_connect("localhost","user","password");
$conn2=mysql_select_db("user",$conn);
 if ($conn) {
 echo "Server připojen";
 }
 else { echo "Server nepřipojen"; 
 }

 $sql="INSERT INTO Olympiady(ID,typ_olymp,rok,porad_mesto,zeme,paral,stol)
 VALUES(NULL, '$typ_olymp','$rok','$porad_mesto','$zeme','$paral','$stol')";
 $pom=mysql_query($sql);
 if($pom){
 echo"Zaznam byl uspesne vytvoren";
 } else{
 echo"Chyba ";
 echo mysql_error($conn);
 } 
mysql_close();
 ?>
 <h2>Odpoved</h2>
 <table>
 <tr><td>Typ olympijcke hry: <?php echo $_GET["sezon"]; ?> 
</td></tr>
 <tr><td>V roce: <?php echo $_GET["rok"]; ?> 
</td></tr>
 <tr><td>Pořadatelské město: <?php echo $_GET["mesto"]; ?> 
</td></tr>
 <tr><td>Země: <?php echo $_GET["zeme"]; ?> 
</td></tr>
 <tr><td>Paralympijské hry: <?php echo $_GET["vyber"]; ?> 
</td></tr>
 <tr><td>Olympiada 21 stoleti: 
 <?php if (isset($_GET[‘check’])){
 echo "Ano";
 }else{
 echo "Ne";
 } ?>
 
</td></tr>
 </table>
<a href="index.php">Prijit do seznamu olympiad</a>
</body>
</html>