<?php
$idClient=$_GET["idClient"];
  $username = "149680"; 
    $password = "AMENI"; 
    $host = "mysql-amenitlili.alwaysdata.net"; 
    $dbname = "amenitlili_clients"; 
    $link = mysqli_connect($host, $username, $password , $dbname)
    or die("Impossible de se connecter : " . mysqli_error());



$query = "SELECT * FROM clients where id = '$idClient' ";

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
<body onload="chargerPays()">
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
<td class="login"></td>

</tr>

</tbody>
</table>
</header>
 <div class="container" style="width: 80%">
 <table>
<tbody>
<tr>
<td class="desc" style="width: 40%;">
<img src="img/mapstn.png" alt="" height="500px">
</td>
<td class="inscri">
<h1>تعديل الحساب </h1>
<div class="clear"></div>
<h4>مجاني، وسيبقى مجاني دائمًا   </h4>
<div class="clear" style="height: 20px"></div>
 
 		<form action="php/modif.php" method="post">
	
		 <input class="input" type="text"  onfocus="if(this.value == 'الاسم ') { this.value = ''; }" 
                      							onblur="if(this.value == '') { this.value = 'الاسم '; }"
 														value="الاسم " name='prenom'>
 		 <input class="input" type="text"  onfocus="if(this.value == 'اللقب') { this.value = ''; }" 
                      							onblur="if(this.value == '') { this.value = 'اللقب'; }"
 														value="اللقب" name='nom'>
 			<div class="clear"></div>
 	
 		 <input class="input" type="text" value= "<?php echo "".$idClient."" ?>" name='id' readonly> 
 														
 		<input class="input" type="text"  onfocus="if(this.value == 'رقم الهاتف') { this.value = ''; }" 
                      							onblur="if(this.value == '') { this.value = 'رقم الهاتف'; }"
 														value="رقم الهاتف" name='tel'>	
 														
 		<input class="input" type="text"  style="width: 92%;" onfocus="if(this.value == 'كلمة السر ') { this.value = ''; }" 
                      							onblur="if(this.value == '') { this.value = 'كلمة السر '; }"
 														value="كلمة السر " name='pw'>											
 															
 		<div class="clear"></div>
 		<div class="pays" >	
 		<h4>الولاية</h4><div class="clear"></div>
 		<div class="clear"></div>
 		
 		 <div id="pays_tunisie" style="display:inline; width: 100%;"></div>
 	
 			
 		</div>
 			
 			<div class="pays">	
 		<h4>المعتمدية</h4><div class="clear"></div>
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
 		<div class="clear" style="height: 10px;"></div>
 		<h4>تاريخ الميلاد</h4><div class="clear"></div>
 		<div class="date">	
 			<select class="input" name="jour" id="jours" >
 			<option value="1"> 1</option>
 			<option value="2"> 2</option>
 			<option value="3"> 3</option>
 			<option value="4"> 4</option>
 			<option value="5"> 5</option>
 			<option value="6"> 6</option>
 			<option value="7"> 7</option>
 			<option value="8"> 8</option>
 			<option value="9"> 9</option>
 			<option value="10"> 10</option>
 			<option value="11"> 11</option>
 			<option value="12"> 12</option>
 			<option value="13"> 13</option>
 			<option value="14"> 14</option>
 			<option value="15"> 15</option>
 			<option value="16"> 16</option>
 			<option value="17"> 17</option>
 			<option value="18"> 18</option>
 			<option  value="19"> 19</option>
 			<option  value="20"> 20</option>
 			<option value="21"> 21</option>
 			<option value="22"> 22</option>
 			<option value="23"> 23</option>
 			<option value="24"> 24</option>
 			<option value="25"> 25</option>
 			<option value="26"> 26</option>
 			<option value="27"> 27</option>
 			<option value="28"> 28</option>
 			<option value="29"> 29</option>
 			<option value="30"> 30</option>
 			<option value="31"> 31</option>
 			
 			</select>
 			<select class="input" name="mois" id="mois" >
 			<option value="01"> جانفي</option>
 			<option value="02"> فيفري</option>
 			<option value="03"> مارس</option>
 			<option value="04"> آفريل</option>
 			<option value="05"> ماي</option>
 			<option value="06"> جوان</option>
 			<option value="07"> جويلية</option>
 			<option value="08"> أوت</option>
 			<option value="09"> سبتمبر</option>
 			<option value="10"> أكتوبر</option>
 			<option value="12"> نوفمبر</option>
 			<option value="11"> ديسمبر</option>
 			</select>
 				<select class="input" name="annee" id="anne" >
 			<option value="1960"> 1960</option>
 			<option value="1961"> 1960</option>
 			<option  value="1962"> 1962</option>
 			<option  value="1963"> 1963</option>
 			<option  value="1964"> 1964</option>
 			<option  value="1965"> 1965</option>
 			<option value="1966"> 1966</option>
 			<option value="1967"> 1967</option>
 			<option value="1968"> 1968</option>
 			<option value="1969"> 1969</option>
 			<option value="1970"> 1970</option>
 			<option value="1971"> 1971</option>
 			<option value="1972"> 1972</option>
 			<option value="1973"> 1973</option>
 			<option value="1974"> 1974</option>
 			<option value="1975"> 1975</option>
 			<option value="1976"> 1976</option>
 			<option value="1977"> 1977</option>
 			<option value="1978"> 1978</option>
 			<option value="1979"> 1979</option>
 			<option value="1980"> 1980</option>
 			<option value="1981"> 1981</option>
 			<option value="1982"> 1982</option>
 			<option value="1983"> 1983</option>
 			<option value="1984"> 1984</option>
 			<option value="1985"> 1985</option>
 			<option value="1986"> 1986</option>
 			<option value="1987"> 1987</option>
 			<option value="1988"> 1988</option>
 			<option value="1989"> 1989</option>
 			<option value="1990"> 1990</option>
 			<option value="1991"> 1991</option>
 			<option value="1992"> 1992</option>
 			<option value="1992"> 1993</option>
 			<option value="1992"> 1994</option>
 			<option value="1992"> 1995</option>
 			<option value="1992"> 1996</option>
 			<option value="1992"> 1997</option>
 			<option value="1992"> 1998</option>
 			<option value="1999"> 1999</option>
 			<option value="2001"> 2001</option>
 			<option value="2002"> 2002</option>
 			<option value="2003"> 2003</option>
 			<option value="2004"> 2004</option>
 			<option value="2005"> 2005</option>
 			<option value="2006"> 2006</option>
 			
 			
		</select>
 			</div>
 				
 		<div class="genre">
 		<span><input type="radio" name="genre" value="أنثى"><label> أنثى</label></span>
      <span><input type="radio" name="genre" value="ذكر"><label> ذكر</label></span>
      
      </div>
      <div class="clear" style="height: 10px;"></div>
 	
      <div class="job"  >
      <select class="input" name="type" id="travail" >
      <option value="ChercheChomeur">ابحث عن عمال</option>
 		<option value="chomeur"> ابحث عن عمل</option>
      </select>
       <div id="job" style="display:inline; width: 45%;" class="input"></div>
			<select class="input" name="metier" id="jobChomeur"  style="display: none;">
 			<option style="font-weight: bold;">اختصاصك </option>
 			<option> نجارة</option>
 			<option>خياطة</option>
 			<option> حدادة</option>
 			<option> بناية</option>
 			<option> مقاولة</option>
 			<option> طبخ</option>
 			<option>  ملاخ</option>
 			<option>  حجام </option>
 			<option>  طبيب</option>
 			<option>نقاش</option>
 			<option>خباز</option>
 			<option>دهان</option>
 			<option>جباس</option>
 			<option>رخام</option>
 			<option>مكانيكي</option>
 			<option>كهربائي</option>
 			<option>سباك</option>
 			<option>بستاني</option>
 			<option>قهواجي</option>
 			<option>عاملة منزل </option>
 			<option>تمريض</option>
 			<option>تمريض</option>
 			<option>جزار</option>
 			<option>محامي</option>
 			<option>محاسب</option>
 			<option>نادل</option>
 			<option>علاج طبيعي</option>
 			
 			
 	</div>
      												
 		<div class="clear" style="height: 20px;"></div>
 		<!-- <p style="direction: rtl;width: 92%;">
 		بالنقر على ‏إنشاء حساب‏، فإنك توافق على ‏الشروط‏ التي نتبعها وأنك قرأت ‏سياسة البيانات‏ بما في ذلك ‏استخدام ملفات تعريف الارتباط‏. يمكنك تلقي إشعارات رسائل SMS من خدمني ويمكنك إلغاء الاشتراك في أي وقت.
 		</p>
 		 -->
 		
 		<input  type="submit"  value='تعديل' class="btn">
 		<div class="clear"></div>
	</form>

</div>
</body>
</html>

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
 function chargerPays(){
  var xhr=getXhr();
  var xhr1=getXhr();
  xhr.open("GET","php/pays.php",true);
  xhr1.open("GET","php/job.php",true);
  xhr.onreadystatechange=function(){
   if((xhr.readyState==4)&&(xhr.status==200)){
    var reponse=xhr.responseText;
	document.getElementById("pays_tunisie").innerHTML=reponse;
   }
  }
    xhr1.onreadystatechange=function(){
   if((xhr1.readyState==4)&&(xhr1.status==200)){
    var reponse1=xhr1.responseText;
	document.getElementById("job").innerHTML=reponse1;
   }
  }
  xhr.send(null);
  xhr1.send(null);
  	
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
 function inscrit() {
 localStorage.removeItem('username');
 localStorage.setItem('username', getElementById("iduser").value);
//localStorage.username = document.getElementById("iduser").value;
 

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

mysqli_close($link);

?>