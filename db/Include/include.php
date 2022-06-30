<?php
    define("host", "localhost");
    define("user", "root");
    define("db", "ficha_rpg");
    define("port", "3306");
    define("pass", "");
    try{
        $pdo = new PDO("mysql:host".HOST.";port".PORT."dbname".DB, USER, PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES uft8"));
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    }
    catch(Exception $e){
        echo "Erro";
    }
?>