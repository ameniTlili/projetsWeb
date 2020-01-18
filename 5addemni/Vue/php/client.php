<?php
 $idC=$_GET['idClient'];

  $username = "149680"; 
    $password = "AMENI"; 
    $host = "mysql-amenitlili.alwaysdata.net"; 
    $dbname = "amenitlili_clients"; 
    $link = mysqli_connect($host, $username, $password , $dbname)
    or die("Impossible de se connecter : " . mysqli_error());
   
$query ="SELECT * FROM clients where id=$idC";

$reponse = mysqli_query($link,$query) or die("Error in query"); 
$donnees=mysqli_fetch_assoc($reponse);
 
?>
<h4>nom: <?php echo($donnees['nom']);?> </h4>
<h4>prenom: <?php echo($donnees['prenom']);?> </h4>

