<?php
 $idP=$_GET['idP'];

  $username = "149680"; 
    $password = "AMENI"; 
    $host = "mysql-amenitlili.alwaysdata.net"; 
    $dbname = "amenitlili_clients"; 
    $link = mysqli_connect($host, $username, $password , $dbname)
    or die("Impossible de se connecter : " . mysqli_error());
   
$query ="SELECT * FROM gouv where idPays =$idP";

$reponse = mysqli_query($link,$query) or die("Error in query"); 
?>
<select  class="SelectInput" name="gouv" id="gouver">
 <?php 
 while($donnees=mysqli_fetch_assoc($reponse))
 {
 	?>
   <option value="<?php echo($donnees['id'])?>" id="<?php echo($donnees['id'])?>"><?php echo($donnees['ar'])?></option>
 <?php } ?>
</select>
