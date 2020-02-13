<?php

    if( empty($_REQUEST['name'])  		||
        empty($_REQUEST['email']) 		||
        empty($_REQUEST['subject']) 	    ||
        empty($_REQUEST['message'])	) {

        echo 'No has ingresado todos los campos requeridos';
        return false;

    }

    //variables
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //mail structure
    $mailTo = 'sensumconstrucciones@gmail.com, proyectos@sensumconstrucciones.com';

    $strSubject = "Mensaje de tu Website: " . $subject;
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "From: noreply@sensumconstrucciones.com" . "\r\n";
    $headers .= "Subject: " . $strSubject . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

    $smsBody = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Mail</title></head><body>";
    $smsBody .= "<table style='width: 100%;'>";
    $smsBody .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
    $smsBody .= "</td></tr></thead><tbody><tr>";
    $smsBody .= "<td style='border:none;'><strong>Nombre:</strong> ". $name." </td>";
    $smsBody .= "<td style='border:none;'><strong>Email:</strong> ". $mail." </td>";
    $smsBody .= "<td style='border:none;'><strong>Email:</strong> ". $mail ."</td>";
    $smsBody .= "</tr>";
    $smsBody .= "<tr><td style='border:none;'><strong>Asunto:</strong> ". $subject ."</td>";
    $smsBody .= "<tr><td></td></tr>";
    $smsBody .= "<tr><td colspan='2' style='border:none;'>". $message ."</td></tr>";
    $smsBody .= "</tbody></table>";
    $smsBody .= "</body></html>";

    function messageSent() {
        ?>
        <script>
            alert('¡Tu mensaje ha sido enviado con éxito!')
            location.href = "contact.php"
        </script>
        <?php
    }

function messageError() {
    ?>
    <script>
        alert('Lo siento, inténtalo más tarde')
        location.href = "contact.php"
    </script>
    <?php
}


    //send mail
    if ( mail($mailTo, $strSubject, $smsBody, $headers) ) {

        messageSent();
        echo "Tu mensaje ha sido enviado";
        //header('Location: contact.php');
        return true;
    }
    else{
        messageError();
        return false;
    }


?>
