<?php
    $username = "149680"; 
    $password = "AMENI"; 
    $host = "mysql-amenitlili.alwaysdata.net"; 
    $dbname = "amenitlili_clients"; 
    $link = mysqli_connect($host, $username, $password , $dbname)
    or die("Impossible de se connecter : " . mysqli_error());

$prenom = $_POST['prenom'];

$nom = $_POST['nom'];

$id = $_POST['id'];
$tel = $_POST['tel'];

$pw = $_POST['pw'];
$pays = $_POST['pays'];
$query ="SELECT ar FROM pays where id=$pays";
$reponse = mysqli_query($link,$query) or die("Error in query");
$donnees =  mysqli_fetch_array($reponse);
$pay=$donnees['ar'];
$gouv = $_POST['gouv'];
$query ="SELECT ar FROM gouv where id=$gouv";
$reponse = mysqli_query($link,$query) or die("Error in query");
$donnees =  mysqli_fetch_array($reponse);
$gouv=$donnees['ar'];
$jour = $_POST['jour'];
$mois = $_POST['mois'];
$annee = $_POST['annee'];
$genre = $_POST['genre'];
$type = $_POST['type'];
$metier = $_POST['job'];



$query ="UPDATE `clients` SET  `pw` = '".$pw."', `nom` = '".$nom."', `prenom` = '".$prenom."', `tel` = '".$tel."', `pays` = '".$pay."', `gouv` = '".$gouv."', `genre` = '".$genre."', `dateJour` = '".$jour."', `dateMois` = '".$mois."', `dateAnne` = '".$annee."', `type` = '".$type."', `job` = '".$metier."' WHERE `clients`.`id` = '".$id."'";

$result = mysqli_query($link,$query) or die("Error in query");
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
  	$message='modification a été correctement effectuée';
 
echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
   ;
  }
  else
  {
      	$message='modifocation a été correctement effectuée';
 
echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
 
  }
  
  echo "<META http-equiv='refresh' content='0;URL=../index.html'>";
  
?>