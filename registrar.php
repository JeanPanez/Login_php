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
            <div class="col-sm-12 caja col-centrar">
                <?php
                //Llamando la db
                require_once 'lib/config.php';
                spl_autoload_register(function($clase){
                    require_once "lib/$clase.php";
                });

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
                ///////////////DB//////////////////
                $db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                /* $array = $db->getUsuarios();
                //Para probar
                echo "<table class='table table-cell'>
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>nombre</td>
                            <td>apellido</td>
                            <td>email</td>
                            <td>contraseña</td>
                            <td>dni</td>
                            <td>celular</td>
                            <td>direccion</td>
                            <td>edad</td>
                            <td>ciudad</td>
                            <td>departamento</td>
                            <td>codigo postal</td>
                        </tr>
                    </thead>
                "; */

                //var_dump($array);  
                /* foreach($array as $k => $v){
                    echo "<tr>";
                    foreach($v as $v2){
                        echo "<td>$v2 </td>";
                    }
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>"; */
                ///////////////////////////////////

                $db->preparar("SELECT nombre,apellido, email FROM usuarios");
                $db->ejecutar();
                $db->prep()->bind_result($nombre, $apellido, $email/* , $a, $b. $c, $d, $e, $f, $g, $h */);
                echo "<table class='table table-cell'>
                    <thead>
                        <tr>
                            <td>nombre</td>
                            <td>apellido</dr>
                            <td>email</td>
                        </tr>
                    </thead>
                    <tbody>";
                    while ($db->resultado()){
                        echo "<tr>
                            <td>$nombre</td>
                            <td>$apellido</td>
                            <td>$email</td>
                            "/* <td>$a</td>
                            <td>$b</td>
                            <td>$c</td>
                            <td>$d</td>
                            <td>$e</td>
                            <td>$f</td>
                            <td>$g</td>
                            <td>$h</td>
                            <td>$email</td> */,"
                        </tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";

                    echo $db->validardatos('apellido', 'usuarios', 'panez');
                ?>


<!-- 
/////comentamos -->
    <!--  <form action="" enctype="multipart/form-data" method="POST">

                <legend>Registrate</legend>
                <div class="form.group">
                    <input name="nombre" type="text" class="form-control" id="" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <input name="apellido" type="text" class="form-control"     id="" placeholder="Apellido">
                </div>
                <div class="form.group">
                    <input name="email" type="text" class="form-control" id="" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <input name="contraseña" type="password" class="form-control"     id="" placeholder="Su contraseña...">
                </div>
                <div class="form.group">
                    <input name="dni" type="text" class="form-control" id="" placeholder="DNI">
                </div>
                <div class="form-group">
                    <input name="celular" type="text" class="form-control"     id="" placeholder="Celular">
                </div>
                <div class="form-group">
                    <input name="direccion" type="text" class="form-control"     id="" placeholder="Direccion">
                </div>
                <div class="form-group">
                    <input name="edad" type="text" class="form-control"     id="" placeholder="Edad">
                </div>
                <div class="form-group">
                    <input name="ciudad" type="text" class="form-control"     id="" placeholder="Ciudad">
                </div>
                <div class="form-group">
                    <input name="departamento" type="text" class="form-control"     id="" placeholder="Departamento">
                </div>
                <div class="form-group">
                    <input name="codigopostal" type="text" class="form-control"     id="" placeholder="Codigo">
                </div>
                <div class="form-group">
                    <label for="">Elija su foto de perfil</label>
                    <input name="foto" type="file" class="form-control"     id="">
                </div>
                <button type="submit" class="btn btn-secondary">Registrar</button>
                <a class=pull-right
                    href="index.php">Click aqui si ya tienes una cuenta</a>
            </form> -->
            </div>
        </div>








    </div>
    
<?php 
    require 'inc/footer.inc'
?>















