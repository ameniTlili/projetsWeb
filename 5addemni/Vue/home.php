<link href='style/pageHome.css' rel='stylesheet' type='text/css'>
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
<td class="logo"><img src="img/logo blanc.png" alt="" height="100px;"></td>
<td class="login">
	
 		<h4>nom: <?php echo($donnees['nom']);?> </h4>
		<h4>prenom: <?php echo($donnees['prenom']);?> </h4>


</td>

</tr>

</tbody>
</table>
</header>
 <div class="container">
 <div class="lest">
<form>
 <div>
	<div class="rech" >	
 		<h4>الولاية</h4>
 		<div class="clear"></div>
 		
 		 <div id="pays_tunisie" style="display:inline; width: 100%;"></div>
 	
 			
 		</div>
 		<div class="rech">	
 		<h4>المعتمدية</h4>
 		<div class="clear"></div>	
 		<select class="input" name="del" id="ariana" >
 			<option value="ariana">أريانة</option>
 			<option value="tadhamoun">حي التضامن</option>
 			<option value="andalous">قلعة الأندلس</option>
 			<option value ="sokra">سكرة</option>
 			<option value="mnihla">المنيهلة</option>
 			<option>رواد</option>
 			<option>سيدي ثابت</option>
 			</select>
 			<div id="gouv_tunisie" style="display:inline; width: 100%;"></div>
 			 
 			</div>
 			<div class="rech">
 			<h4>ابحث عن</h4>
 		<div class="clear"></div>	
 			<select class="input" name="type" id="travail" style="width: 100%;" >
      <option value="ChercheChomeur"> عمال</option>
 		<option value="chomeur">  عمل</option>
      </select></div>
      <div class="rech">
      <h4>نوع العمل</h4>
      <div id="job" style="display:inline; width: 100%;" ></div></div>

<div class="rech"><input  type="submit"  value='بحث' class="btnRech" onchange="recherche();"></div>
</div>
</form>
 
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
	document.getElementById("job").innerHTML=reponse2;
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
 
</script>
