<?php

    // print_r($_POST);
    
    
    $email = $_POST["email"];
   
    try {

        if( empty($_POST["dni"]) || empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["email"]) || empty($_POST["mensaje"])){
            header('Location: ../index.php?message=100');// validación de campos en blanco
            exit();
        }

        $patron = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
        if ( ! preg_match($patron , $email) ) {
            header('Location: ../index.php?message=101'); /// correo inválido
            exit();
         }else{

            include_once '../model/connection.php';
            $dni = $_POST["dni"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $email = $_POST["email"];
            $mensaje = $_POST["mensaje"];

            $sentencia = $db->prepare("INSERT INTO clientes(dni, nombre, apellido, email, mensaje) VALUES(?,?,?,?,?);");
            $result = $sentencia->execute([$dni, $nombre, $apellido, $email, $mensaje]);
            header('Location: ../index.php?message=200');

         }  

    } catch (Error $e) { // this will catch only Errors 
        echo $e->getMessage();
    }



?>