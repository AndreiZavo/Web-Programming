<?php

session_start();

function validate_login(){
    if(isset($_POST['submit'])){
    
        include('../DB/connection.php');

        $connection = OpenConnection();
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql_query = "SELECT username, password FROM login_form 
        WHERE username = '".$username."' AND password = '".$password."'  LIMIT 1";

        $result = mysqli_query($connection, $sql_query);

        if(mysqli_num_rows($result) > 0){
            $_SESSION["name"] = $username;
        }

        else{
            echo "<script> alert('Username and password not valid'); document.location='../index.html' </script>";
        }

        CloseConnection($connection);
    }
}

?>