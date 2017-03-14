<?php

require_once("dompdf/dompdf_config.inc.php");

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
 
$query = "SELECT * FROM reporte_actividades ORDER BY fecha" ;

$result= mysql_query($query, $conexio);
$total=mysql_num_rows($result);


//creamos la tabla para visualizar los datos


$codigoHTML='
 

 
 <body>
 
 <div align="center"> 
 
  <BR><strong>ACUSOFT</strong><BR>
  
  <BR>REPORTE ACTIVIDADES<BR><BR>
 <table border ="1" bordercolor = "#1A577A" width="100%" >
 
<tr>
  <td width="12%"><strong class="CENTRO" > <span class="italica">ACTIVIDAD</span></strong></td>
  <td width="8%"><strong>GRUPO</strong></td>
  <td width="35%"><strong>COMENTARIO</strong></td>
  <td width="19%"><strong>FECHA</strong></td></tr>
  
  ';
 
       
    while ( $row = mysql_fetch_array($result) )
     
    {
         $codigoHTML.='
		 
		 
	  <tr>
	  <td>'.$row['actividad'].'</td>
	  <td>'.$row['grupo'].'</td>  
	  <td>'.$row['comentario'].'</td>     
	  <td>'.$row['fecha'].'</td> 
	  </tr> 
	  
	  ';
	  
    }
	
	
	 $codigoHTML.='
	 
	</table>   
	
  </div>          
  </body>
  ';
  
  

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte Actividades.pdf");
?>

