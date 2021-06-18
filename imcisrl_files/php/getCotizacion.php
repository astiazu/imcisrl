<?php


	
//	function verifyName($name){
//		if(!strpbrk($name, "1234567890.+-*/!#$%&/()=?¡+´][_:;,.-")){
//			return $name;
//		}
//	}
//
//	function sendError(){
//		return "No se cumplen las normas de entrada<br>";
//	}
//
//
//	$name = verifyName($_POST['name']);
//	if($name!=null){
//		//echo "Nombre de/la interesado/a: ".$name."<br>";
//	}
//	else{
//		echo "Nombre de/la interesado/a: ".sendError();
//	}
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$type=$_POST['type'];
	$quantity=$_POST['quantity'];
	$destination=$_POST['destination'];
	$quote_message=$_POST['quote-message']; 




	echo "Nombre de/la interesado/a: ".$name."<br>";
	echo "Direccion de Email: ".$email."<br>";
	echo "Teléfono: ".$phone."<br>";
	echo "Tipo de carga: ".$type."<br>";
	echo "Cantidad: ".$quantity."<br>";
	echo "Destino: ".$destination."<br>";
	echo "Mensaje: ".$quote_message."<br>";

	// $mensaje=	"Nombre de/la interesado/a: ".$name."\n
	//			Direccion de Email: ".$email."\n
	//			Teléfono: ".$phone."\n
	//			Tipo de carga: ".$type."\n
	//			Cantidad: ".$quantity."\n
	//			Destino: ".$destination."\n
	//			Mensaje: ".$quote_message."\n";

	

	// mail($email, "Pedido de cotizacion de ".$name, $mensaje);
?>
