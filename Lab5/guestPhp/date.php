<?php

    if(isset($_POST["from_date"], $_POST["end_date"])){

        include("../DB/connection.php");

        $conn = OpenConnection();
        $output = '';

        $sql_query = "
            SELECT * FROM news
            WHERE date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["end_date"]."'
        ";

        $result = mysqli_query($conn, $sql_query);

        if(mysqli_num_rows($result) > 0){
            
            while($row = mysqli_fetch_array($result)){

                $output .= '
                    <tr>
                        <td> '. $row["title"] .' </td>
                        <td> '. $row["text"] .' </td>
                        <td> '. $row["producer"] .' </td>
                        <td> '. $row["date"] .' </td>
                        <td> '. $row["category"] .' </td>
                    </tr>
                ';
            }
        }

        else{
            $output .= '
                <tr>
                    <td colspan="5"> No news found </td>
                </tr>
            ';
        }

        echo $output;

        closeConnection($conn);
    }

?>