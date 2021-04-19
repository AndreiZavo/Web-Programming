<?php
    include('DB/connection.php');

    $conn = OpenConnection();

    $sql_categories = "SELECT DISTINCT category from news";
    $result = $conn->query($sql_categories);

    $categories = array();
    while($row = mysqli_fetch_array($result)){
        $categories[] = $row[0];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuestPage</title>
    
    <!-- Imports for calendar -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"> </script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
    
    
    <!-- JS script -->
    <script type="text/javascript" src="browse.js"> </script>
    <script type="text/javascript">

        $(document).ready(function(){
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#end_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var end_date = $('#end_date').val();  
                if(from_date != '' && end_date != '')  
                {  
                     $.ajax({  
                          url:"guestPhp/date.php",  
                          method:"POST",  
                          data:{from_date:from_date, end_date:end_date},  
                          success:function(data)  
                          {  
                               $('#show_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
    </script>

</head>
<body>
    
    <form>
    <label> Search by interval of dates: </label>
        <input type="text" id="from_date" name="from_date" placeholder="Insert start date">
        <input type="text" id="end_date" name="end_date" placeholder="Insert end date">
        <input type="button" class="filter" id="filter" name="filter" value="Submit"/>

    <form>
    <label>
        Search by category:
        <select name="category-filter" onchange="get_news_by_category()">
            <option value="" selected disabled hidden> Choose category </option>
            <?php
                foreach($categories as $row){
                    echo "<option>$row</option>";
                }
            ?>
        </select>
    </label>
    </form>
    <table>
        <thead>
            <th>Title</th>
            <th>Text</th>
            <th>Author</th>
            <th>Date</th>
            <th>Category</th>
        </thead>
        <tbody id="show_table">
        </tbody> 
    </table>

</body>
</html>