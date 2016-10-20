<?php 
	//Realizar la conexión al localhost con el usuario y contraseña
	
	include 'con_bd.php';
	
    $name = $_POST['demo-name'];
	$email = $_POST['demo-email'];
	$pais = $_POST['demopais'];
	$edo = $_POST['regmexselect'];
    $edousa = $_POST['regusaselect'];
    $fechaentrega = $_POST['fechaentrega'];
    $fechadev = $_POST['fechadev'];
    $horaentrega = $_POST['horaentrega'];
    $horadev = $_POST['horadev'];
	echo $name.$email.$pais.$edo.$edousa."<br>".$fechaentrega.$horaentrega.$fechadev.$horadev;
	
 ?>