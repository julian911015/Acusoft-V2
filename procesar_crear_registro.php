
<?php

 include("conexion.php");
 
if(isset($_POST['cod']) && !empty($_POST['cod'])&& 
isset($_POST['nom']) && !empty($_POST['nom']) && 
isset($_POST['ape']) && !empty($_POST['ape']) && 
isset($_POST['ed']) && !empty($_POST['ed']) && 
isset($_POST['esta']) && !empty($_POST['esta']) && 
isset($_POST['pe']) && !empty($_POST['pe']) && 
isset($_POST['grupo']) && !empty($_POST['grupo']))




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
	
	
	mysql_query("INSERT INTO estudiantes (codigo, nombre, apellido, edad, estatura, peso, grupo)
	VALUES ('$_POST[cod]','$_POST[nom]','$_POST[ape]','$_POST[ed]','$_POST[esta]','$_POST[pe]','$_POST[grupo]')",$conexio);
	

	
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
<p class="tamaño">EL REGISTRO DEL ESTUDIANTE SE HA CREADO SATISFACTORIAMENTE.</p>
<p>&nbsp;</p>
<p><a href="crear_registro.php" class="centrado"> <span class="NEGRITA"><span class="tamaño"><span class="azul"><span class="NEGRITA">Volver al Inicio</span></span></span></span></a></p>


               



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
<p><a href="crear_registro.php" class="centrado"> <span class="NEGRITA"><span class="tamaño"><span class="azul"><span class="NEGRITA">Volver a intentar</span></span></span></span></a></p>


               



			  <?php 
		
		
		
		
		
		
		
		
		
		
	

	}


?>