<?php

header('Content-Type: text/html; charset=UTF-8');
// Datos para la conexion
$host = 'localhost';
$database = 'forma';
$username = 'root';
$password = 'hola.123';

// Conectarse a MySQL
$connection = mysql_connect($host, $username, $password);
if (!$connection) {
    die('ola k ase fallo la conexión con el servidor: ' . mysql_error());
}

// Seleccionar nuestra base de datos
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
    die ('ola k ase fallo la  base de datos: ' . mysql_error());
}
else {
 echo 'Conexion exitosa.';

}

$user = $_POST['usuario'];
$email = $_POST['email'];
$password = $_POST['password'];


mysql_query("INSERT INTO usuario(user, email, password)VALUES('$user','$email','$password')",$connection);
if(mysql_query){

	echo "no realizó el query";
}else{

	echo "query exitoso";
}

mysql_close($connection);

header("Location: index.html");
exit();
?>