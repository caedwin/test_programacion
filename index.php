<?php include 'template/header.php' ?>

  <main class="container" >
        <h2 class="my-3 text-center">Contáctanos</h2>
        <?php 
            if(isset($_GET['message']) and $_GET['message'] == '100'){
        ?>
            <div class="alert alert-warning alert-dismissible fade show mx-5" role="alert">
                <strong>Error!</strong> Rellena todos los campos.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
            }
        ?>

        <?php 
            if(isset($_GET['message']) and $_GET['message'] == '200'){
        ?>
            <div class="alert alert-danger alert-dismissible fade show mx-5" role="alert">
                <strong>Registrado</strong> Su mensaje fue enviado con éxito.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php 
            }
        ?>

        <?php 
            if(isset($_GET['message']) and $_GET['message'] == '101'){
        ?>
            <div class="alert alert-warning alert-dismissible fade show m-5" role="alert">
                <strong>Error!</strong> Correo electrónico errado!!! Vuelva a intentarlo.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
            }
        ?>
       
        <form action="views/registrar.php" class="mx-5" method="POST" >
            
            <div >
                
                    <div class="my-2 ">
                        <label for="nombre" class="form-label mb-0 px-2">Nombre</label>
                        <input type="text" class="form-control"  name="nombre" placeholder="Primer nombre">
                    </div>
                    <div class="mt-2">
                        <label for="apellido" class="form-label mb-0 px-2" >Apellido</label>
                        <input type="text" class="form-control" name="apellido" placeholder="Primer apellido" alt="primer apellido">
                    </div>
                    <div class="mt-2">
                        <label for="dni" class="form-label mb-0 px-2">DNI</label>
                        <input type="text" class="form-control" name="dni" placeholder="12345678">
                    </div>

                    <div class="mt-2">
                        <label for="email" class="form-label mb-0 px-2">Correo Electronico</label>
                        <input  type="email" class="form-control d-flex" name="email" id="email" placeholder="ejemplo@dominio.com" />
                    </div>
                    <div class="mt-2">
                        <label for="message" class="form-label mb-0 px-2">Mensaje</label>
                        <textarea class="form-control mb-3" name="mensaje" rows="3" placeholder='Escribe el mensaje aquí'></textarea>
                  
                </div>
                <input id="btn-submit" class="btn btn-success px-4 mb-5" type="submit" value="Enviar"/>
            </div>
        
            
        </form>
            
       

  </main>

  

  
<?php include 'template/footer.php' ?>