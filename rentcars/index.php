
<!DOCTYPE HTML>
<html>
	<head>
		<title>CAR RENTAL</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/jquery-ui.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">
        
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
					<header id="header" class="alt">
                            <h1 id='titulo2' href="index.php" ><a>RENTA DE AUTOMÓVILES</a></h1>                           				
						<nav id="nav">
							<ul>
								<li class="special">
									<a class="menuToggle"><span>Menu</span></a>									
								</li>
							</ul>
						</nav>
					</header>
				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2 id='titulo' >RENTA DE AUTOMÓVILES</h2>
							<p id="slogan">Tenemos justo lo que estas buscando</p>							
						</div>
						<a id="mas" href="#one" class="more scrolly">Conozca más</a>
					</section>
				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2 id="treserva">RESERVA AHORA MISMO</h2>
								<p id="preserva">Tenemos precios especiales para Estados Unidos y México. <br>Solo selecciona el pais de donde vas a rentar y hagamos un gran trato</p>
							</header>
							<ul class="icons major">
								<li><span class="icon fa-car major style1"><span class="label">Lorem</span></span></li>
							</ul>
						</div>
                        <section id="formu">
									<h4 id="tituh4">Reservación facil y rápido</h4>
									<form id="formulario" method="post" action="cars.php"  >
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
                                                
												<input type="text" name="demo-name" id="name" value="" placeholder="Nombre" required="True" /><label id="fallname" class="nodisplay"></label>
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="email" name="demo-email" id="email" value="" placeholder="E-mail"  required="True" style="text-transform: lowercase;"/>
                                                <label id="fallmail" class="nodisplay"></label>
											</div>
                                            
                                            <div class="6u 12u$(xsmall)">
												<div class="select-wrapper">                                                    
													<select name="demopais" id="paises" required>
                                                        <option id="opcionp" value="0">Selecciona País</option>
                                                        <?php
                                                          require_once 'con_bd.php';                                                        
                                                         $resultado = mysql_query('SELECT *  FROM paises ORDER BY id ASC');
                                                            if (!$resultado) {
                                                               die('Consulta no válida: ' . mysql_error());
                                                               }
                                                             while ($fila = mysql_fetch_assoc($resultado)) {          
                                                             echo "<option value='". $fila['id']."'>".$fila['nombre']."</option>";
                                                             }
                                                        ?>
													</select>
												</div>                                                
											</div>
                                            <div class="6u$ 12u$(xsmall)">
                                                <div id="estadosmex" class="select-wrapper">                                                    
													<select id="regmex" name="regmexselect"  class="" required>
                                                        <?php
                                                          require_once 'con_bd.php';                                                        
                                                         $resultado = mysql_query('SELECT *  FROM estados ORDER BY id_estado ASC');
                                                            if (!$resultado) {
                                                               die('Consulta no válida: ' . mysql_error());
                                                               }
                                                             while ($fila = mysql_fetch_assoc($resultado)) {          
                                                             echo "<option value='". $fila['id_estado']."'>".strtoupper($fila['estado'])."</option>";
                                                             }                                                           
                                                        ?>
													</select>
												</div>
                                                <div id="estadosusa" class="select-wrapper">                                                    
													<select id="regusa" name="regusaselect"  class="" required>
                                                        <?php
                                                          require_once 'con_bd.php';                                                        
                                                         $resultado = mysql_query('SELECT *  FROM estadosusa ORDER BY id ASC');
                                                            if (!$resultado) {
                                                               die('Consulta no válida: ' . mysql_error());
                                                               }
                                                             while ($fila = mysql_fetch_assoc($resultado)) {          
                                                             echo "<option value='". $fila['id']."'>".$fila['nombre']."</option>";
                                                             }                                                           
                                                        ?>
													</select>
												</div>  
                                            </div> 
                                            
                                         
											<div class="3u 12u$(xsmall)">
								                <p id="fecharenta" class="gris">Fecha Renta:</p><input name="fechaentrega" type="text" id="datepicker" required>
											</div>
                                            <div class="3u 12u$(xsmall)">
                                                <p class="gris horas">Hora de Renta:</p>
								                <select id="busqueda_horaentre" name="horaentrega" required>
                                                    <option value="00:00">00:00</option>
                                                    <option value="00:30">00:30</option>
                                                    <option value="01:00">01:00</option>
                                                    <option value="01:30">01:30</option>
                                                    <option value="02:00">02:00</option>
                                                    <option value="02:30">02:30</option>
                                                    <option value="03:00">03:00</option>
                                                    <option value="03:30">03:30</option>
                                                    <option value="04:00">04:00</option>
                                                    <option value="04:30">04:30</option>
                                                    <option value="05:00">05:00</option>
                                                    <option value="05:30">05:30</option>
                                                    <option value="06:00">06:00</option>
                                                    <option value="06:30">06:30</option>
                                                    <option value="07:00">07:00</option>
                                                    <option value="07:30">07:30</option>
                                                    <option value="08:00">08:00</option>
                                                    <option value="08:30">08:30</option>
                                                    <option value="09:00">09:00</option>
                                                    <option value="09:30">09:30</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="10:30">10:30</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="11:30">11:30</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="12:30">12:30</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="13:30">13:30</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="14:30">14:30</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="15:30">15:30</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="16:30">16:30</option>
                                                    <option value="17:00">17:00</option>
                                                    <option value="17:30">17:30</option>
                                                    <option value="18:00">18:00</option>
                                                    <option value="18:30">18:30</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="19:30">19:30</option>
                                                    <option value="20:00">20:00</option>
                                                    <option value="20:30">20:30</option>
                                                    <option value="21:00">21:00</option>
                                                    <option value="21:30">21:30</option>
                                                    <option value="22:00">22:00</option>
                                                    <option value="22:30">22:30</option>
                                                    <option value="23:00">23:00</option>
                                                    <option value="23:30">23:30</option>
                                                    </select>
											</div>
                                            <div class="3u 12u$(xsmall)">
								                <p id="fechaentrega" class="gris">Fecha Entrega:</p> <input name="fechadev" type="text" id="datepicker2" required>
											</div>
                                            <div class="3u$ 12u$(xsmall)">
                                                <p class="gris horas">Hora de Entrega: </p>
								                <select id="busqueda_hora" name="horadev" required>
                                                    <option value="00:00">00:00</option>
                                                    <option value="00:30">00:30</option>
                                                    <option value="01:00">01:00</option>
                                                    <option value="01:30">01:30</option>
                                                    <option value="02:00">02:00</option>
                                                    <option value="02:30">02:30</option>
                                                    <option value="03:00">03:00</option>
                                                    <option value="03:30">03:30</option>
                                                    <option value="04:00">04:00</option>
                                                    <option value="04:30">04:30</option>
                                                    <option value="05:00">05:00</option>
                                                    <option value="05:30">05:30</option>
                                                    <option value="06:00">06:00</option>
                                                    <option value="06:30">06:30</option>
                                                    <option value="07:00">07:00</option>
                                                    <option value="07:30">07:30</option>
                                                    <option value="08:00">08:00</option>
                                                    <option value="08:30">08:30</option>
                                                    <option value="09:00">09:00</option>
                                                    <option value="09:30">09:30</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="10:30">10:30</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="11:30">11:30</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="12:30">12:30</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="13:30">13:30</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="14:30">14:30</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="15:30">15:30</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="16:30">16:30</option>
                                                    <option value="17:00">17:00</option>
                                                    <option value="17:30">17:30</option>
                                                    <option value="18:00">18:00</option>
                                                    <option value="18:30">18:30</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="19:30">19:30</option>
                                                    <option value="20:00">20:00</option>
                                                    <option value="20:30">20:30</option>
                                                    <option value="21:00">21:00</option>
                                                    <option value="21:30">21:30</option>
                                                    <option value="22:00">22:00</option>
                                                    <option value="22:30">22:30</option>
                                                    <option value="23:00">23:00</option>
                                                    <option value="23:30">23:30</option>
                                                    </select>
											</div>
                                            <div class="12u$">
                                                <label id="fallcarro" class="nodisplay"></label>
                                                <select id="automovil" name="tipocarro" required>
                                                    <option id="optionauto" value="0">Selecciona automóvil</option>
                                                    <option value="carro1">BMW Serie 1</option>
                                                    <option value="carro2">BMW M2 Coupé</option>
                                                    <option value="carro3">BMW i8 </option>
                                                    <option value="carro4">BMW i3</option>
                                                    <option value="carro5">BMW M4 Convertible</option>
                                                    <option value="carro6">BMW serie 4 Convertible</option>
                                                </select>
                                            </div>
											<div class="12u$">
                                                <h3 id="tenemos">Tenemos 6 automóviles disponibles</h3>                                                   
                                                                <div id="carrosgrande" >
                                                                    <div id="carro1" class="12u$(xsmall) btn2"><span class="image fit"><img src="images/carro1.png" alt="Submit" /></span></div>
                                                                    <div id="carro2" class="12u$(xsmall) btn2 "><span class="image fit"><img src="images/carro2.png" alt="" /></span></div>
                                                                    <div id="carro3" class="12u$(xsmall) btn2 "><span class="image fit"><img src="images/carro3.png" alt="" /></span></div>
                                                                    <div id="carro4" class="12u$(xsmall) btn2 "><span class="image fit"><img src="images/carro4.png" alt="" /></span></div>
                                                                    <div id="carro5"  class="12u$(xsmall) btn2 "><span class="image fit"><img src="images/carro5.png" alt="" /></span></div>
                                                                    <div id="carro6"  class="12u$(xsmall) btn2 "><span class="image fit"><img src="images/carro6.png" alt="" /></span></div>
                                                                 </div>
                                                                <div class="row uniform 50%">
                                                                    <div id="carro1" class="4u 12u$(xsmall) btn"><span class="image fit"><img src="images/carro1.png" alt="Submit" /></span></div>
                                                                    <div id="carro2" class="4u 12u$(xsmall) btn "><span class="image fit"><img src="images/carro2.png" alt="" /></span></div>
                                                                    <div id="carro3" class="4u 12u$(xsmall) btn "><span class="image fit"><img src="images/carro3.png" alt="" /></span></div>
                                                                    <div id="carro4" class="4u 12u$(xsmall) btn "><span class="image fit"><img src="images/carro4.png" alt="" /></span></div>
                                                                    <div id="carro5"  class="4u 12u$(xsmall) btn "><span class="image fit"><img src="images/carro5.png" alt="" /></span></div>
                                                                    <div id="carro6"  class="4u 12u$(xsmall) btn "><span class="image fit"><img src="images/carro6.png" alt="" /></span></div>
                                                                </div>                                                                           								               
											</div>
											<div class="12u$">
												<ul class="actions">
													<li><input id="enviar" type="submit" value="RESERVAR" class="special" /></li>
													<li><input type="reset" value="Reset" class="special" /></li>
                                                  
												</ul>
											</div>
										</div>
									</form>
								</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/bmw.jpeg" alt="" /></div><div class="content">
								<h2>Entrega a domicilio sin costo</h2>
								<p>El portal de renta de autos más grande y económico en la ciudad de México.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/car2.jpeg" alt="" /></div><div class="content">
                            <h2>Cobertura Total</h2>								
								<p>¡Tranquilidad Total! Seguro con cobertura total, sin cargos extras ni deducibles en caso de accidente o robo.</p>
							</div>
						</section>
						<section id="demo" class="spotlight">
							<div id="rine" class="image"><img id="fotorine" src="images/car5.jpeg" alt="" /></div>
                            <div class="content">
								<h2>Beneficios de rentar un auto</h2>
                            <p>Olvídate de las largas esperas del transporte público. </br>
                                Ahorra en pasajes conduciendo tú mismo a tu familia. </br>
                                Aprovecha nuestros descuentos exclusivos en renta de autos en Ciudad de México..</p>
							</div>
						</section>
                            
					</section>
				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2>Somos tu mejor opción</h2>
								<p>Acercate y resolvemos todas tus dudas.</p><br>
                                <p></p>
							</header>
							<ul class="actions vertical">								
								<li><a href="mailto:j.casasola.lopez@gmail.com?Subject=Renta de Autos" class="button fit">Enviar Correo</a></li>
							</ul>
						</div>
					</section>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
            <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
            <script src="assets/js/jquery.backstretch.min.js"></script>
           
        <script>
            $( document ).ready(function() {
                
                $( ".menuToggle" ).click(function() {
                      $( "#menualt" ).slideToggle( "slow" );
                    });
                $("#home").click(function(){
                    window.location.replace("index.php");
                });
                
                $("#español").click(function(){                   
                    localStorage.setItem("idioma", "esp");
                    cambiaridioma( localStorage.getItem("idioma"));
                    $( "#menualt" ).slideToggle( "slow" );
                });                
                $("#ingles").click(function(){                   
                    localStorage.setItem("idioma", "ing");
                    cambiaridioma( localStorage.getItem("idioma"));
                    $( "#menualt" ).slideToggle( "slow" );
                });                
                function cambiaridioma($idioma){
                    if($idioma=="esp"){
                     $("#titulo").text("Renta de automóviles");
                     $("#slogan").text("Tenemos justo lo que estas buscando");
                     $("#mas").text("Conozca más");
                     $("#treserva").text("RESERVA AHORA MISMO");
                     $("#preserva").text("Tenemos precios especiales para Estados Unidos y México.  / Solo selecciona el pais de donde vas a rentar y hagamos un gran trato");
                     $("#tituh4").text("RESERVACIÓN FACIL Y RÁPIDO");
                    $("#name").attr("placeholder", "Nombre");
                    $("#opcionp").text("Seleccione país");
                    $("#fecharenta").text("Fecha de Renta:");
                    $(".horas").text("Hour:");
                    $("#fechaentrega").text("Fecha Entrega:");
                    $("#optionauto").text("Selecciona automóvil");
                    $("#tenemos").text("TENEMOS 6 AUTOMÓVILES DISPONIBLES");
                    $("#español").text("Español");
                    $("#ingles").text("Ingles");
                    $("#enviar").attr({
                        type:'submit',
                        value:'RESERVAR'});
                    }else{
                        $("#titulo").text("CARS RENTAL");
                        $("#slogan").text("Start A Reservation");
                        $("#mas").text("MORE INFO");
                        $("#treserva").text("Start A Reservation");
                        $("#preserva").text("We have special prices for the US and Mexico.  /  Just select the country and do a great deal");
                        $("#tituh4").text("FAST AND EASY");
                        $("#name").attr("placeholder", "Name");
                        $("#opcionp").text("COUNTRY");
                        $("#fecharenta").text("Pickup Date:");
                        $(".horas").text("Hour:");
                        $("#fechaentrega").text("Return Date:");
                        $("#optionauto").text("Choose a car");
                        $("#tenemos").text("6 cars available");
                        $("#español").text("Spanish");
                    $("#ingles").text("English");
                       $("#enviar").attr({
                        type:'submit',
                        value:'RENT'});
                    }
                }
                
                $("#tester").click(function(){
                    //alert("click");
                    $("#name").val("josue casasola");
                    $("#email").val("josue@casasola.com");
                    $("#datepicker").val("09/15/2016");                    
                    $("#datepicker2").val("09/25/2016");
                    $("#busqueda_horaentre").val("10:30");
                    $("#busqueda_hora").val("12:30");
                    $("#automovil").val("carro2");
                });
                
                $.backstretch([
                          "images/mercedes.jpeg"
                        , "images/car4.jpeg"
                        , "images/car7.jpeg"
                      ], {duration: 3000, fade: 750});
                    
                     $("#estadosmex").fadeOut();
                     $("#estadosusa").fadeOut();
                     $(".btn2").fadeOut();
                });
                
                $( "#paises" ).change(function() {
                    var valor = $("#paises").val();                    
                    switch(valor) {
                     
                        case "2":
                             $("#estadosusa").fadeOut("slow", function(){
                                $("#estadosmex").fadeIn();    
                           });
                           
                            break;
                        case "3":
                           $("#estadosmex").fadeOut("slow", function(){
                                $("#estadosusa").fadeIn();    
                           });
                           
                            break;                      
                    }
                });
                //Inicializar datepicker fechas
                $( function() {
                    $( "#datepicker" ).datepicker();
                    $( "#datepicker2" ).datepicker();
                  } );
                
                $( "#automovil" ).change(function() {
                    var varcarro = $("#automovil").val();
                    var $el=$('#'+varcarro).fadeIn();
                    $('#carrosgrande > div').not($el).hide();
                });
                
                $(".btn").click( function(){
                    $("#automovil").val(this.id);
                     var $el=$('#'+this.id).fadeIn();
                    $('#carrosgrande > div').not($el).hide();
                });
            
                //Validar formulario    
               $("#formulario").submit(function(){                   
                //Validando pais
                   var $paisrent = $("#paises").val();
                   
                   if($paisrent=="0"){
                        $("#paises").removeClass( "selected" );
                        $("#paises").addClass( "fallselected" );
                        $('html,body').animate({scrollTop:$("#formulario").offset().top},2000);
                       return false;
                   }else{
                       $("#paises").removeClass( "fallselected" );
                        $("#paises").addClass( "selected" );
                   }
                                     
                    //Validando atomovil selección
                    var $tipoauto = $("#automovil").val();
                    if($tipoauto=="0"){
                                            
                        $("#automovil").removeClass( "selected" );
                        $("#automovil").addClass( "fallselected" );
                        $("#fallcarro").removeClass("nodisplay");
                        $("#fallcarro").text("Seleccione un automóvil");  
                        $('html,body').animate({scrollTop:$("#formulario").offset().top},2000);
                        return false;
                    }else{
                        $("#automovil").removeClass( "fallselected" );
                        $("#automovil").addClass( "selected" );
                        $("#fallcarro").fadeOut();
                    }
                    //Validando email 
                    // Expresion regular para validar el correo
                    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

                    // Se utiliza la funcion test() nativa de JavaScript
                    if (regex.test($('#email').val().trim())) {
                      
                        $("#email").removeClass( "fallselected" );
                        $("#email").addClass( "selected" );
                    } else {
                        
                        $("#email").removeClass( "selected" );
                        $("#email").addClass( "fallselected" );
                        $('html,body').animate({scrollTop:$("#formulario").offset().top},2000);
                        return false;
                    }
                   //validando fechas-> fecha1 < fecha2 , fecha1 >= hoy
                   var $today = new Date();
                   var $year = $today.getFullYear();
                   var $month = $today.getMonth()+1;
                   var $day = $today.getDate();
                   var $hour = $today.getHours();
                   var $minutes = $today.getMinutes();
                   var $hoy = $month + "/" + $day + "/" + $year;
                   var $hoy2 = new Date($hoy);
                   var $fecha  = $("#datepicker").val();
                   var $fecha2 = $("#datepicker2").val();
                   var $fecharenta = new Date($fecha);
                   var $fechaentrega= new Date($fecha2);
                   var $horarenta = $("#busqueda_horaentre").val();
                   var $horaentrega = $("#busqueda_hora").val();
                   console.log("fecha hoy " + $hoy2 + "fecha " + $fecharenta);
                   
                   
                   if($hoy2.getTime()==$fecharenta.getTime()){
                       //console.log("fechas son iguales");
                       if($hour<$horante){
                           console.log("hora valida");
                       }else{
                           console.log("horas invalidas ");
                       }
                   }else if($hoy2<=$fecharenta){
                       console.log("fecha  es mas grande correcto   ");
                       //verificar hora para ver si es maa grande en caso de que se el mismo día
                         $("#datepicker").removeClass( "fallselected" );
                        $("#datepicker").addClass( "selected" );
                       $("#datepicker2").removeClass( "fallselected" );
                        $("#datepicker2").addClass( "selected" );
                   }
                   else{
                       //console.log("fecha renta es mas chica , pasado no se puede rentar");
                      
                       $("#datepicker").removeClass( "selected" );
                        $("#datepicker").addClass( "fallselected" );
                        $("#datepicker2").removeClass( "selected" );
                        $("#datepicker2").addClass( "fallselected" );
                        $('html,body').animate({scrollTop:$("#formulario").offset().top},2000);
                        return false;
                   }
                   
                   if($fecharenta<=$fechaentrega){
                      // console.log("si esta correcto");
                          $("#datepicker").removeClass( "fallselected" );
                        $("#datepicker").addClass( "selected" );
                       $("#datepicker2").removeClass( "fallselected" );
                        $("#datepicker2").addClass( "selected" );
                   }else if($fecharenta==$fechaentrega){
                       console.log("son iguales comprobar hora");
                       if($horarenta<$horaentrega){
                           console.log("hora valida 2");
                       }else{
                           console.log("horas invalidas ");
                       }
                   }else{
                       console.log("la fecha son invalidas");
                       $("#datepicker2").removeClass( "selected" );
                        $("#datepicker2").addClass( "fallselected" );
                       ("#datepicker").removeClass( "selected" );
                        $("#datepicker").addClass( "fallselected" );
                        $('html,body').animate({scrollTop:$("#formulario").offset().top},2000);
                       return false;
                   }
                   
                   //Validar nombre 
                    var $nombre = $("#name").val();
                    var $numeron = $nombre.length;
                    if ($numeron<5){
                         console.log("nombre demasiado corto");
                         $("#name").removeClass( "selected" );
                         $("#name").addClass( "fallselected" );
                         $("#fallname").removeClass("nodisplay");
                         $("#fallname").text("El nombre es necesario");
                        $('html,body').animate({scrollTop:$("#formulario").offset().top},2000);
                        return false;
                    }else{
                         $("#name").removeClass( "fallselected" );
                         $("#name").addClass( "selected" );
                    }
                    // Si no se cumple la condicion...
                   return true;
                });
            </script>

	</body>
</html>