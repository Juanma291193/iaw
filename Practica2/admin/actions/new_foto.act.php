<?php
    include "/iaw/Practica2/admin/common/utils.php";
    include "/iaw/Practica2/admin/common/config.php";
    include "/iaw/Practica2/admin/common/mysql.php";

    /*  debug ( $_POST);

    debug ( $_FILES);
    */

    # Recogemos los parametros que nos pasan por POST
    $author_id =  $_POST['author_id'];
    $name =  $_POST['name'];
    $text =  $_POST['text'];

    if ( isset( $_POST['enabled'])) {
        $enabled = 1;
    }
    else {
        $enabled = 0;
    }

    move_uploaded_file( $_FILES["fichero"]["tmp_name"], "/iaw/Practica2/images/" . $_FILES["fichero"]["name"]);

    $fichero = $_FILES["fichero"]["name"];
    $size = $_FILES["fichero"]["size"];

    # conectamos con la base de datos
    $connection = Connect( $config['database']);

    $sql  = "insert into images( author_id, name, file, size, text, enabled) values( ".$author_id.", '".$name."', '".$fichero."', '".$size."', '".$text."', ".$enabled.")";

    $return = Execute( $sql, $connection);

    Close( $connection);

    header ( "location: /iaw/Practica2/admin/home.php?page=listado");
?>