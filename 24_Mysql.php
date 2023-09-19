<?php
echo "Welcome for connecting to database<br>";
// Connecting to database
$servername ="localhost";
$username="root";
$password ="";
//Create a connection object
$conn = mysqli_connect($servername,$username,$password);


//Die if connection not successful
if(!$conn)
{
    die("Sorry we failed to connect:".mysqli_connect_error());
}
else {
echo "Connection was successful";
}

?>