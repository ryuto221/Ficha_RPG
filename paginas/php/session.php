<?php
    session_start();
    $_SESSION["aviso"] = "";
    if(isset($_SESSION["aviso"])){

    }
    else{
        $_SESSION["aviso"] = "Erro na sessão";
        echo $_SESSION["aviso"];
    }
?>