<?php

 include("conexion.php");
 
if(isset($_POST['codigo']) && !empty($_POST['codigo'])&& 
isset($_POST['nombre']) && !empty($_POST['nombre']) && 
isset($_POST['apellido']) && !empty($_POST['apellido']) && 
isset($_POST['telefono']) && !empty($_POST['telefono']) && 
isset($_POST['direccion']) && !empty($_POST['direccion']) && 
isset($_POST['correo']) && !empty($_POST['correo']) )




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
	
	
	$codigo=$_POST['codigo'];
	
	$registro = mysql_query("SELECT * FROM acudientes WHERE codigo_estudiante = '$codigo'",$conexio) or die ("Problema al realizar la consulta: ".mysql_error());
	
   
   if ($reg=mysql_fetch_array($registro))
	
	{
		mysql_query("DELETE FROM acudientes WHERE codigo_estudiante = '$codigo'",$conexio) or die ("Problema al realizar la consulta: ".mysql_error());
		
		
		
		mysql_query("INSERT INTO acudientes (codigo_estudiante, nombre, apellido, telefono, direccion, correo)
	VALUES ('$_POST[codigo]','$_POST[nombre]','$_POST[apellido]','$_POST[telefono]','$_POST[direccion]','$_POST[correo]')",$conexio);
		
		}
		
		
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
<p class="tamaño">EL REGISTRO DEL ACUDIENTE SE HA MODIFICADO SATISFACTORIAMENTE.</p>
<p>&nbsp;</p>
<p><a href="modificar_registro_acudientes.php" class="centrado"> <span class="NEGRITA"><span class="tamaño"><span class="azul"><span class="NEGRITA">Volver al Inicio</span></span></span></span></a></p>


               



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
<p><a href="modificar_dato_acudientes.php" class="centrado"> <span class="NEGRITA"><span class="tamaño"><span class="azul"><span class="NEGRITA">Volver a intentar</span></span></span></span></a></p>


               



			  <?php 
		
		
		
		
		
		
		
		
		
		
	

	}


?>