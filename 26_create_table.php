<?php
echo "Welcome for connecting to database<br>";
// Connecting to database
$servername ="localhost";
$username="root";
$password ="";
$database="dbdebutut";
//Create a connection object
$conn = mysqli_connect($servername,$username,$password,$database);

//Die if connection not successful
if(!$conn)
{
    die("Sorry we failed to connect:".mysqli_connect_error());
}
else {
echo "Connection was successful<br>";
}
$sql="CREATE TABLE `phptrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn,$sql);
if($result)
{
    echo"The table was created sucessfully<br>";
}
else{
   echo "The table was not created sucessfully<br>"; 
}
?>