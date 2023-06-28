<?php 
    require 'inc/cabecera.inc'
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 caja text-center">
            <h3>Portal Web</h3>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-6 caja col-centrar">
                <?php
                //
                if ($_POST){
                    extract($_POST, EXTR_OVERWRITE);
                    if(!file_exists("fotos")){
                        mkdir("fotos", 0777);
                    }
                    $nombre = strtolower($nombre);
                    if (validarFoto(($nombre))){
                        echo "<img class='img-responsive' src='$rutaSubida' alt=''>";
                    }
                }
                ?>
            <form action="" enctype="multipart/form-data" method="POST">

                <legend>Registrate</legend>

                <div class="form.group">
                    <input name="usuario" type="text" class="form-control" id="" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <input name="contraseña" type="password" class="form-control"     id="" placeholder="Su contraseña...">
                </div>
                <div class="form.group">
                    <input name="nombre" type="text" class="form-control" id="" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <input name="apellido" type="password" class="form-control"     id="" placeholder="Apellido">
                </div>
                <div class="form.group">
                    <input name="dni" type="text" class="form-control" id="" placeholder="DNI">
                </div>
                <div class="form-group">
                    <input name="celular" type="password" class="form-control"     id="" placeholder="Celular">
                </div>
                <div class="form-group">
                    <input name="direccion" type="password" class="form-control"     id="" placeholder="Direccion">
                </div>
                <div class="form-group">
                    <input name="edad" type="password" class="form-control"     id="" placeholder="Edad">
                </div>
                <div class="form-group">
                    <input name="ciudad" type="password" class="form-control"     id="" placeholder="Ciudad">
                </div>
                <div class="form-group">
                    <input name="departamento" type="password" class="form-control"     id="" placeholder="Departamento">
                </div>
                <div class="form-group">
                    <input name="codigopostal" type="password" class="form-control"     id="" placeholder="Codigo">
                </div>
                <div class="form-group">
                    <label for="">Elija su foto de perfil</label>
                    <input name="foto" type="file" class="form-control"     id="">
                </div>
                <button type="submit" class="btn btn-secondary">Registrar</button>
                <a class=pull-right
                    href="index.php">Click aqui si ya tienes una cuenta</a>
            </form>
            </div>
        </div>








    </div>
    
<?php 
    require 'inc/footer.inc'
?>















