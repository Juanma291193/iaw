<?php

    include "/iaw/Practica2/admin/common/utils.php";
    include "/iaw/Practica2/admin/common/config.php";
    include "/iaw/Practica2/admin/common/mysql.php";

    # Recogemos los parametros que nos pasan por POST
    $email_login =  $_POST['email_login'];
    $login_password =  md5 ( $_POST['login_password']);

    # conectamos con la base de datos
    $connection = Connect( $config['database']);

    $sql  = "select * from authors where email = '".$email_login."' And password = '".$login_password."'";


    $rows = ExecuteQuery( $sql, $connection);

    Close( $connection);

    if ( empty( $rows)) {
        header ( "location: ../error.php?error=1");
    }
    else {
        session_start();
        $_SESSION['id'] = $rows[0]['id'];
        $_SESSION['email'] = $rows[0]['email'];
        $_SESSION['session_id'] = session_id();

        header ( "location: /iaw/Practica2/admin/home.php?page=listado");
    }
?>