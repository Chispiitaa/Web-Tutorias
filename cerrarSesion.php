<?php
    session_start();

    $temporal = $_REQUEST["nombreSesion"];

    session_destroy();

    header("location: index.php");
?>