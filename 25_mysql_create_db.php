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
echo "Connection was successful<br>";
}
//Create a db
$sql="CREATE DATABASE dbdebutut";
$result = mysqli_query($conn,$sql);
echo "The result is ";
var_dump($result);
echo "<br>";
//Check for database creation success
if($result)
{
    echo"The db was created sucessfully<br>";
}
else{
   echo "The db was not created sucessfully<br>"; 
}

?>