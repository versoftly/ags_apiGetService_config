<?php
    
    $lab -> set_db ( "database_name" );
    $lab -> set_host ( "server_name" );
    $lab -> set_charset ( "utf8mb4" );
    $lab -> set_user ( "user_name" );
    $lab -> set_pass ( "password" );
    
    $conexion = $lab -> pdo ( $lab );

?>
