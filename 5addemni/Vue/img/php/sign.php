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
$jour = $_POST['jour'];
$mois = $_POST['mois'];
$annee = $_POST['annee'];
$genre = $_POST['genre'];
$type = $_POST['type'];
$metier = $_POST['metier'];



$query = "INSERT INTO `clients`(`id`, `pw`, `nom`, `prenom`, `tel`, `pays`, `gouv`, `genre`, `dateJour`, `dateMois`, `dateAnne`, `type`, `job`) VALUES ('".$id."', '".$pw."', '".$nom."', '".$prenom."', '".$tel."', '".$pay."', '".$gouv."', '".$genre."', '".$jour."', '".$mois."', '".$annee."', '".$type."', '".$metier."')";




$result = mysqli_query($link,$query) or die("Error in query");
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  
  echo "<META http-equiv='refresh' content='0;URL=../index.html'>";
  
?>