$(document).ready(function(){
    
    $.datepicker.setDefaults({  
    dateFormat: 'yy-mm-dd'   
    });  
    $(function(){  
        $("#date").datepicker();    
    });

    $('#add-button').click(function(){
        var title = $('#title').val();
        var producer = $('#producer').val();
        var category = $('#category').val();
        var date = $('#date').val();
        var text = $('#subject').val();
        

        if(title != '' && producer != '' && category != '' && date != '' && text != ''){
            $.ajax({
                url: "crud operations/add.php",
                method: 'POST',
                data: {
                    title: title,
                    producer: producer,
                    category: category,
                    date: date,
                    text: text
                },
                success:function(data){
                    alert(data);
                    window.location.reload();
                }
            });
        }
    });

    
    $('#update-button').click(function(){
        var title = $('#title').val();
        var producer = $('#producer').val();
        var category = $('#category').val();
        var date = $('#date').val();
        var text = $('#subject').val();

        if(title != '' && producer != '' && category != '' && date != '' && text != ''){
            $.ajax({
                url: "crud operations/update.php",
                method: 'POST',
                data: {
                    title: title,
                    producer: producer,
                    category: category,
                    date: date,
                    text: text
                },
                success:function(data){
                    alert(data);
                    window.location.reload();
                }
            });
        }
    });

    
    $('#delete-button').click(function(){
        var title = $('#title').val();
    
        if(title != ''){
            $.ajax({
                url: "crud operations/delete.php",
                method: 'POST',
                data: {
                    title: title
                },
                success:function(data){
                    alert(data);
                    window.location.reload();
                }
            });
        }
    });

});
