
<div class="d-flex justify-content-center text-center">
    

<form class="p-5 bg-light" method="post">
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
                <input type="text" class="form-control" id="nombre" name="registroNombre">
        </div>
    </div>
               
<div class="form-group">
        <label for="email">Correo electrónico:</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">@</span>
           
        </div>
            <input type="email" class="form-control" id="email" name="registroEmail">
    </div>
        
</div>
    <div class="form-group">
        <label for="pwd">Password:</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
        </div>
        <input type="password" class="form-control" id="pwd" name="registroPassword">
    </div>
    <?php 
        #Forma en la que se instancia una clase de metodo no estatico
        /* $registro = new ControladorFormularios();
        $registro -> ctrRegistro(); */

        #Forma en la que se instancia una clase de metodo estatico
        $registro = ControladorFormularios::ctrRegistro();
        if ($registro == "ok"){
            echo '<script>
                if ( window.history.replaceState ){
                window.history.replaceState( null, null, window.location.href );
                }

            </script>';
            echo '<div class="alert alert-success"> El usuario ha sido registrado </div>';
        }
        if ($registro == "error"){
                       echo '<script>
                if ( window.history.replaceState ){
                window.history.replaceState( null, null, window.location.href );
                }

            </script>';
            echo '<div class="alert alert-danger">No se permiten caracteres especiales</div>';
        }
        ?>
    </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>