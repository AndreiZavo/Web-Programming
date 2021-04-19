<?php

if (isset($_POST["title"])){

    include('../../DB/connection.php');

    $output = '';

    $title = $_POST['title'];
    
    $conn = OpenConnection();

    $sql = "
        DELETE FROM news WHERE title = '".$title."'  
    ";

    $conn->query($sql);
    
    if ($conn->affected_rows == 1) {
        $output .= 'Post deleted';
    } else {
        $output .= 'An error occured';
    }

    echo $output;

    CloseConnection($conn);

}

?>