<?php
    function validarFoto ($nombre){
        global $dirSubida;
        global $rutaSubida;
        
        $dirSubida = "fotos/$nombre/";
        $foto = $_FILES['foto']; //Extrae los datos del archivo foto
        //var_dump($foto);
        $nombreFoto = $foto['name']; //Almacena nombre de la foto
        $nombreTmp = $foto['tmp_name']; //Almacena nombre temporal
        $rutaSubida = "{$dirSubida}profile.jpg"; 
        $extArchivo = preg_replace('/image\//','',$foto['type']); 
    
        if($extArchivo == 'jpeg' || $extArchivo == 'png'){
            if(!file_exists($dirSubida)){
                mkdir("$dirSubida", 0777);
            }
    
            if(move_uploaded_file($nombreTmp, $rutaSubida)){
                //echo "<img class='img-responsive' src='$rutaSubida' alt=''>";
                return true;
            }else{
                return false;
            }
        }else{
            trigger_error("No es un archivo de imagen valido",
            E_USER_WARNING);
            exit;
        }
    }
?>