<?php
$destino="FedorActor@outlook.com";
$asunto='Pedido';
$prod=$_POST['codprod'];
$codpostal=$_POST['codpostal'];
$numtel=$_POST['numtel'];
$correo=$_POST['correo'];
$numcas=$_POST['numcas'];
$piso=$_POST['piso'];
$mensaje="N°de Pedido: $prod Cod Post $codpostal Correo:$correo N°Tel: $numtel N° de casa$numcas Piso:$piso, 
";
if (isset($_POST['$asunto']) && !empty($_POST['$asunto']) && 
	isset($_POST['$mensaje']) && !empty($_POST['$mensaje'])) {

	mail($destino, $asunto, $mensaje);
    echo "Mensaje Enviado";
    
}
else
{
	echo "no se pudo enviar el mensaje:";
	echo "  ";
	echo "$mensaje";
}
?>