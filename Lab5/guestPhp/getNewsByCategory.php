<?php

    include("../DB/connection.php");
    include('../DB/news.php');
    
    try{
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $conn = OpenConnection();

            $category = json_decode(file_get_contents('php://input'), true)['category'];
            
            $get_news_by_category = "SELECT * FROM news WHERE category = '".$category."' ";
            $result = $conn->query($get_news_by_category);
            
            $rows = array();
            while($row = mysqli_fetch_array($result)){
                $rows[] = new News($row['title'], $row['text'], $row['producer'], $row['date'], $row['category']);
            }

            echo json_encode($rows);

            CloseConnection($conn);
            exit;
        }

    } catch(Exception $e){
        echo json_encode(
            array(
                'status' => false,
                'error' => $e->getMessage(),
                'error-code' => $e->getCode()
            )
        );
    }


?>