<?php
    $username = "149680"; 
    $password = "AMENI"; 
    $host = "mysql-amenitlili.alwaysdata.net"; 
    $dbname = "amenitlili_clients"; 
    $link = mysqli_connect($host, $username, $password , $dbname)
    or die("Impossible de se connecter : " . mysqli_error());
echo 'Connexion réussie';

$sql=mysqli_query($link,"INSERT INTO clients VALUES ($id ,$pw ,$nom , $email ,$tel ,$adr )");
while($row=mysqli_fetch_assoc($sql)) {
$output[]=$row;}
mysqli_free_result($sql);
print(json_encode($output));
mysqli_close($link);
?>