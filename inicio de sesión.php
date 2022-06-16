#UPCI<?php
<?php

requiere  'conexión.php' ;

$ usuario  	= $ _POST [ "usuario" ];
$ contrasena = $ _POST [ "contrasena" ];
$ rol  	= $ _POST [ "rol" ];


$ queryusuario = mysqli_query ( $ conn , "SELECT * FROM login WHERE usuario ='$usuario' and contrasena = '$contrasena' and rol = '$rol'" );
$ nr = mysqli_num_rows ( $ queryusuario );  
	
si ( $ nr == 1 )  
	{
		if ( $ rol == "Usuario" )
			{	
				cabecera ( "ubicacion: prueba2.html" );
			}
		si  no ( $ rol == "Administrador" )
			{
				header ( "ubicacion: prueba1.html" );
			}
	}
más
{
	echo  "<script> alert('Usuario, contraseña o rol incorrecto.');window.location= 'index.php' </script>" ;
}


?>
