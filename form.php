<!DOCTYPE html>
<html lang="fr">
	<head>
    <meta charset="UTF-8">
    <title>La malle a Bonbon</title>
    <meta name="La malle a bonbon" content="site internet concernant une marque de confiserie et de bonbons fabriqués à l'ancienne pour le plaisir des papilles et des yeux">


    <!--    FAVICON------------------------------->
    <link rel="shortcut icon" type="image/Logo" href="img/logo-favicon.ico">
    <link rel="icon" type="image/png" href="img/logo-favicon.png">
    <link rel="apple-touch-icon" href="img/apple-touch-icon-180x180.png">

    <!--	JAVASCRIPT---------------------->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--    RESPONSIVE EDGE----------------------------------------->
    <meta content="IE=edge" http-equiv=X-UA-compatible>

    <!--    RESPONSIVE---------------------------------------------->

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!--	FONTAWESOME---------------------------------------------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">

    <!--        CSS------------------------------------------------------>

    <link rel="stylesheet" href="css/styles.css">

    <!-- Global site tag (gtag.js) - Google Analytics ------------------->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WKVBTF4VE1"></script>
    
</head>
	
	<body>
		
		<section class="formulaire-php center">
		

		<?php

//            $nom = $_POST['nom'];
            $nom = utf8_decode($_POST['nom']);
            $nom = mb_encode_mimeheader($_POST['nom'],"UTF-8");
//            $prenom = $_POST['prenom'];
            $prenom = utf8_decode($_POST['prenom']);
            $prenom = mb_encode_mimeheader($_POST['prenom'],"UTF-8");
            $email = $_POST['email'];
            $sujet = $_POST['sujet'];
            $message = $_POST['message'];

			$destinataire = 'jemma.design99@gmail.com';

			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
			$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
			$headers .= 'From: '.$nom.' '.$prenom.' <'.$email.'>' . "\r\n";

			if(mail($destinataire, $sujet, $message, $headers)) {
				echo "<p><span class='sent'>Votre e-mail a bien été envoyé. Je vous répondrai rapidement.</span></p><p><span class='back'><a href=\"index.html\">Cliquez ici pour retourner à la page d'accueil.</a></span></p>";
			} else {
				echo "<p><span class='notsent'>Un problème est survenu lors de l'envoi de l'e-mail.</span></p><p><span class='back'><a href=\"contact.html\">Veuillez réessayer.</a></span></p>";
			}
            
		?>
		
		</section>

	</body>
</html>