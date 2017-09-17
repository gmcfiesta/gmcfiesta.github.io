<?php session_start(); include 'database_connect.php';



$name = $_POST['name'];
$batch = $_POST['batch'];
$song = $_POST['song'];
$url = $_POST['url'];
$nameto = $_POST['nameto'];
$batchto = $_POST['batchto'];
$safe_url = mysqli_real_escape_string($conn, $url);
$_SESSION['name'] = $name;
$_SESSION['song'] = $song;
    
    
$sql = "INSERT INTO dedications (name, batch, song, url, nameto, batchto, message)
VALUES ('$name', '$batch', '$song', '$safe_url', '$nameto','$batchto', $message)";



if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

/*sleep(3);

$query = "SELECT 'key' FROM dedications WHERE name = '{$_SESSION['name']}' AND song = '{$_SESSION['song']}'";


if ($conn->query($query) === TRUE) {
    echo "Your dedication is ($row)in line.";
} else {
    echo "<br>Error: " . $query . " serial recovery error" . $conn->error;
}
*/

/*$dedi = mysqli_insert_id($conn);
setcookie("dedi", $dedi);*/


 
$conn->close();



?>









<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--import mytemplate.css----->
        <link href="mytemplate.css" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
    </head>

    <body class=""style="background-color: darkcyan">
    <!-- Sidebar & Nav-->
   
    <!--Side bar content-->    
   
  <div class="container">
    <!---------------------------abbey kasai Page Content goes below--------------------->    
   
    
      
      
      <div class="container">
      <h4 class="center">Your Dedication has been recorded and will be played soon.</h4>    
      
      </div>
      
      
      
      <marquee>We try our best to execute your dedication perfectly. If u find that it is not the case, please consider issues such as availability etc.</marquee>
      
      
      
      
        
        
        
        </div>  
    <!----------------------------abbey kasai Page Content goes above--------------------> <!--Floating toolbar-->    
       
    <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
      <script type="text/javascript" src="mytemplate.js"></script> 
    <script type="text/javascript" src="dedicate.js"></script>
    </body>
  </html>