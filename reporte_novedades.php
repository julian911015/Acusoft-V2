<!DOCTYPE html>


<?php 


    session_start(); 
    include('conexion.php'); // incluímos los datos de acceso a la BD 
    // comprobamos que se haya iniciado la sesión 
		
    if(isset($_SESSION['nombre_user'])) { 
?>



<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>diario-de-campo</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="../https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="../style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>



</head>
<body>
<div id="art-main">
<header class="art-header">


    <div class="art-shapes">
<div class="art-object56127928" data-left="0%"></div>
<div class="art-object277653934" data-left="0%"></div>
<div class="art-object0" data-left="95.07%"></div>
<div class="art-object727417801" data-left="61.21%"></div>

            </div>
<h1 class="art-headline" data-left="0%">
    <a href="#">Acusoft</a>
</h1>
<h2 class="art-slogan" data-left="0%">Gestión para un mejor futuro</h2>




                        <div id="art-flash-area">
                    <div id="art-flash-container">
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1400" height="350" id="art-flash-object">
                        <param name="movie" value="images/flash.swf">
                        <param name="quality" value="high">
                    	<param name="scale" value="exactfit">
                    	<param name="wmode" value="transparent">
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent">
                        <param name="swfliveconnect" value="true">
                        <!--[if !IE]>-->
                        <object type="application/x-shockwave-flash" data="images/flash.swf" width="1400" height="350">
                            <param name="quality" value="high">
                    	    <param name="scale" value="exactfit">
                            <param name="wmode" value="transparent">
                                                    	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent">
                            <param name="swfliveconnect" value="true">
                        <!--<![endif]-->
                          	<div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"></a></div>
                        <!--[if !IE]>-->
                        </object>
                        <!--<![endif]-->
                    </object>
                    </div>
                    </div>
                    
</header>
<nav class="art-nav">
    <div class="art-nav-inner">
    <ul class="art-hmenu"><li><a href="inicio.php" class="">Inicio</a></li><li><a href="contactenos.php" class="">Contactenos</a></li><li><a href="gestion.php" class="active">Gestión</a><ul class="active"><li><a href="gestion/planeador-de-actividades.php" class="">Planeador de Actividades</a></li><li><a href="gestion/diario-de-campo.php" class="active">Diario de Campo</a></li><li><a href="gestion/libro-de-novedades.php">Libro de Novedades</a></li><li><a href="gestion/formato-peso-y-talla.php">Formato Peso y Talla</a></li></ul></li><li><a href="seguimiento.php">Seguimiento</a></li></ul> 
        </div>
    </nav>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader">Reporte Novedades</h2>
                                                            
                          </div>
                          <div class="art-postcontent art-postcontent-0 clearfix"><p><span style="color: rgb(0, 0, 0); font-family: Tahoma; font-size: 13px; line-height: 20px; background-color: rgb(255, 255, 255);"><br></span></p>
                            <p>POR FAVOR INGRESEE LA FECHA EN LA QUE REQUIERE EL REPORTE</p>
                            <p>&nbsp; </p>
                            <form action="resultado_novedades.php"  method="post" name="form"> 
  <table width="470" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    
  <tr>
    
    
    
  
    
    <td colspan="2" bgcolor="#F1EFDC" class="titulo2"><p> FECHA INICIAL - FINAL:
      </p>
      <p>
        <input type="date" name="fecha">
        <input type="date" name="fecha2">
      </p>
      <form name="form1" method="post" action="">
        <input type="submit" name="enviar2" id="enviar" value="Consultar">
    </form>
      <p>
        </table>                            
                                
                                  
                        &nbsp;</p>
                  </p>
      <p><br>
                            </p>
                          </div>
                                
                

                          <a href="reportes.php">ATRAS</a></article></div>
                        <div class="art-layout-cell art-sidebar1"><div class="art-vmenublock clearfix">
        <div class="art-vmenublockheader">
            <h3 class="t">Navigation</h3>
        </div>
        <div class="art-vmenublockcontent">
<ul class="art-vmenu"><li><a href="inicio.php" class="">Inicio</a></li><li><a href="contactenos.php" class="">Contactenos</a></li><li><a href="gestion.php" class="active">Gestión</a><ul class="active"><li><a href="gestion/planeador-de-actividades.php" class="">Planeador de Actividades</a></li><li><a href="gestion/diario-de-campo.php" class="active">Diario de Campo</a></li><li><a href="gestion/libro-de-novedades.php">Libro de Novedades</a></li><li><a href="gestion/formato-peso-y-talla.php">Formato Peso y Talla</a></li></ul></li><li><a href="seguimiento.php">Seguimiento</a></li></ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Buscar</h3>
        </div>
        <div class="art-blockcontent"><div>
  <form action="#" class="art-search" method="get" name="searchform">
    <input type="text" value="" name="s" />
    <input type="submit" value="Search" name="search" class="art-search-button" />
  </form>
</div></div>
</div><div class="art-block clearfix">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><a href="inicio.php">
    <input type="button" onClick="window.location='../Cerrar Sesion.php'" value="Cerrar Sesion" />
  </a><a href="Cerrar Sesion.php"></a></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div class="art-blockcontent"></div>
</div></div>
                    </div>
                </div>
            </div><footer class="art-footer">
<p>Contactanos en redes sociales&nbsp;</p><p>Horario de atención: Lunes a viernes de 8 a.m. a 12 m. y de 2 p.m. a 6:00<br></p><p><br></p><p>Línea ventas Nal: 01 8000 41 11 11. Centro de Servicio: 01 8000 42 22 22</p><p><br></p>
</footer>

    </div>
    <p class="art-page-footer">
        <span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>
    </p>
</div>


</body></html>



<?php 
    }else { 
       /* echo "Estás accediendo a una página restringida, para ver su contenido debes estar registrado.<br /> 
        <a href='acceso.php'>Ingresar</a> / <a href='registro.php'>Regitrarme</a>"; */
		/* session_start(); */
		  /*header("Location: restriccion.php"); */
echo" <SCRIPT LANGUAGE='javascript'>"
  . "		location.href = 'acceso denegado.html';"
  . "		</SCRIPT>"
 ."";
    } 
?> 

