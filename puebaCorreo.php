<?php
// En primer lugar creamos el formuario

if(!$_POST) {
?>
<br><br><br>
<form action="<?php $_POST ?>" method=post>
<table border=0 width=50% align=center>
 <tr>
  <td colspan=2>
   <h2 align=center>
    Deja tu consulta
   </h2>
  </td>
 </tr>
 <tr>
  <td align=right>
   Nombre:
  </td>
  <td>
   <input type=text name=nombre required>
  </td>
 </tr>
 <tr>
  <td align=right>
   Email:
  </td>
  <td>
   <input type=email name=email required>
  </td>
 </tr>
 <tr>
  <td align=right>
   Asunto:
  </td>
  <td>
   <input type=text name=asunto required>
  </td>
 </tr>
 <tr>
  <td align=right valign=top>
   Consulta:
  </td>
  <td>
   <textarea name=consulta cols=32 rows=5></textarea>
  </td>
 </tr>
 <tr>
  <td colspan=2 align=center>
   <input type=submit value=Enviar>
  </td>
 </tr>
</table>
</form>
<?php
} else {
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$consulta = $_POST['consulta'];

$uniqueid= uniqid('np');

$mailTo = "gomocreative.com";
$strSubject = "Mesaje de website";

//indicamos las cabeceras del correo
$headers = "MIME-Version: 1.0\r\n";
$headers .= "From: $email \r\n";
$headers .= "Subject: Test mail\r\n";

//Es importante indicar que el Content-Type
//es multipart/alternative de esta manera existirá un contenido alternativo

$headers .= "Content-Type: multipart/alternative;boundary=" . $uniqueid. "\r\n";
   
$message = "";
    
$message .= "\r\n\r\n--" . $uniqueid. "\r\n";
$message .= "Content-type: text/plain;charset=utf-8\r\n\r\n";
$message .= "E-mail en Texto Plano sin formato.";
    

// Este es el código que contiene la información y que además tiene formato

$message .= "\r\n\r\n--" . $uniqueid. "\r\n";
$message .= "Content-type: text/html;charset=utf-8\r\n\r\n";
$message .= "<div style='background: #000000; border-radius: 2em; box-shadow: 5px 5px 10px #000000; color: #ffffff; height: auto; padding: 20px; position: relative; width: 90%;'";
$message .= "<table border=0 width=auto>";
$message .= "<tr><td><b>Nombre:</b> </td><td bgcolor=#F7D358><span style='font-size: 1.5em'>$nombre</span><br></td></tr>";
$message .= "<tr><td><b>E-mail:</b> </td><td>$email<br></td></tr>";
$message .= "<tr><td><b>Asunto:</b> </td><td>$asunto<br></td></tr>";
$message .= "<tr><td><b>Consulta:</b> </td><td>$consulta<br></td></tr>";
$message .= "</table>";
$message .= "</div>";
$message .= "<br>";
    
$message .= "\r\n\r\n--" . $uniqueid. "--";
   
//enviamos el correo...

 //send mail
    if ( mail('gomocreative', 'mensaje de website', $message, $headers) ) {
        echo "Tu mensaje ha sido enviado";
        return true;
    }
    else{
        print "Lo sinto, intentalo de nuevo";
        return false;
    }
}

?>