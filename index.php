<?php 

// Handle AJAX request (start)
if( isset($_POST['ajax']) && isset($_POST['myInput']) ){
    echo $_POST['myInput'];
    exit;  //it has to be put
   }
   // Handle AJAX request (end)

?>

<!doctype html>
<html>
 
 <body>

<form method='post' action>

<input type='text' name='myInput' placeholder='Enter your name' id='ttitle'>
<input type='submit' value='submit' name='submit'><br>
<div id='result'></div>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  
    $(document).ready(function(){
    $('#ttitle').keyup(function(){
     var ttl = $('#ttitle').val();

     $.ajax({
      type: 'post',
      data: {ajax: 1,myInput: ttl},  //I got a problem here. Here the ID of the input and var name will be equaled.
      success: function(response){
       $('#result').text('Question : ' + response);
      }
     });
    });
  });
    
</script>


</body>
</html>