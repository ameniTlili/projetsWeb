<?php
   $username = "149680"; 
    $password = "AMENI"; 
    $host = "mysql-amenitlili.alwaysdata.net"; 
    $dbname = "amenitlili_clients"; 
    $link = mysqli_connect($host, $username, $password , $dbname)
    or die("Impossible de se connecter : " . mysqli_error());
     $jobCh=$_GET['jobCh'];
     $typeCh=$_GET['typeCh'];
     $gouvCh=$_GET['gouvCh'];
     if($typeCh=="ChercheChomeur" ) { $typeRCH="chomeur" ;}
   if($typeCh=="chomeur" ) { $typeRCH="ChercheChomeur" ;}
$queryG ="SELECT * FROM gouv where id=$gouvCh";
$reponseG = mysqli_query($link,$queryG) or die("Error in query1");
$donneesG =  mysqli_fetch_array($reponseG);
$gouvC=$donneesG['ar'];

$query ="SELECT * FROM clients where gouv='$gouvC' and type='$typeRCH' and job='$jobCh'";
$reponse = mysqli_query($link,$query) or die("Error in query2");

?>
<div id="acc1" style="display:inline; ">
<table>
  	<tr>
<td>الاسم</td>
<td>اللقب</td>
<td>رقم الهاتف </td>

</tr>

<?php
while ($donnees =  mysqli_fetch_assoc($reponse))
{
?>
<tr>
<td><?php echo $donnees['nom']?></td>
<td><?php echo $donnees['prenom']?></td>
<td><?php echo $donnees['tel']?></td>


<?php
   }

    mysqli_close($link);
?>
</tr>
</table></div>
