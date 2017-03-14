<?php
/*    
    Instituto Tecnico central de la Salle
Descripcion:   Instancia para coneccion a base de datos 
*/
 
$conexio;
function conectar_bd()
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
}  
?>