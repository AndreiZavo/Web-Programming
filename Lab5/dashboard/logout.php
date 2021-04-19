<?php

    session_start();

    if(empty($_SESSION['name'])){
        header('Location: ../index.html');
    }

    session_destroy();

    header('Location: ../index.html');

?>