<?php 
    $task_id = strip_tags( $_POST['id'] );
    require("database_connect.php");
    mysql_query("DELETE FROM dedications WHERE id='$id'");
?>