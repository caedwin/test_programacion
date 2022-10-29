<?php 
    if(!isset($_GET['id'])){
        header('Location: ../index.php?message=error');
    }
    try {
        include '../model/connection.php';
        $id= $_GET['id'];
        $sentencia = $db->prepare('DELETE FROM clientes where id = ?');
        $result = $sentencia->execute([$id]);
        header('Location: consulta.php');

    } catch (Error $e) { // this will catch only Errors 
        echo $e->getMessage();
    }
    
?>