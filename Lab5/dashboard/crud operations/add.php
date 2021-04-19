<?php

if (isset($_POST["title"], $_POST["producer"], $_POST["category"], $_POST["date"], $_POST["text"])){

    include('../../DB/connection.php');

    $output = '';

    $title = $_POST['title'];
    $producer = $_POST['producer'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    $text = $_POST['text'];
    
    $conn = OpenConnection();

    $sql = "INSERT INTO news VALUES (DEFAULT, '".$title."', '".$text."', '".$producer."', '".$date."', '".$category."')";

    $conn->query($sql);
    
    if ($conn->affected_rows == 1) {
        $output .= 'New post added';
    } else {
        $output .= 'An error occured';
    }

    echo $output;

    CloseConnection($conn);

}

?>