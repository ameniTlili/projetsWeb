	<?php

		   if(isset($_POST)&& !empty($_POST['nom'])
		   && !empty($_POST['tel'])&& !empty($_POST['mailmsg'])
		   && !empty($_POST['msg'])){
		     
		      extract($_POST);
		      $destinataire ='ameni1tlili@gmail.com';
		      $from= "name :".$nom.", mail : " . $mailmsg.", tel :".$tel;
		      
		      $body="<html><head><style>
	h1,h2{text-align: center;} 
	h1 span{color: #1c5325;}
	a{color: #1c5325;}
	a:hover{color: #3b7344;}
	</style></head><body>
	<h1 >yucca </h1>
	<h2>Vous etes les bienvenues</h2>
	<p>".$msg."</p>
	</body></html>";
		      $company="Yucca";
		      
$headers = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
		     
		      $mail=mail($destinataire,$from,$body,$headers);
		      
		      if($mail)
                        echo "<script type='text/javascript'>alert('thank you for your trust')</script>";
		      else 
                        echo "<script type='text/javascript'>alert('erreur')</script>";
                    }
                    else 
                        echo "<script type='text/javascript'>alert('chaines vides')</script>";
                    
                    echo "<META http-equiv='refresh' content='0;URL=../contact.html'>";
		?>
		<?php

