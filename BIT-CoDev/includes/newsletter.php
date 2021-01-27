<?php 

include_once 'conexion.php';

if(isset($_POST)){
    //Valores del formulario
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : false;
 var_dump($_POST);
    //Array de errores
    $errores = array();

    //Validar los datos antes de guardarlos en la tabla
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] = "¡El email no es válido!";
    }

    //Insertar datos en la tabla si el formulario esta correcto
    $guardar_usuario = false;

    if(count($errores) == 0){
        $guardar_usuario = true;

        //Insertar datos en la db
        $sql = "INSERT INTO entradas VALUES(null, '$email', CURDATE());";
        $guardar = mysqli_query($db, $sql);
    }
}

?>