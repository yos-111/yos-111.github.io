<?php

/* CONEXIÓN */

$conexion = mysqli_connect(
"localhost",
"root",
"",
"visitantes_web"
);

/* VERIFICAR CONEXIÓN */

if(!$conexion){

die("Error de conexión");

}

/* RECIBIR DATOS */

$nombre = $_POST['nombre'];

$correo = $_POST['correo'];

$comentario = $_POST['comentarios'];

/* INSERTAR DATOS */

$sql = "INSERT INTO visitantes
(nombre, correo, comentarios)

VALUES
('$nombre', '$correo', '$comentario')";

/* EJECUTAR */

mysqli_query($conexion, $sql);

/* REDIRECCIONAR AL INDEX */

header("Location: index.html");

exit();

?>