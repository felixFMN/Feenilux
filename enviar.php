<?php
session_start();

$texto="";
$nombre = $_POST["nombre"];
$empresa = $_POST["empresa"];
$ruc = $_POST["ruc"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$comentario = $_POST["comentario"];

$cabeceras = 'From: '.$email . "\r\n" .
    'Reply-To: ventas@feenilux.com'  . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$texto=$texto . "-----------------------------------------------\n" . chr(13);
$texto=$texto . "Mensaje enviado de la pagina FEENILUX \n" . chr(13);
$texto=$texto . "----------------------------------------------- \n" . chr(13);
$texto=$texto . "Nombres: " . $nombre . "\n" . chr(13);
$texto=$texto . "Empresa: " . $empresa . "\n" . chr(13);
$texto=$texto . "RUC / DNI: " . $ruc . "\n" . chr(13);
$texto=$texto . "E-mail : " . $email . "\n" . chr(13);
$texto=$texto . "Télefono: " . $telefono . "\n" . chr(13);
$texto=$texto . "Comentario : " . $comentario . "\n" . chr(13);

mail("ventas@feenilux.com","Mensaje Web de FEENILUX: de " .$nombre,$texto, $cabeceras);


mail("contactos@feenilux.com","Mensaje Web de FEENILUX: de " .$nombre,$texto, $cabeceras);



?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8"> 
<!-- InstanceBeginEditable name="doctitle" -->
<title>FENIX LAUPA S.A.C. :: Importación, distribución y representación de productos de Iluminación y ferretería eléctrica.</title>
<!-- InstanceEndEditable -->
<meta name="description" content="FENIX LAUPA S.A.C. :: Importacion, distribución y representacion de productos de Iluminación y ferreteria eléctrica.">
<meta name="keywords" content="feenilux, fenix laupa, iluminacion y ferreteria">
<meta name="distribution" content="global"> 
<meta name="robots" content="all">
<meta name="author" content="jesuskana.net"/>
<link rel="shortcut icon" href="fenix2.ico" type="image/x-icon">

<script src="js/jquery.min.js"></script>
<script src="js/slides.min.jquery.js"></script>
<script>
		$(function(){
			$('.slides').slides({
				preload: true,
				preloadImage: 'slider-img/loading.gif',
				play: 5000,
				pause: 2000,
				hoverPause: true
			});
		});
</script>

<script>
		$(function(){
			$('.slides1').slides({
				preload: true,
				preloadImage: 'slider-img/loading.gif',
				play: 5000,
				pause: 2000,
				hoverPause: true
			});
		});
</script>




<!-- IMAGENES SHADOWBOX-->

<link rel="stylesheet" type="text/css" href="Templates/shadowbox/files/shadowbox.css">
<script type="text/javascript" src="Templates/shadowbox/files/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>



<link href="css/reset.css" rel="stylesheet" type="text/css">

<link href="css/feenilux.css" rel="stylesheet" type="text/css"> 
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head> 
 


<body> 

<header>
    	<div class="logo"> <a href="index.html"><img src="img/logo.png" width="230" height="118" alt="FENIX LAUPA SAC"></a>
        
    </div>
        <div class="telef"><b>Telf:</b> (01) 424 5817 <br>
<b>Celular: </b>994264894 <br>
<a href="MAILTO:ventas@feenilux.com" target="_blank">ventas@feenilux.com</a> 
        </div>
        <nav class="menu">
        	<ul>
            	<li><a href="index.html">Inicio</a></li>
                <li><a href="nosotros.html">Nosotros</a></li>
                <li><a class="current" href="productos.html">Productos</a>
                    
                     <ul>
                <li><a href="Templates/iluminacion-led.html">Iluminación - Led</a></li>
<li><a href="Templates/iluminacion-focosahorradores.html">Iluminación - Ahorradores</a></li>
<li><a href="Templates/interruptor-tomacorriente.html">Interruptor - Toma-corrientes</a></li>
<li> <a href="Templates/cables-electricos.html">Cables - Alambres Eléctricos</a></li>
<li><a href="Templates/extractores-ventiladores.html">Extractor - Ventilador</a></li>
<li><a href="Templates/luminarias-lamparas.html"> Lamparas - Luminarias</a></li>
<li> <a class="last" href="Templates/otros.html">Otros</a></li>
                
                    
				 
			   </ul>
    
                </li>
                <li><a  href="contacto.html">Contacto</a></li>
                <li><a href="http://www.feenilux.com/webmail" target="_blank" class="last">Webmail</a></li>
            </ul>
        </nav>
    </header>
    <section><!-- InstanceBeginEditable name="body" -->
	
	
      <article class="descripcion">
      	<h1>Contáctenos</h1>
        
        <h2 class="mensajeenviado">Mensaje enviado, con éxito.</h2>
        	<div class="formulario">
            <h2>Oficina</h2>
            <ul>
                	
                    <li><b>E-mail:</b>  <a href="mailto:ventas@feenilux.com" target="_blank"> ventas@feenilux.com </a></li>
                    <li><b>Teléfono:</b> (01)  424 5817<b> Nextel: </b> 426*6007 <b> RPM: </b> #982937</li>
                    <li><b>Dirección:</b> Av. Guillermo Dansey N° 354 1er. Piso Stand G-06 Cercado - Lima  </li>
                </ul>
               
               <div id="formulario">
    <form id="contacto" action="enviar.php"  method="post">
      <table>
  <tr>
    <td width="64" valign="top"><span class="tit1">Nombre: </span></td>
    <td width="196"><input  id="nombre" name="nombre" type="text"  value=""  autofocus required/></td>
  </tr>
  <tr>
    <td width="64" valign="top"><span class="tit1">Empresa:</span></td>
    <td><input  id="empresa" name="empresa" type="text"  value="" autofocus required/></td>
  </tr>
  <tr>
    <td width="64" valign="top"><span class="tit1">RUC / DNI:</span></td>
    <td><input  id="empresa" name="ruc" type="text"  value="" autofocus required/></td>
  </tr>
  <tr>
    <td width="64" valign="top"><span class="tit1" >E-mail:</span></td>
    <td><input  id="email" name="email" type="email"  value="" autofocus required /></td>
  </tr>
  <tr>
    <td width="64" valign="top"><span class="tit1">Teléfono:</span></td>
    <td><input  id="telefono" name="telefono" type="text"  value="" autofocus required /></td>
  </tr>
  <tr>
    <td width="64" valign="top"><span >Mensaje:</span></td>
    <td><textarea name="comentario"  cols="18" rows="4" id="comentario" autofocus required ></textarea></td>
  </tr>
  <tr>
    <td width="64" valign="top">&nbsp;</td>
    <td><input id="submit" type="submit" name="button" value="Enviar" /></td>
  </tr>
</table>

       
        
    </form>
  </div>
                
            
            	<div class="form">
                
                </div>
            </div>
            <div class="datoscont">
            <h2>Nuestra Ubicación</h2>
            
            <iframe width="440" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/ms?msa=0&amp;msid=206023949965456220758.0004e07f4e20477525055&amp;ie=UTF8&amp;t=m&amp;ll=-12.044955,-77.043686&amp;spn=0.004197,0.00471&amp;z=17&amp;output=embed"></iframe>
            
            
            </div>
            
            <div class="limpiar"></div>
        
        </article>
	
	<!-- InstanceEndEditable -->
    
    	
</section>
    
    
<footer>

<p>
 
Av. Guillermo Dansey N° 354 1er. Piso Stand G-06 Cercado - Lima
Telf: (01) 424 5817 Cel. Entel: 994-264894 / 994-266007 </p>
<p><B>© FENIX LAUPA S.A.C. 2013</B> - www.feenilux.com </p>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42341522-1', 'feenilux.com');
  ga('send', 'pageview');

</script>
    
</body>
<!-- InstanceEnd --></html>
