<?php
    include "/iaw/Practica2/admin/common/utils.php";
    include "/iaw/Practica2/admin/common/config.php";
    include "/iaw/Practica2/admin/common/mysql.php";

    $page = $_GET['page'];
    # conectamos con la base de datos
    $connection = Connect( $config['database']);

    if ( $page == 'listado') {
        $sql  = "delete from images where id = " . $_GET['id'];
    }
    else {
        $sql  = "delete from authors where id = " . $_GET['id'];
    }

    $return = Execute( $sql, $connection);

    Close( $connection);

    header( "location: /iaw/Practica2/admin/home.php?page=" . $page);
?>