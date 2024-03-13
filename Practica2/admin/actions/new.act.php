<?php
    include "/iaw/Practica2/admin/common/utils.php";
    include "/iaw/Practica2/admin/common/config.php";
    include "/iaw/Practica2/admin/common/mysql.php";

    
    # Recogemos los parametros que nos pasan por POST
    $display_name =  $_POST['display_name'];
    $email =  $_POST['email'];
    $password =  md5( $_POST['password']); 

    if ( isset( $_POST['enabled'])) {
        $enabled = 1;
    }
    else {
        $enabled = 0;
    }

    # conectamos con la base de datos
    $connection = Connect( $config['database']);

    $sql  = "insert into authors( name, email, password, enabled) values( '".$display_name."', '".$email."', '".$password."', ".$enabled.")";

    $return = Execute( $sql, $connection);

    Close( $connection);

    header ( "location: /iaw/Practica2/admin/home.php");
?>