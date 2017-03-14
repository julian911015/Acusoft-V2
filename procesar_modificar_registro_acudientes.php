<?php

 include("conexion.php");
 
if(isset($_POST['acudiente']) )




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
	
	
	$codigo=$_POST['acudiente'];
	
	
	
	$registro=mysql_query("SELECT * FROM acudientes WHERE codigo_estudiante = '$codigo'");
	
	
	
	
	
	while($reg=mysql_fetch_array($registro))
	
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
<p class="azul"><strong>ESTA ES LA INFORMACION DEL ACUDIENTE CONSULTADO:</strong></p>
<p>&nbsp;</p>
<p class="tamaño"></p>

			  <?php 
			  
		echo "ESTUDIANTE ENCARGADO   =  ".$reg['codigo_estudiante']."<BR>";
		echo "NOMBRE   =  ".$reg['nombre']."<BR>";
		echo "APELLIDO =  ".$reg['apellido']."<BR>";
		echo "TELEFONO     =  ".$reg['telefono']."<BR>";
		echo "DIRECCION =  ".$reg['direccion']."<BR>";
		echo "CORREO     =  ".$reg['correo']."<BR>";
		
		
		
		?>
		
		<p><a href="modificar_dato_acudientes.php" class="centrado"> <span class="NEGRITA"><span class="tamaño"><span class="azul"><span class="NEGRITA">MODIFICAR REGISTRO </span></span></span></span></a></p>
		
		  <?php 
	
	
		
		}
	


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
<p><a href="modificar_registro_acudientes.php" class="centrado"> <span class="NEGRITA"><span class="tamaño"><span class="azul"><span class="NEGRITA">Volver a intentar</span></span></span></span></a></p>


               



			  <?php 
		
		
		
		
		
		
		
		
		
		
	

	}


?>