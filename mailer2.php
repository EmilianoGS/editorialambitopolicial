<?php
$destino=$_POST['email'];
$nombre=$_POST['nombre'];


if(filter_var($destino, FILTER_VALIDATE_EMAIL)){

include("ejdatabase.php");
$conexion=mysqli_connect($host,$user,$pw,$db);
mysqli_query($conexion,("INSERT INTO suscriptores VALUES(default, '$nombre', '$destino')"));

require_once('PHPMailer/class.phpmailer.php');
require_once('PHPMailer/class.smtp.php');

$correo = new PHPMailer();

$correo->IsSMTP();

$correo->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$correo->SMTPAuth=true;

$correo->SMTPSecure='tls';

$correo->Host='c1851270.ferozo.com';

$correo->Port=25;

$correo->Username='jclasalvia@editorialambitopolicial.com';

$correo->Password='Juan1941';

$correo->SetFrom('no-reply@c1851270.ferozo.com', 'Editorial Ambito Policial');

$correo->AddReplyTo('jclasalvia@editorialambitopolicial.com',"Editorial Ambito Policial");

$correo->AddAddress($destino);

$correo->Subject="Suscripcion";

$correo->MsgHTML("Revista Ambito Policial. Archivo adjunto para descarga. Le estaremos enviando por este medio las <strong>últimas publicaciones</strong>");

$correo->AddAttachment("ambito_junio_2020.pdf");



 if(!$correo->Send()) {


  echo "Hubo un error: " . $correo->ErrorInfo;
  

} else {

  header("Location: suscripcion.php?suscr=1&email=$destino");
  
}
}else{
	header("Location: suscripcion.php?suscr=2");
}
           
?>