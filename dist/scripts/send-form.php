<?php

    require("class.phpmailer.php");
    require("class.smtp.php");

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $telphone = $_POST["telphone"];
    $bulkhead = $_POST["bulkhead"];
    $business = $_POST["business"];
    $comments = $_POST["comments"];

    $to = "mamparasespaciospublicos@gmail.com";
    $from = "bsalgado@tolkogroup.com";
    $subject = "INFO MAMPARAS";
    
    $body  = "Nombre:"." ".$firstname." ".$lastname."\r\n"; 
    $body .= "E-mail:"." ".$email."\r\n";
    $body .= "Teléfono:"." ".$telphone."\r\n";
    $body .= "Mampara de interés:"." ".$bulkhead."\r\n";
    $body .= "Tipo de negocio:"." ".$business."\r\n";
    $body .= "Comentarios:"." ".$comments;

    $headers  = "MIME-Version: 1.0"."\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
    $headers .= "De:"." ".$from."\r\n";

    mail($to,$subject,$body,$headers);

    header("Location: ../index.html");

?>