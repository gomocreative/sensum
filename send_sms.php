<?php

    if( empty($_REQUEST['name'])  		||
        empty($_REQUEST['email']) 		||
        empty($_REQUEST['subjet']) 	    ||
        empty($_REQUEST['message'])	) {

        echo 'No has ingresado todos los campos requeridos';
        return false;

    }

    //variables
    $name = $_REQUEST['name'];
    $mail = $_REQUEST['email'];
    $subjet = $_REQUEST['subjet'];
    $message = $_REQUEST['message'];

    //mail structure
    $uniqueid= uniqid('np');

    $mailTo = 'gomocreative@gmail.com';
    $strSubject = "Mensaje de tu Website, Sensum";
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: $mail \r\n";
    $headers .= "Subjet: Test mail\r\n";
    $headers .= "Content-Type: multipart/alternative;boundary=" . $uniqueid . "\r\n";

    $smsBody  = "\r\n\r\n--" . $uniqueid ."\r\n";
    $smsBody .= "Content-type: text/html; charset=utf8\r\n\r\n";
    $smsBody .= "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Mail</title></head><body>";
    $smsBody .= "<table style='width: 100%;'>";
    $smsBody .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
    $smsBody .= "</td></tr></thead><tbody><tr>";
    $smsBody .= "<td style='border:none;'><strong>Nombre:</strong> ". $name." </td>";
    $smsBody .= "<td style='border:none;'><strong>Email:</strong> ". $mail ."</td>";
    $smsBody .= "</tr>";
    $smsBody .= "<tr><td style='border:none;'><strong>Asunto:</strong> ". $subjet ."</td>";
    $smsBody .= "<tr><td></td></tr>";
    $smsBody .= "<tr><td colspan='2' style='border:none;'>". $message ."</td></tr>";
    $smsBody .= "</tbody></table>";
    $smsBody .= "</body></html>";
    $smsBody .= "\r\n\r\n--" . $uniqueid ."\r\n";


    //send mail
    if ( mail($mailTo, $strSubject, $smsBody, $headers) ) {
        echo "Tu mensaje ha sido enviado";
        header('Location: contact.php');
        return true;
    }
    else{
        print "Lo sinto, intentalo de nuevo";
        return false;
    }

?>
