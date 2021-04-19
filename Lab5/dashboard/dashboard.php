<?php

    include('validateLogin.php');

    validate_login();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"> </script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
    <script type="text/javascript" src="operations.js"> </script>

</head>
<body>
    <div class="header">
        <a href="../index.html" id="home"> Daily Boost </a>
        <a href="logout.php" id="logoutBtn"> Logout </a> 
    </div>
    <main>
        <?php echo "<p style=color:white> Welcome back, " . $_SESSION['name']; ?>
        <div class="sql-table">
            <table id="news">
                <thead>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Text</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Category</th>
                </thead>
                <tbody id="tbody">
                    <?php 
                    require_once("show_table.php");
                    show_db_table(); 
                    ?>
                </tbody> 
            </table>
        </div>

        <div class="container">
            <form method="POST" action="">
                <label for="title"> Title </label>
                <input type="text" id="title" name="title" placeholder="Insert title">
                
                <label for="producer"> Author </label>
                <input type="text" id="producer" name="producer" placeholder="Insert author">

                <label for="category">Country</label>
                <select id="category" name="category">
                    <option value="business">Business</option>
                    <option value="gastronomy">Gastronomy</option>
                    <option value="tech">Tech</option>
                    <option value="education">Education</option>
                </select>

                <label for="date"> Date </label>
                <input type="text" id="date" name="date" placeholder="Insert date">

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write your post" style="height:200px"></textarea>

            <div class="buttons">
                <input type="button" id="add-button" name="add-button" value="Add">
                <input type="button" id="update-button" name="update-button" value="Update">
                <input type="button" id="delete-button" name="delete-button" value="Delete">
            </div>            
        </div>

    </main>
</body>
</html>