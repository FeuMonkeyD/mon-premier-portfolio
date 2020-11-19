<?php
	
	  ini_set("SMTP","smtp.outlook.fr");
	 ini_set("smtp_port",993);
	
   errot_reporting( E_ALL );

	$to = 'dann.louzolo@gmail.com';
     $subject = 'Contact de mon site';
     $message = $_POST['message']."{ ce message a ete envoyé par".$_POST['email']."}";;
     $headers = 'From: mugiwara-93@hotmail.fr';

    $envoi= mail($to, $subject, $message, $headers);

	
	if ($envoi == true)
	  echo "<p>Test 1 : la fonction mail() fonctionne. Un e-mail a ete envoye a l'adresse ".$to."
	  <br />S'il ne vous parvient pas, il y a probablement un blocage au niveau du serveur SMTP de l'hebergeur</p>";
	else
	  echo "<p>Test 1 : l'envoi par la fonction PHP mail() ne fonctionne pas ou est desactivee</p>";

	/* test 2 */
	echo "<p>Test 2 : Si bool(false) le mail ne part pas
	<br />Si bool(true) l'e mail a bien ete envoye (donc il est bloque apres)</p>";
	// var_dump(mail($to, $subject, $message, $headers));


  ?>