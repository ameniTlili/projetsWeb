<?php
   $username = "149680"; 
    $password = "AMENI"; 
    $host = "mysql-amenitlili.alwaysdata.net"; 
    $dbname = "amenitlili_clients"; 
    $link = mysqli_connect($host, $username, $password , $dbname)
    or die("Impossible de se connecter : " . mysqli_error());
    


$query ="SELECT * FROM job";
$reponse = mysqli_query($link,$query) or die("Error in query");
?>
<select  style="width: 100%;" name="job" >
<?php
while ($donnees =  mysqli_fetch_array($reponse))
{
?>
<option value="<?php echo $donnees['ar'] ?>" id="<?php echo($donnees['id'])?>"><?php echo $donnees['ar'] ?>    </option>  <?php
   }

    mysqli_close($link);
?>
<select> 