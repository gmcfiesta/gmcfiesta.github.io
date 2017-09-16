<html>
<head>
    <title>Simple To-Do List</title>
    <link rel="stylesheet" href="stylededs.css">
</head>
<body>
    <div class="wrap">
  <div class="task-list">
     <ul>
<?php
    require("database_connect.php");

    $query = mysqli_query($conn,"SELECT * FROM dedications");
    $numrows = mysqli_num_rows($query);

    if($numrows>0){
  while( $row = mysqli_fetch_assoc( $query ) ){

      $id = $row['serial'];
      $name = $row['name'];
      $batch = $row['batch'];
      $song = $row['song'];
      $url = $row['url'];
      $nameto = $row['nameto'];
      $batchto = $row['batchto'];

      echo '<li>
                    <span>'.$id.'</span><span>'.$name.'</span>
<span>'.$batch.'</span> <span>'.$song.'</span><span>'.$url.'</span><span>'.$nameto.'</span> <span>'.$batchto.'</span>      <img id="'.$id.'" class="delete-button" width="10px" src="images/close.svg" />
     </li>';
  }
    }
?>
     </ul>
 </div>
  <form class="add-new-task" autocomplete="off">
      <input type="text" name="new-task" placeholder="Add a new item..." />
 </form>
    </div>
</body>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    add_task(); // Call the add_task function

    function add_task() {
        $('.add-new-task').submit(function(){
      var new_task = $('.add-new-task input[name=new-task]').val();

     if(new_task != ''){
   $.post('includes/add-task.php', { task: new_task }, function( data ) {
        $('.add-new-task input[name=new-task]').val('');
        $(data).appendTo('.task-list ul').hide().fadeIn();
                });
     }
     return false; // Ensure that the form does not submit twice
        });
    }
    
    
    function delete_task() {
        $('.delete-button').click(function(){
      var current_element = $(this);
      var id = $(this).attr('id');

      $.post('delete-task.php', { id: id }, function() {
    current_element.parent().fadeOut("fast", function() { $(this).remove(); });
     });
        });
    }
</script>
    
    
</html>