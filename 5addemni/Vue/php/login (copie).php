<?php

  $username = "149680"; 
    $password = "AMENI"; 
    $host = "mysql-amenitlili.alwaysdata.net"; 
    $dbname = "amenitlili_clients"; 
    $link = mysqli_connect($host, $username, $password , $dbname)
    or die("Impossible de se connecter : " . mysqli_error());

if(isset($_POST['id']))
{

$eid = $_POST['id'];

$pass = $_POST['pw'];

$query = "SELECT * FROM clients where id = '$eid' and pw = '$pass'";

$result = mysqli_query($link,$query) or die("Error in query");

$row = mysqli_num_rows($result);
$donnees =  mysqli_fetch_array($result);

if($row != 0)
{
/*
echo($eid);
echo($donnees['prenom']);
echo($donnees['nom']);*/
/*?>
<h4>nom: <?php echo($donnees['nom']);?> </h4>
<h4>prenom: <?php echo($donnees['prenom']);?> </h4><?php*/
echo("<META http-equiv='refresh' content='0;URL=../home.php'>");
}


else
{
$message='Verifier votre id ou pw';
 
echo '<script type="text/javascript">window.alert("'.$message.'");</script>';	
echo("<META http-equiv='refresh' content='0;URL=../index.html'>");
}
}
mysqli_close($link);

?>
