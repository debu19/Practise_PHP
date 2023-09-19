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
$name="Vikrant";
$destination="Russia";
//Sql query to be executed
$sql="INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
//Add a new trip to the Trip Table in the database
$result = mysqli_query($conn,$sql);
if($result)
{
    echo"The record has been inserted sucessfully!<br>";
}
else{
   echo "The record was not inserted sucessfully because of this error ---> ".mysqli_error($conn); 
}
?>