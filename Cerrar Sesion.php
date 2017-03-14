<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
    session_start(); 
    include('conexion.php'); // incluímos los datos de acceso a la BD 
    // comprobamos que se haya iniciado la sesión 
	
    if(isset($_SESSION['nombre_user'])) { 
        session_destroy(); 
		
		
        echo" <SCRIPT LANGUAGE='javascript'>"
            . "		location.href = 'index.php';"
            . "		</SCRIPT>"
            ."";
    }else { 
        echo "Operación incorrecta."; 
    } 
?> 
</body>
</html>