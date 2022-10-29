<?php include 'template/header.php' ?>
<?php 
   include_once 'model/connection.php';
   $sentence = $db-> query('SELECT * FROM clientes');
   $cliente = $sentence->fetchAll(PDO::FETCH_OBJ);
   // print_r($cliente);
?>

  <main class="container" >
        <h2 class="my-3 text-center">Contáctanos</h2>

        <!-- inicio alertas -->
        <?php 
            if(isset($_GET['message']) and $_GET['message'] == '100'){
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Rellena todos los campos.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
            }
        ?>

        <?php 
            if(isset($_GET['message']) and $_GET['message'] == '200'){
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Registrado</strong> Su mensaje fue enviado con éxito.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
            }
        ?>

        <?php 
            if(isset($_GET['message']) and $_GET['message'] == 'email'){
        ?>
            <strong>La dirección de correo no es válido!!! Vuelva a intentarlo</strong>
        <?php 
            }
        ?>
        
        <!-- fin alertas -->
       
        <form action="views/registrar.php" method="POST" >
            
            <div>
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control"  name="nombre" placeholder="Primer nombre">
                <label for="apellido" class="form-label" >Apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="Primer apellido" alt="primer apellido">
            
                <label for="dni" class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni" placeholder="12345678">
                <label for="email" class="form-label">Correo Electronico</label>
                <input  type="email" class="form-control" name="email" id="email" placeholder="ejemplo@dominio.com">
                <label for="message" class="form-label">Mensaje</label>
                <textarea class="form-control mb-3" name="mensaje" rows="3" placeholder='Escribe el mensaje aquí'></textarea>
            </div>
        
            <input id="btn-submit" class="btn btn-primary " type="submit" value="Enviar"/>
        </form>
            
     
        

  </main>
  
<?php include 'template/footer.php' ?>