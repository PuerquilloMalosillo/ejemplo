<?php
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
    $paisletra;
    if($pais==2){
        $paisletra = "MÉXICO";
    }else{
        $paisletra = "USA";
    }
    $carro = $_POST['tipocarro'];
    $sql = "SELECT * FROM `catalogo_carros` WHERE llave='".$carro."'";
    $result = mysql_query($sql);
    $descripcion;
    $precio;
    $dias;
    $url;
    while ($fila = mysql_fetch_assoc($result)) {
        $descripcion = $fila['DESCRIPCION'];
        $precio = $fila['PRECIO'];
        $url= $fila['URL'];
    }
    $fecha1 = date('Y-m-d',strtotime($fechaentrega));
    $fecha2 = date('Y-m-d',strtotime($fechadev));
    $datetime1 = new DateTime($fecha1);
    $datetime2 = new DateTime($fecha2);
    $dias = dias_transcurridos($fecha1,$fecha2);
    $preciof = ($dias*$precio)+765;
    
    $sqlinsert = "INSERT INTO `reserva`(`NOMBRE`, `MAIL`, `PAIS`, `ESTADO`, `FECHA_ENT`, `FECHA_DEV`,`ID_COCHE`) VALUES ('".$name."','".$email."','".$pais."','".$edo."',STR_TO_DATE('".$fechaentrega."', '%m/%d/%Y'),STR_TO_DATE('".$fechadev."', '%m/%d/%Y'),'".$carro."')";
    $result2 = mysql_query($sqlinsert);

    function dias_transcurridos($fecha_i,$fecha_f)
        {
            $dias	= (strtotime($fecha_i)-strtotime($fecha_f))/86400;
            $dias 	= abs($dias); $dias = floor($dias);		
            return $dias;
        }
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>CARS FOR RENT</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<!-- Page Wrapper -->
			<div id="page-wrapper">
                
                <div id="menualt">
                        <div class="row uniform">
                            <div class="3u 12u$(xsmall)">
                                <p id="home">HOME</p>
                            </div>
                            <div class="3u 12u$(xsmall)">
                               <p id="español" class="pointer">Español</p>                                
                            </div>
                            <div class="3u 12u$(xsmall)">
                                <p id="ingles" class="pointer">Ingles</p>
                            </div>
                            <div class="2u$(xsamll)">
                                <div class="close"></div>
                            </div>
                        </div>
                    </div>
                

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php">RENTA DE AUTOMÓVILES</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a  class="menuToggle"><span>Menu</span></a>
									
								</li>
							</ul>
						</nav>
					</header>
				<!-- Main -->
					<article id="main">
						<header>
							<h2>Datos de tu reserva</h2>
							<p><?php echo "NOMBRE: " . $name."</p><p>PAÍS: ".$paisletra."</p><p>Fecha de entrega : ".$fecha1." hora : ".$horaentrega."</p><p>Fecha de devolución: " . $fecha2." hora : ". $horadev?></p>                           
						</header>				
					</article>
                
                  <section class="wrapper style5">
                      <div class="inner">
									<h4>AUTOMÓVIL: <?php echo $descripcion; ?></h4>
									<h5>Tarifa y servicios incluidos</h5>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Pago en la entrega del Vehículo</th>													   
													<th>Precio x día: <?php echo $precio; ?> </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td ><p class="gris">Modificación y cancelación de reserva</p></td>
													<td><p class="gris">Gratuita</p></td>
												</tr>
												<tr>
													<td><p class="gris">Kilometros ilimitados</p></td>													
												</tr>
												<tr>
													<td><p class="gris">Seguro contre terceros</p></td>
													<td><p class="gris">Gratuita</p></td>													
												</tr>
												<tr>
													<td><p class="gris">Cobertura daños y robo</p></td>
													<td><p class="gris">MXN 765</p></td>
												</tr>
												<tr>
													<td><p class="gris">IMPUESTOS SOBRE CONTRATOS</p></td>													
													<td><p class="gris">INCLUIDO</p></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td ><p class="gris">TOTAL DÍAS: <?php echo  $dias; ?></p></td>
													<td><p class="gris">MXN $<?php echo  $preciof; ?></td>
												</tr>
											</tfoot>
										</table>
									</div>
                                    <ul class="actions">                                     
				                        <li><input id="confirmar" type="submit" value="CONFIRMAR RESERVA" class="special" /></li>
				                    </ul>
									
									</div>
                          	</div>
								</section>
				<!-- Footer -->
			</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

            <script>
                 $( ".menuToggle" ).click(function() {
                      $( "#menualt" ).slideToggle( "slow" );
                    });
                $("#home").click(function(){
                    window.location.replace("index.php");
                });
                
                 $("#español").click(function(){                   
                    localStorage.setItem("idioma", "esp");
                   
                    $( "#menualt" ).slideToggle( "slow" );
                });                
                $("#ingles").click(function(){                   
                    localStorage.setItem("idioma", "ing");
          
                    $( "#menualt" ).slideToggle( "slow" );
                });  
                
            $("#confirmar").click(function(){
                window.location.replace("index.php");
            });
    </script>

	</body>
</html>