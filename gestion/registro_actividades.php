<?php

 include("../conexion.php");
 
if(isset($_POST['grupo']) && !empty($_POST['grupo'])&& 
isset($_POST['actividad']) && !empty($_POST['actividad'])  &&
isset($_POST['fecha']) && !empty($_POST['fecha']))




{
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
	
	
	mysql_query("INSERT INTO reporte_actividades (actividad, grupo, comentario, fecha)
	VALUES ('$_POST[actividad]','$_POST[grupo]','$_POST[comentario]','$_POST[fecha]')",$conexio);
	
    
	
	?> 

    
      <!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>CAMPOS VACIOS</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="../style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="../style.responsive.css" media="all">


    <script src="../jquery.js"></script>
    <script src="../script.js"></script>
    <script src="../script.responsive.js"></script>



<script>jQuery(function($) {
    'use strict';
    if ($.fn.slider) {
        $(".art-slidecontainer8c5962028c0a41e58a50717c124e21b5").each(function () {
            var slideContainer = $(this), tmp;
            var inner = $(".art-slider-inner", slideContainer);
            var helper = null;

            if ($.support.transition) {
                helper = new BackgroundHelper();
                helper.init("fade", "next", $(".art-slide-item", inner).first().css($.support.transition.prefix + "transition-duration"));
                inner.children().each(function () {
                    helper.processSlide($(this));
                });

            }


            inner.children().eq(0).addClass("active");
            slideContainer.slider({
                pause: 2600,
                speed: 600,
                repeat: true,
                animation: "fade",
                direction: "next",
                navigator: slideContainer.siblings(".art-slidenavigator8c5962028c0a41e58a50717c124e21b5"),
                helper: helper                
            });
        });
    }
});
</script><style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 {
    position: relative;
        width: 360px;
    height: 240px;
        }

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .art-slide-item
{

}



.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .art-slide-item {
    -webkit-transition: 600ms ease-in-out opacity;
    -moz-transition: 600ms ease-in-out opacity;
    -ms-transition: 600ms ease-in-out opacity;
    -o-transition: 600ms ease-in-out opacity;
    transition: 600ms ease-in-out opacity;
    position: absolute;
    display: none;
	left: 0;
	top: 0;
	opacity: 0;
    width:  100%;
    height: 100%;
}

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .active, .art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .next, .art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .prev {
    display: block;
}

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .active {
    opacity: 1;
}

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .next, .art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .prev {
    width: 100%;
}

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .next.forward, .art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .prev.back {
    opacity: 1;
}

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .active.forward {
    opacity: 0;
}

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .active.back {
    opacity: 0;
}


.art-slide8c5962028c0a41e58a50717c124e21b50 {
    background-image:  url('../images/slide8c5962028c0a41e58a50717c124e21b50.jpg');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slide8c5962028c0a41e58a50717c124e21b51 {
    background-image:  url('../images/slide8c5962028c0a41e58a50717c124e21b51.jpg');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slide8c5962028c0a41e58a50717c124e21b52 {
    background-image:  url('../images/slide8c5962028c0a41e58a50717c124e21b52.jpg');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slide8c5962028c0a41e58a50717c124e21b53 {
    background-image:  url('../images/slide8c5962028c0a41e58a50717c124e21b53.jpg');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}


.art-slidenavigator8c5962028c0a41e58a50717c124e21b5 {
  display: inline-block;
  position: absolute;
  direction: ltr !important;
  top: 216px;
  left: 76.67%;
  z-index: 101;
  line-height: 0 !important;
  -webkit-background-origin: border !important;
  -moz-background-origin: border !important;
  background-origin: border-box !important;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-align: center;
    white-space: nowrap;
    }
.art-slidenavigator8c5962028c0a41e58a50717c124e21b5
{
background: #FFB861;background: linear-gradient(top, rgba(255, 218, 173, 0.6) 0, rgba(255, 147, 15, 0.6) 100%) no-repeat;background: -webkit-linear-gradient(top, rgba(255, 218, 173, 0.6) 0, rgba(255, 147, 15, 0.6) 100%) no-repeat;background: -moz-linear-gradient(top, rgba(255, 218, 173, 0.6) 0, rgba(255, 147, 15, 0.6) 100%) no-repeat;background: -o-linear-gradient(top, rgba(255, 218, 173, 0.6) 0, rgba(255, 147, 15, 0.6) 100%) no-repeat;background: -ms-linear-gradient(top, rgba(255, 218, 173, 0.6) 0, rgba(255, 147, 15, 0.6) 100%) no-repeat;background: linear-gradient(top, rgba(255, 218, 173, 0.6) 0, rgba(255, 147, 15, 0.6) 100%) no-repeat;-svg-background: linear-gradient(top, rgba(255, 218, 173, 0.6) 0, rgba(255, 147, 15, 0.6) 100%) no-repeat;
-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;


padding:7px;





}
.art-slidenavigator8c5962028c0a41e58a50717c124e21b5 > a
{
background: #AD5F00;background: #AD5F00;background: #AD5F00;background: #AD5F00;background: #AD5F00;background: #AD5F00;background: #AD5F00;-svg-background: #AD5F00;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigator8c5962028c0a41e58a50717c124e21b5 > a.active
{
background: #82BEDE;background: #82BEDE;background: #82BEDE;background: #82BEDE;background: #82BEDE;background: #82BEDE;background: #82BEDE;-svg-background: #82BEDE;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigator8c5962028c0a41e58a50717c124e21b5 > a:hover
{
background: #25698D;background: #25698D;background: #25698D;background: #25698D;background: #25698D;background: #25698D;background: #25698D;-svg-background: #25698D;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}

</style></head>
<body>
<div id="art-main">
<header class="art-header">


    <div class="art-shapes">
<div class="art-object56127928" data-left="0%"></div>
<div class="art-object277653934" data-left="0%"></div>
<div class="art-object0" data-left="95.07%"></div>
<div class="art-object727417801" data-left="70%"></div>

            </div>
<h1 class="art-headline" data-left="0%">
    <a href="#">Acusoft</a>
</h1>
<h2 class="art-slogan" data-left="0%">Gestión para un mejor futuro</h2>




                        <div id="art-flash-area">
                    <div id="art-flash-container">
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1600" height="350" id="art-flash-object">
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
    <ul class="art-hmenu"><li><a href="../inicio.php" class="">Inicio</a></li><li><a href="../contactenos.php" >Contactenos</a></li><li><a href="../gestion.php">Gestión</a><ul><li><a href="planeador-de-actividades.php">Planeador de Actividades</a></li><li><a href="diario-de-campo.php">Diario de Campo</a></li><li><a href="libro-de-novedades.php">Libro de Novedades</a></li><li><a href="formato-peso-y-talla.php">Formato Peso y Talla</a></li></ul></li><li><a href="../seguimiento.php">Seguimiento</a></li></ul> 
        </div>
    </nav>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">REGISTRO ACTIVIDAD</span></h2>
                                                            
                                    </div>
                                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
<p>&nbsp;</p>
<p>La actividad se ha guardado correctamente, si necesita realizar mas registros por favor valla a atras</p>
<p><span style="color: rgb(84, 84, 84); font-family: arial, sans-serif; font-size: small; line-height: 18.200000762939453px; background-color: rgb(255, 255, 255);"><br>
</span><span style="font-weight: bold;"><a href="planeador-de-actividades.php">ATRAS</a><br>
</span></p>
<p><span style="font-weight: bold;"><br></span></p>
    </div>
    </div>
</div>
</div>
                                
                

</article></div>
                        <div class="art-layout-cell art-sidebar1"><div class="art-vmenublock clearfix">
        <div class="art-vmenublockheader">
            <h3 class="t">Navigation</h3>
        </div>
        <div class="art-vmenublockcontent">
<ul class="art-vmenu"><li><a href="../inicio.php" class="">Inicio</a></li><li><a href="../contactenos.php" >Contactenos</a></li><li><a href="../gestion.php">Gestión</a><ul><li><a href="planeador-de-actividades.php">Planeador de Actividades</a></li><li><a href="diario-de-campo.php">Diario de Campo</a></li><li><a href="libro-de-novedades.php">Libro de Novedades</a></li><li><a href="formato-peso-y-talla.php">Formato Peso y Talla</a></li></ul></li><li><a href="../seguimiento.php">Seguimiento</a></li></ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Buscar</h3>
        </div>
        <div class="art-blockcontent"><div>
  <form action="../imlogin.php"  method="post" name="form1">
    <input type="text" value="" name="s" />
    <input type="submit" value="Search" name="search" class="art-search-button" />
  </form>
</div></div>
</div><div class="art-block clearfix">
        <div class="art-blockheader"></div>
        <div class="art-blockcontent"><form action="../imlogin.php" method="post" name="form1" id="form-login">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><input type="button" onClick="window.location='../Cerrar Sesion.php'" value="Cerrar Sesion" />&nbsp;</p>
    &nbsp;</p>
    
    &nbsp;</p>
    <p>&nbsp; </p>
        </form></div>
</div></div>
                    </div>
                </div>
            </div><footer class="art-footer">
<p>Contactanos en redes sociales&nbsp;</p>
<p>www.facebook.com/Acusoft<br></p><p><br></p>
<p>Línea ventas Cel: 318487335. Centro de Servicio: 3162282464</p><p><br></p>
</footer>

    </div>
    <p class="art-page-footer">
        <span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>
    </p>
</div>


</body></html>
               
			   



			  <?php 
	
	
	
	
	
	
	
	
	
	}else
	
	{
		
		?> 
      <!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>CAMPOS VACIOS</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="../style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="../style.responsive.css" media="all">


    <script src="../jquery.js"></script>
    <script src="../script.js"></script>
    <script src="../script.responsive.js"></script>



<script>jQuery(function($) {
    'use strict';
    if ($.fn.slider) {
        $(".art-slidecontainer8c5962028c0a41e58a50717c124e21b5").each(function () {
            var slideContainer = $(this), tmp;
            var inner = $(".art-slider-inner", slideContainer);
            var helper = null;

            if ($.support.transition) {
                helper = new BackgroundHelper();
                helper.init("fade", "next", $(".art-slide-item", inner).first().css($.support.transition.prefix + "transition-duration"));
                inner.children().each(function () {
                    helper.processSlide($(this));
                });

            }


            inner.children().eq(0).addClass("active");
            slideContainer.slider({
                pause: 2600,
                speed: 600,
                repeat: true,
                animation: "fade",
                direction: "next",
                navigator: slideContainer.siblings(".art-slidenavigator8c5962028c0a41e58a50717c124e21b5"),
                helper: helper                
            });
        });
    }
});
</script><style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 {
    position: relative;
        width: 360px;
    height: 240px;
        }

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .art-slide-item
{

}



.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .art-slide-item {
    -webkit-transition: 600ms ease-in-out opacity;
    -moz-transition: 600ms ease-in-out opacity;
    -ms-transition: 600ms ease-in-out opacity;
    -o-transition: 600ms ease-in-out opacity;
    transition: 600ms ease-in-out opacity;
    position: absolute;
    display: none;
	left: 0;
	top: 0;
	opacity: 0;
    width:  100%;
    height: 100%;
}

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .active, .art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .next, .art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .prev {
    display: block;
}

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .active {
    opacity: 1;
}

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .next, .art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .prev {
    width: 100%;
}

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .next.forward, .art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .prev.back {
    opacity: 1;
}

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .active.forward {
    opacity: 0;
}

.art-slidecontainer8c5962028c0a41e58a50717c124e21b5 .active.back {
    opacity: 0;
}


.art-slide8c5962028c0a41e58a50717c124e21b50 {
    background-image:  url('../images/slide8c5962028c0a41e58a50717c124e21b50.jpg');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slide8c5962028c0a41e58a50717c124e21b51 {
    background-image:  url('../images/slide8c5962028c0a41e58a50717c124e21b51.jpg');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slide8c5962028c0a41e58a50717c124e21b52 {
    background-image:  url('../images/slide8c5962028c0a41e58a50717c124e21b52.jpg');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slide8c5962028c0a41e58a50717c124e21b53 {
    background-image:  url('../images/slide8c5962028c0a41e58a50717c124e21b53.jpg');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}


.art-slidenavigator8c5962028c0a41e58a50717c124e21b5 {
  display: inline-block;
  position: absolute;
  direction: ltr !important;
  top: 216px;
  left: 76.67%;
  z-index: 101;
  line-height: 0 !important;
  -webkit-background-origin: border !important;
  -moz-background-origin: border !important;
  background-origin: border-box !important;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-align: center;
    white-space: nowrap;
    }
.art-slidenavigator8c5962028c0a41e58a50717c124e21b5
{
background: #FFB861;background: linear-gradient(top, rgba(255, 218, 173, 0.6) 0, rgba(255, 147, 15, 0.6) 100%) no-repeat;background: -webkit-linear-gradient(top, rgba(255, 218, 173, 0.6) 0, rgba(255, 147, 15, 0.6) 100%) no-repeat;background: -moz-linear-gradient(top, rgba(255, 218, 173, 0.6) 0, rgba(255, 147, 15, 0.6) 100%) no-repeat;background: -o-linear-gradient(top, rgba(255, 218, 173, 0.6) 0, rgba(255, 147, 15, 0.6) 100%) no-repeat;background: -ms-linear-gradient(top, rgba(255, 218, 173, 0.6) 0, rgba(255, 147, 15, 0.6) 100%) no-repeat;background: linear-gradient(top, rgba(255, 218, 173, 0.6) 0, rgba(255, 147, 15, 0.6) 100%) no-repeat;-svg-background: linear-gradient(top, rgba(255, 218, 173, 0.6) 0, rgba(255, 147, 15, 0.6) 100%) no-repeat;
-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;


padding:7px;





}
.art-slidenavigator8c5962028c0a41e58a50717c124e21b5 > a
{
background: #AD5F00;background: #AD5F00;background: #AD5F00;background: #AD5F00;background: #AD5F00;background: #AD5F00;background: #AD5F00;-svg-background: #AD5F00;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigator8c5962028c0a41e58a50717c124e21b5 > a.active
{
background: #82BEDE;background: #82BEDE;background: #82BEDE;background: #82BEDE;background: #82BEDE;background: #82BEDE;background: #82BEDE;-svg-background: #82BEDE;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigator8c5962028c0a41e58a50717c124e21b5 > a:hover
{
background: #25698D;background: #25698D;background: #25698D;background: #25698D;background: #25698D;background: #25698D;background: #25698D;-svg-background: #25698D;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}

</style></head>
<body>
<div id="art-main">
<header class="art-header">


    <div class="art-shapes">
<div class="art-object56127928" data-left="0%"></div>
<div class="art-object277653934" data-left="0%"></div>
<div class="art-object0" data-left="95.07%"></div>
<div class="art-object727417801" data-left="70%"></div>

            </div>
<h1 class="art-headline" data-left="0%">
    <a href="#">Acusoft</a>
</h1>
<h2 class="art-slogan" data-left="0%">Gestión para un mejor futuro</h2>




                        <div id="art-flash-area">
                    <div id="art-flash-container">
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1600" height="350" id="art-flash-object">
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
    <ul class="art-hmenu"><li><a href="../inicio.php" class="">Inicio</a></li><li><a href="../contactenos.php" >Contactenos</a></li><li><a href="../gestion.php">Gestión</a><ul><li><a href="planeador-de-actividades.php">Planeador de Actividades</a></li><li><a href="diario-de-campo.php">Diario de Campo</a></li><li><a href="libro-de-novedades.php">Libro de Novedades</a></li><li><a href="formato-peso-y-talla.php">Formato Peso y Talla</a></li></ul></li><li><a href="../seguimiento.php">Seguimiento</a></li></ul> 
        </div>
    </nav>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">ERROR REGISTRO ACTIVIDAD</span></h2>
                                                            
                                    </div>
                                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
<p>&nbsp;</p>
<p>Por favor valide la informacion de registro de actividades</p>
<p><span style="color: rgb(84, 84, 84); font-family: arial, sans-serif; font-size: small; line-height: 18.200000762939453px; background-color: rgb(255, 255, 255);"><br>
</span><span style="font-weight: bold;"><a href="planeador-de-actividades.php">ATRAS</a><br>
</span></p>
<p><span style="font-weight: bold;"><br></span></p>
    </div>
    </div>
</div>
</div>
                                
                

</article></div>
                        <div class="art-layout-cell art-sidebar1"><div class="art-vmenublock clearfix">
        <div class="art-vmenublockheader">
            <h3 class="t">Navigation</h3>
        </div>
        <div class="art-vmenublockcontent">
<ul class="art-vmenu"><li><a href="../inicio.php" class="">Inicio</a></li><li><a href="../contactenos.php" >Contactenos</a></li><li><a href="../gestion.php">Gestión</a><ul><li><a href="planeador-de-actividades.php">Planeador de Actividades</a></li><li><a href="diario-de-campo.php">Diario de Campo</a></li><li><a href="libro-de-novedades.php">Libro de Novedades</a></li><li><a href="formato-peso-y-talla.php">Formato Peso y Talla</a></li></ul></li><li><a href="../seguimiento.php">Seguimiento</a></li></ul>
                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Buscar</h3>
        </div>
        <div class="art-blockcontent"><div>
  <form action="../imlogin.php"  method="post" name="form1">
    <input type="text" value="" name="s" />
    <input type="submit" value="Search" name="search" class="art-search-button" />
  </form>
</div></div>
</div><div class="art-block clearfix">
        <div class="art-blockheader"></div>
        <div class="art-blockcontent"><form action="../imlogin.php" method="post" name="form1" id="form-login">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><a href="../Cerrar Sesion.php">Cerrar Sesión</a></p>
    &nbsp;</p>
    
    &nbsp;</p>
    <p>&nbsp; </p>
        </form></div>
</div></div>
                    </div>
                </div>
            </div><footer class="art-footer">
<p>Contactanos en redes sociales&nbsp;</p>
<p>www.facebook.com/Acusoft<br></p><p><br></p>
<p>Línea ventas Cel: 318487335. Centro de Servicio: 3162282464</p><p><br></p>
</footer>

    </div>
    <p class="art-page-footer">
        <span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>
    </p>
</div>


</body></html>
               
			   


			  <?php 
		
		
		
		
		
		
		
		
		
		
	

	}


?>