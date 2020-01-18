<?php
 $id=$_GET['id'];

  $username = "149680"; 
    $password = "AMENI"; 
    $host = "mysql-amenitlili.alwaysdata.net"; 
    $dbname = "amenitlili_clients"; 
    $link = mysqli_connect($host, $username, $password , $dbname)
    or die("Impossible de se connecter : " . mysqli_error());
   
$query ="SELECT * FROM clients where id=$id";

$reponse = mysqli_query($link,$query) or die("Error in query"); 
$donnees=mysqli_fetch_assoc($reponse)
?>
<h2>User : <?php echo($donnees['nom']);
echo($donnees['prenom'])?></h2>
<h2>CIN : <?php echo($donnees['id']);?></h2>

