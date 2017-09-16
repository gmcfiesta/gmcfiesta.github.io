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
    
    
$sql = "INSERT INTO dedications (name, batch, song, url, nameto, batchto)
VALUES ('$name', '$batch', '$song', '$safe_url', '$nameto','$batchto')";



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

$dedi = mysqli_insert_id($conn);
setcookie("dedi", $dedi);


 
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
    <div class="navbar-fixed ">
        <nav>
            <div class="nav-wrapper">
              <a href="#" class="brand-logo center"><img src="images/office.png" width="200px"></a>


                
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
          </div>
      </nav>
  </div>
    <!--Side bar content-->    
    <div >
        
        <ul id="slide-out" class="side-nav " >
                <li>
                    <div class="user-view">
                    <div class="background">
                    <img src=" ">
                    </div>
                        <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
                    </div>
                </li>
                 <li><a class="waves-effect  white-text" href="index.html"><i class="material-icons white-text" >home</i><h5>HOME</h5></a></li>
                <li><a class="waves-effect white-text" href="about.html"><i class="material-icons white-text">album</i><h5>About Fest</h5></a></li>
                <li><a class="waves-effect white-text" href="organi.html"><i class="material-icons white-text">people</i><h5>Organising Team</h5></a></li>
                <li><a class="waves-effect white-text" href="audi.html"><i class="material-icons white-text">camera</i><h5>Audi Events</h5></a></li>
            
                <li><a class="waves-effect white-text" href="cellar.html"><i class="material-icons white-text">blur_on</i><h5>Cellar Events</h5></a></li>
                <li><a class="waves-effect white-text" href="sports.html"><i class="material-icons white-text">directions_run</i><h5>Sports</h5></a></li>
                <li><a class="waves-effect white-text" href="competitions.html"><i class="material-icons white-text">all_inclusive</i><h5>Competitions</h5></a></li>
                <li><a class="waves-effect white-text" href="fnight.html"><i class="material-icons white-text">cloud</i><h5>Fest Night</h5></a></li><li><a class="waves-effect white-text" href="us.html"><i class="material-icons white-text">people</i><h5>App Developers</h5></a></li>

          </ul>    
       
    </div>
  <div class="container">
    <!---------------------------abbey kasai Page Content goes below--------------------->    
   
    <table class="centered">
        <thead>
          <tr>
              <th>Dedi No</th>
              <th>By</th>
              <th>Batch</th>
              <th>Song</th>
              <th>To</th>
              <th>Batch</th>
          </tr>
        </thead>  
      
    <tbody>  
      
      
    <?php
    require("database_connect.php");

    $query = mysqli_query($conn,"SELECT serial, name, batch, song, nameto, batchto FROM dedications");
    $numrows = mysqli_num_rows($query);

    if($numrows>0){
  while( $row = mysqli_fetch_assoc( $query ) ){

      $id = $row['serial'];
      $name = $row['name'];
      $batch = $row['batch'];
      $song = $row['song'];
      $nameto = $row['nameto'];
      $batchto = $row['batchto'];

      echo '<tr>
                    <td>'.$id.'</td><td>'.$name.'</td>
<td>'.$batch.'</td> <td>'.$song.'</td><td>'.$nameto.'</td> <td>'.$batchto.'</td>      
     </tr> ';
  }
    }
?>  
         
        </tbody>
      </table>
      
      
      
      
      
      
       <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Dedication Number</h4>
      <p>Your Dedi Number is:<a class="dedi" ></a></p>
    </div>
    </div>
       
      
   
      
    
      
      
      
      
      
      
      
      
        
        
        
        
    <!----------------------------abbey kasai Page Content goes above--------------------> <!--Floating toolbar-->    
        <div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">home</i>
    </a>
    <ul>
      <li class="waves-effect waves-light"><a href="us.html"><i class="material-icons">people</i></a></li>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">home</i></a></li>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">free_breakfast</i></a></li>
    </ul>
  </div>
     </div>
    <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
      <script type="text/javascript" src="mytemplate.js"></script> 
    <script type="text/javascript" src="dedicate.js"></script>
    </body>
  </html>