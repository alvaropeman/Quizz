<?php
 function conectaBBDD()
 {
     $direccion = 'localhost';
     $usuario_BBDD = 'pruebasTest';
     $nombre_BBDD = "ejemploquiz";
     $password_BBDD = '3SqGScEavzmAhikz';
     $puerto = '3306';
     
     $conexion = new mysqli(
         $direccion,
         $usuario_BBDD,
         $password_BBDD,
         $nombre_BBDD,
         $puerto
     );
     $consulta = $conexion->query("SET NAME UTF8");
     return $conexion;
 }