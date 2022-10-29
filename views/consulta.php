<?php include '../template/header.php' ?>



    <?php 
        // conexion con la base de datos
        include_once '../model/connection.php';
        $sentence = $db-> query('SELECT * FROM clientes');
        $cliente = $sentence->fetchAll(PDO::FETCH_OBJ);
        // print_r($cliente);
    ?>

   <!-- Mostramos los mensajes guardados en la base de datos -->
   <section class="container">
        <h1 class="container py-4 text-center">Tabla de Mensajes</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha</th>
                <th scope="col">DNI</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">E-mail</th>
                <th scope="col">Mensaje</th>
                <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($cliente as $dato){
                ?>
                <tr>
                    <th scope="row"><?php echo $dato->id; ?></th>
                    <td><?php echo $dato->fecha; ?></td>
                    <td><?php echo $dato->dni; ?></td>
                    <td><?php echo $dato->nombre; ?></td>
                    <td><?php echo $dato->apellido; ?></td>
                    <td><?php echo $dato->email; ?></td>
                    <td><?php echo $dato->mensaje; ?></td>
                    <td class="text-center"><a class="text-danger " href="../views/eliminar.php?id=<?php echo $dato->id;?>"><i class="bi bi-trash"></i></a></td>
                    
                </tr>
                <?php 
                    }
                ?>
            
            </tbody>
        </table>

   </section>
   



<?php include '../template/footer.php' ?>