<?php
    $email = $_POST['email'];
    $password = $_POST['loginpassword'];
    echo json_encode("hola bienvenido tu email es  :".$email."y tu contrasena es :".$password);
?>