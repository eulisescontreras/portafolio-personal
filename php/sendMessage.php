<?php
	$destino = "eulisescontrerasrengifo1@gmail.com";
	
	$email = " ";
	$nombre = " ";
    $telefono = " ";
    $mensaje = " ";
	
	$email = $_POST["Email"];
	$nombre = $_POST["Name"];
    $telefono = $_POST["Phone"];
    $mensaje = $_POST["Mensaje"];

	$contenido = "Nombre: ".$nombre."\nTelefono: ".$telefono."\nEmail: ".$email."\n\nMensaje: ".$mensaje;
	mail($destino,"Curriculum Eulises Contreras",$contenido,"Hosting");
	header("Location:../contact.php");
?>
