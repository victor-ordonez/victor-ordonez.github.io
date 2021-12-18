<?
//se mandan a llamar las variables con metodo POST
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];


//se incluyen las variables del form en el mensaje
$mensaje .="NOMBRE:". $nombre ."\n";
$mensaje .="E-MAIL: ".$email." \n";
$mensaje .="TELEFONO:".$telefono." \n";
$mensaje .="ASUNTO: ".$asunto." \n";
$mensaje .="MENSAJE: ".$mensaje." \n";

$cabeceras = "From:<$email>\n";

$body_top = "--Message-Boundary\n";
$body_top .= "Content-type: text/plain;charset=US-ASCII\n";
$body_top .= "Content-transfer-encoding: 7BIT\n";
$body_top .= "Content-description: Mail messagebody\n\n";
$cuerpo = $mensaje;

//cuenta de correo a donde quieren q llegue el formulario
$destino = "victor.ordonez@gmail.com";

echo ("<center><b><font size='5' color='#000000' face='Arial'>");

if (mail($destino,$origen,$cuerpo,$cabeceras))
{
echo ("SU MENSAJE A SIDO ENVIADO");
} else {
echo ("ERROR. PORFAVOR INTENTE MAS TARDE");
}

echo ("</center></font></b>");

?>