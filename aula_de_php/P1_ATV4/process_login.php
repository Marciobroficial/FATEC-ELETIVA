<?php
    if($_POST["login"] == "marcio" && $_POST["senha"] == "123")
    {
        if(!isset($_SESSION)) session_start();
        $_SESSION["login"] = "marcio";

        header("Location: restrito.php");
    }
    else
    {
        header("Location: index.php");
    }
?>