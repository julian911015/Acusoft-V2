
<?php

 include("../conexion.php");
 
if(isset($_POST['novedad']) && !empty($_POST['novedad'])&& 
isset($_POST['grupo']) && !empty($_POST['grupo']) && 
isset($_POST['estudiante']) && !empty($_POST['estudiante']) && 
isset($_POST['comentario']) && !empty($_POST['comentario']) && 
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
	
	
	mysql_query("INSERT INTO reporte_novedades (novedad, grupo, estudiante, comentario, fecha)
	VALUES ('$_POST[novedad]','$_POST[grupo]','$_POST[estudiante]','$_POST[comentario]','$_POST[fecha]')",$conexio);
	
    
	
	?> 

<style type="text/css">
.NEGRITA {
	text-align: center;
	color: #F00;
	font-weight: bold;
}
.centrado .NEGRITA .tamaño .azul .NEGRITA {
	color: #00F;
}
</style>


<p>&nbsp;</p>
<p class="NEGRITA">INFORMACION!!</p>
<p>&nbsp;</p>
<p class="tamaño">EL REGISTRO DE LA NOVEDAD SE HA CREADO SATISFACTORIAMENTE.</p>
<p>&nbsp;</p>
<p><a href="libro-de-novedades.php" class="centrado"> <span class="NEGRITA"><span class="tamaño"><span class="azul"><span class="NEGRITA">Volver al Inicio</span></span></span></span></a></p>


               



			  <?php 
	
	
	
	
	
	
	
	
	
	}else
	
	{
		
		?> 

<style type="text/css">
.NEGRITA {
	text-align: center;
	color: #F00;
	font-weight: bold;
}
.centrado .NEGRITA .tamaño .azul .NEGRITA {
	color: #00F;
}
</style>


<p>&nbsp;</p>
<p class="NEGRITA">Error!!</p>
<p>&nbsp;</p>
<p class="tamaño">Por favor diligencie correctamente la informacion e intente nuevamente.</p>
<p>&nbsp;</p>
<p><a href="libro-de-novedades.php" class="centrado"> <span class="NEGRITA"><span class="tamaño"><span class="azul"><span class="NEGRITA">Volver a intentar</span></span></span></span></a></p>


               



			  <?php 
		
		
		
		
		
		
		
		
		
		
	

	}


?>