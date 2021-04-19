<?php

function OpenConnection() : mysqli {

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "webdatabase";

    return mysqli_connect($host, $user, $password, $db);
}

function CloseConnection(mysqli $connection){
    $connection->close();
}

?>