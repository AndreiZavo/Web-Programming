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

    $sql = "
        UPDATE news 
        SET text='".$text."', producer='".$producer."', date='".$date."', category='".$category."' 
        WHERE title = '".$title."'
    ";

    $conn->query($sql);
    
    if ($conn->affected_rows == 1) {
        $output .= 'Post updated';
    } else {
        $output .= 'An error occured';
    }

    echo $output;

    CloseConnection($conn);

}

?>