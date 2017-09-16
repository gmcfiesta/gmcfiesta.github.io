<php

$servername = "localhost";
$username = "id2900475_admin";
$password = "aksaichin";
$database = "id2900475_one";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
$q = "SELECT id FROM dwCache ORDER BY id DESC LIMIT 1";
$qu = mysqli_query($link, $q);

while($row=mysqli_fetch_array($qu, MYSQL_ASSOC)){
        $id = $row['id'];
        $cache = $row['cache'];
        $timest = $row['time'];
    }


$time = strtotime($timest);

$curtime = time();

if(($curtime-$time) > 1800) {     //1800 seconds
  //do stuff
}
    
 $conn->close();   
?>