<!DOCTYPE html>


<?php 


    session_start(); 
    include('../conexion.php'); // incluímos los datos de acceso a la BD 
    // comprobamos que se haya iniciado la sesión 
		
    if(isset($_SESSION['nombre_user'])) { 
?>



<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>libro-de-novedades</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="../https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="../style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="../style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="../style.responsive.css" media="all">
    <style type="text/css">
    .rojo {	color: rgb(255,0,0);
}
.rojo {	color: #FF0000;
}
    .tahoma {
	font-family: Tahoma, Geneva, sans-serif;
}
    .tamaño {
	font-size: 14px;
}
    </style>
    <script src="../jquery.js"></script>
    <script src="../script.js"></script>
    <script src="../script.responsive.js"></script>



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
                        <param name="movie" value="../images/flash.swf">
                        <param name="quality" value="high">
                    	<param name="scale" value="exactfit">
                    	<param name="wmode" value="transparent">
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent">
                        <param name="swfliveconnect" value="true">
                        <!--[if !IE]>-->
                        <object type="application/x-shockwave-flash" data="../images/flash.swf" width="1400" height="350">
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
    <ul class="art-hmenu"><li><a href="../inicio.php" class="">Inicio</a></li><li><a href="../contactenos.php" class="">Contactenos</a></li><li><a href="../gestion.php" class="active">Gestión</a><ul class="active"><li><a href="planeador-de-actividades.php" class="">Planeador de Actividades</a></li><li><a href="../gestion/diario-de-campo.php" class="">Diario de Campo</a></li><li><a href="libro-de-novedades.php" class="active">Libro de Novedades</a></li><li><a href="../gestion/formato-peso-y-talla.php">Formato Peso y Talla</a></li></ul></li><li><a href="../seguimiento.php">Seguimiento</a></li></ul> 
  </div>
</nav>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">Libro de Novedades</span></h2>
                                                            
</div>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                
                                <div class="tahoma"> <span class="tamaño">Por favor diligenciar la información de las novedades presentadas en el siguiente formulario: </span></div>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
<table width="470" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>     
      <form  action="registrar_novedad.php" method="post" name="form">
      <tr>
        <table width="470" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
                                        
          <tr>
                                          
                                          
                                          
            <td height="40" colspan="2" bgcolor="#F1EFDC" class="titulo2"><label>
            <span class="rojo">*</span>Novedad Presentada:</label></td>
          </tr>
          <tr>
                                        
            <td colspan="2" bgcolor="#F1EFDC" class="titulo2"> 
                                          
                                          
                                          
              <?php

global $conexio;
    //Definir datos de conexion con el servidor MySQL
    $elUsr = "a6381931_root";
    $elPw  = "jdelgado911015";
    $elServer ="mysql6.000webhost.com";
    $laBd = "a6381931_acusoft";
	
//Conectar
    $conexio = mysql_connect($elServer, $elUsr , $elPw) or die (mysql_error("Error al conectar el Host"));
     
    //Seleccionar la BD a utilizar
    mysql_select_db($laBd, $conexio ) or die (mysql_error("Problema al conectar la base de datos"));
	
	
	
	
	    //incluimos la lista desplegable para las novedade presentadas
 
$query = 'SELECT * FROM novedades';
$result= mysql_query($query, $conexio);
 
?>
                                          
  <select name="novedad">
    
  <option value=""> Seleccione
    
    <?php
    while ( $row = mysql_fetch_array($result) )
    {
        ?>
    
    <option value=" <?php echo $row['codigo'] ?> " >
      <?php echo $row['descripcion']; ?>
      </option>
    
    <?php
    }
    ?>
  </select>
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                          
            </td>
          </tr>
          <tr>
                                        
            <td height="40" colspan="2" bgcolor="#F1EFDC" class="titulo2">  <p>&nbsp;</p>
              <p>
                <label><span class="rojo">*</span>Grupo:</label>
            </p></td>
          </tr>
          <tr>
                                        
            <td colspan="2" bgcolor="#F1EFDC" class="titulo2"> 
                                          
                                          
                                          
                                          
                                          
  <?php

global $conexio;
    //Definir datos de conexion con el servidor MySQL
    $elUsr = "a6381931_root";
    $elPw  = "jdelgado911015";
    $elServer ="mysql6.000webhost.com";
    $laBd = "a6381931_acusoft";
	
//Conectar
    $conexio = mysql_connect($elServer, $elUsr , $elPw) or die (mysql_error("Error al conectar el Host"));
     
    //Seleccionar la BD a utilizar
    mysql_select_db($laBd, $conexio ) or die (mysql_error("Problema al conectar la base de datos"));
	
	
	
	    //incluimos la lista desplegable para los grupos
 
$query = 'SELECT * FROM grupos';
$result= mysql_query($query, $conexio);

?>
  <select name="grupo">
    <option value=""> Seleccione
      <?php
    while ( $row = mysql_fetch_array($result) )
    {
        ?>
      <option value=" <?php echo $row['codigo'] ?> " > <?php echo $row['descripcion']; ?> </option>
    <?php
    }
    ?>
  </select></td>
          </tr>
          <tr>
                                        
            <td height="40" colspan="2" bgcolor="#F1EFDC" class="titulo2">   <p>
              <label><br>
                <br>
              <span class="rojo">*</span>Estudiante:</label>
              </p>
            <p>&nbsp;</p></td>
          </tr>
          <tr>
                                        
            <td height="40" colspan="2" bgcolor="#F1EFDC">
                                          
                                          
                                          
                                          
              <?php

global $conexio;
    //Definir datos de conexion con el servidor MySQL
    $elUsr = "a6381931_root";
    $elPw  = "jdelgado911015";
    $elServer ="mysql6.000webhost.com";
    $laBd = "a6381931_acusoft";
	
//Conectar
    $conexio = mysql_connect($elServer, $elUsr , $elPw) or die (mysql_error("Error al conectar el Host"));
     
    //Seleccionar la BD a utilizar
    mysql_select_db($laBd, $conexio ) or die (mysql_error("Problema al conectar la base de datos"));
	
	
	
	
	    //incluimos la lista desplegable para los estudiantes
 
$query = 'SELECT * FROM estudiantes';
$result= mysql_query($query, $conexio);
 
?>
                                          
  <select name="estudiante">
    
    <option value=""> Seleccione
      
      <?php
    while ( $row = mysql_fetch_array($result) )
    {
        ?>
      
      <option value=" <?php echo $row['codigo'] ?> " >
        <?php echo $row['nombre']; ?>
        </option>
    
    <?php
    }
    ?>
  </select>
                                          
                                          
                                          
                                          
                                          
                                          
                                          
            </td>
          </tr>
          <tr>
                                        
            <td height="40" colspan="2" bgcolor="#F1EFDC" class="titulo2">   <label>    <span class="rojo">*</span>Comentario:</label> </td>
          </tr>
          <tr>
                                        
            <td height="40" colspan="2" bgcolor="#F1EFDC"><label for="comentario"></label>
            <textarea name="comentario" id="comentario"></textarea></td>
          </tr>
          <tr>
                                        
            <td height="40" colspan="2" bgcolor="#F1EFDC" class="titulo2">   <label><span class="rojo">*</span>Fecha:</label> </td>
          </tr>
          <tr>
                                        
            <td height="40" colspan="2" bgcolor="#F1EFDC">
                                          
                                          
                                          
                                          
              <input type="date" name="fecha">
                                          
                                          
                                          
                                          
                                          
            </td>
          </tr>
          <tr>
                                        
                                        
          <tr>
                                          
                                          
            <td width="270" height="60"  class="titulo3">
              <div align="center">
                <input type="submit" name="enviar" value="Registrar"  class="boton" />
              </div>
            </td>
            <td width="270" >  <div align="center"><span class="titulo3">
              <input type="reset" value="Borrar"  class="boton"  /> 
            </span></div></td>
          </tr>
  </table>                            
                                    
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        </article></div>
                                    <div class="art-layout-cell art-sidebar1"><div class="art-vmenublock clearfix">
                                      <div class="art-vmenublockheader">
                                        <h3 class="t">Navigation</h3>
                                      </div>
                                      <div class="art-vmenublockcontent">
  <ul class="art-vmenu"><li><a href="../inicio.php" class="">Inicio</a></li><li><a href="../contactenos.php" class="">Contactenos</a></li><li><a href="../gestion.php" class="active">Gestión</a><ul class="active"><li><a href="planeador-de-actividades.php" class="">Planeador de Actividades</a></li><li><a href="../gestion/diario-de-campo.php" class="">Diario de Campo</a></li><li><a href="libro-de-novedades.php" class="active">Libro de Novedades</a></li><li><a href="../gestion/formato-peso-y-talla.php">Formato Peso y Talla</a></li></ul></li><li><a href="../seguimiento.php">Seguimiento</a></li></ul>
                                        
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
  <div class="art-blockcontent">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><input type="button" onClick="window.location='../Cerrar Sesion.php'" value="Cerrar Sesion" />&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
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