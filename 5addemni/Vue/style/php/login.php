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


if($row != 0)
{


echo("welcome");
}


else
{
	
echo("vous n'etes pas inscris");
}
}
mysqli_close($link);
?>