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
//echo("<META http-equiv='refresh' content='0;URL=../home.php'>");

?>
<link href='style/style.css' rel='stylesheet' type='text/css'>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ar">
<head>
    
    	<!-- ************************************************************************ !-->
		<!-- *****                                                              ***** !-->
		<!-- *****       ¤ Designed and Developed by  TLILI Ameni               ***** !-->
		<!-- *****                                                              ***** !-->
		<!-- *****                                                              ***** !-->
		<!-- ************************************************************************ !-->
    
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>خدّمني</title>
<link rel="shortcut icon" href="img/logo.ico">
</head>
<body onload="chargerClient()">
<header>
<table>
<tbody>
<tr>
<td class="lang">
<a href="pageHome.html"><img src="img/arab.jpg" alt="" width="30px" height="20px"></a>
<a href=""><img src="img/france.jpg" alt="" width="30px" height="20px"></a>
<a href=""><img src="img/en.jpg" alt="" width="30px" height="20px"></a>

</td>
<td class="logo"><a href="index.html"><img src="img/logo blanc.png" alt="" height="50px;"></a></td>
<td class="login">
	


</td>

</tr>

</tbody>
</table>
</header>
 <div class="container">
 <div class="left" style="width:70%;">

 <div>
	<div class="rech" >	
 		<h4>الولاية</h4>
 		<div class="clear"></div>
 		
 		 <div id="pays_tunisie" style="display:inline; "></div>
 	
 			
 		</div>
 		<div class="rech">	
 		<h4>المعتمدية</h4>
 		<div class="clear"></div>	
 		<select class="SelectInput" name="del" id="ariana" >
 			<option value="ariana">أريانة</option>
 			<option value="tadhamoun">حي التضامن</option>
 			<option value="andalous">قلعة الأندلس</option>
 			<option value ="sokra">سكرة</option>
 			<option value="mnihla">المنيهلة</option>
 			<option>رواد</option>
 			<option>سيدي ثابت</option>
 			</select>
 			<div id="gouv_tunisie" style="display:inline; "></div>
 			 
 			</div>
 			<div class="rech">
 			<h4>ابحث عن</h4>
 		<div class="clear"></div>	
 			<select class="SelectInput" name="type" id="travail"  >
      <option value="ChercheChomeur"> عمال</option>
 		<option value="chomeur">  عمل</option>
      </select></div>
      <div class="rech">
      <h4>نوع العمل</h4>
      <div id="joblog" style="display:inline; " ></div></div>

<div class="rech"><input  type="submit"  value='بحث' class="btnRech" onclick="recherche()"></div>
</div>

 
 </div>

 <div class="profil">
<table>
<tr>
<td>
<a class="tofProfil" href="">
<img src="img/mapstn.png" alt="" width="100%" width="100%">
</a>
</td>
<td>
 <table>
 <tr>
  <td>:الاسم</td>
  <td><?php echo($donnees['prenom']);?></td>
 </tr>
  <tr>
  <td>:اللقب</td>
  <td><?php echo($donnees['nom']);?></td>
 </tr>
  <tr>
  <td>:ر.ب.ت</td>
  <td id="idClient" ><?php echo($donnees['id']);?></td>
 </tr>
 <tr>
  <td>:الجنس</td>
  <td><?php echo($donnees['genre']);?></td>
 </tr>
 <tr>
  <td>:الهاتف</td>
  <td><?php echo($donnees['tel']);?></td>
 </tr>
 </table>

	</td>
</tr>


</table>
 <div><a href="<?php echo "modifProfil.php?idClient=".$donnees['id'].""?>"><input  type="submit"  value='تعديل' class="btnModif" ></a></div>		
 <div><a href=""><input  type="submit"  value='بحث عن سكن' class="btnModif"></a></div>		
 </div>
 <div id="acc">
 <table>
  	<tr>
<td>الاسم</td>
<td>اللقب</td>
<td>رقم الهاتف </td>

</tr>
 <?php 
 if($donnees['type']=="ChercheChomeur" ) { $typeR="chomeur" ;}
if($donnees['type']=="chomeur" ) { $typeR="ChercheChomeur" ;}
$gouvR=$donnees['gouv'];
$jobR=$donnees['job'];

$queryR="SELECT * FROM clients where type = '$typeR' and gouv = '$gouvR' and job='$jobR'";
$resultR = mysqli_query($link,$queryR) or die("Error in query");
 while($donneesR=mysqli_fetch_assoc($resultR))
 {
 	?>
 	<tr>
<td><?php echo $donneesR['nom']?></td>
<td><?php echo $donneesR['prenom']?></td>
<td><?php echo $donneesR['tel']?></td>

</tr>
   
 <?php } ?>
 </table>
 </div>
 <div id="resultatRecherche">
  <div id="acc1"></div>
 </div>

 </div>



</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" >
function getXhr(){           
  var xhr = null; 	    
  if(window.XMLHttpRequest) // Firefox et autres		
   xhr = new XMLHttpRequest(); 	
  else if(window.ActiveXObject){ // Internet Explorer 	
   try {	 
    xhr = new ActiveXObject("Msxml2.XMLHTTP");	} 
  catch (e) {	 xhr = new ActiveXObject("Microsoft.XMLHTTP");  }}	
else { 
  // XMLHttpRequest non supporté par le navigateur 
alert("Le navigateur ne supporte pas les objets XMLHTTPRequest..."); 
xhr = false; 	}      
return xhr;
}
 function chargerClient(){

 
 
    var xhr1=getXhr();
 
  xhr1.open("GET","php/pays.php",true);
  xhr1.onreadystatechange=function(){
   if((xhr1.readyState==4)&&(xhr1.status==200)){
    var rep=xhr1.responseText;
	document.getElementById("pays_tunisie").innerHTML=rep;
   }
  }
  var xhr2=getXhr();
   xhr2.open("GET","php/job.php",true);
  xhr2.onreadystatechange=function(){
   if((xhr2.readyState==4)&&(xhr2.status==200)){
    var reponse2=xhr2.responseText;
	document.getElementById("joblog").innerHTML=reponse2;
   }
  }
  xhr1.send(null); 
  xhr2.send(null); 
  

 }
 function chargerGouv(idP){
 document.getElementById('ariana').style.display = "none";	
  var xhr=getXhr();
  xhr.open("GET","php/gouv.php?idP="+idP,true);
  xhr.onreadystatechange=function(){
   if((xhr.readyState==4)&&(xhr.status==200)){
    var reponse=xhr.responseText;
	document.getElementById("gouv_tunisie").innerHTML=reponse;
   }
  }
  xhr.send(null);
 }
 function recherche() {
 	document.getElementById('acc').style.display = "none";
 	document.getElementById('acc1').style.display = "none";
 	var gouvCh = document.getElementById("gouver").value;
 	var typeCh = document.getElementById("travail").value;
 	var jobCh = document.getElementById("jobUser").value;
 var xhr5=getXhr();
   xhr5.open("GET","php/recherche.php?gouvCh="+gouvCh+"&typeCh="+typeCh+"&jobCh="+jobCh,true);
  xhr5.onreadystatechange=function(){
   if((xhr5.readyState==4)&&(xhr5.status==200)){
    var reponse5=xhr5.responseText;
	document.getElementById("resultatRecherche").innerHTML=reponse5;
   }
  }
  xhr5.send(null); 	
 }

 
</script>


<?php
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
