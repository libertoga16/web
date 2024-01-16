<?php
 $destinatario = 'libertoga16@gmail.com';
 $nombre = $_POST['nombre'];
 $asunto = $_POST['asunto'];
 $mensaje = $_POST['mensaje'];
 $email = $_POST['email'];

 $header = "Enviando propuesta para trabajar";
 $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
 mail($destinatario, $asunto, $mensajeCompleto, $header);
 echo "<script>alert('correo enviado exiitosamente')</script>";
 echo "<script> setTimeout(\"location.href='/login/index.html'\",1000</script>"
?>