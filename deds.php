<html>
<head>
    <title>Dedicated Songs List</title>
    <link rel="stylesheet" href="mytemplate.css">
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
      $message = $row['message'];

      echo '<li>
                    <span>'.$id.'</span><span>'.$name.'</span>
<span>'.$batch.'</span> <span>'.$song.'</span><span>'.$url.'</span><span>'.$nameto.'</span> <span>'.$batchto.'</span>      <img id="'.$id.'" class="delete-button" width="10px" src="images/close.svg" />
     </li>';
  }
    }
?>
     </ul>
 </div>
  
    </div>
</body>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

    
    
</html>