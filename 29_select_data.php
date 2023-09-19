<?php
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
    $sql="SELECT * FROM `phptrip`";
    $result=mysqli_query($conn,$sql);
    //find no of records returned
    $num= mysqli_num_rows($result);
    echo $num;
    echo " records found in database";
    echo "<br>";
    //Display the rows returned by sql query
    // if($num>0)
    // {
    //     $row=mysqli_fetch_assoc($result);
    //     echo var_dump($row);
    //     echo "<br>";

    // }
    while($row=mysqli_fetch_assoc($result))
    {
        //echo var_dump($row);
        echo $row['sno'] ." Hello ". $row['name']." Welcome to ". $row['dest'];

        echo "<br>";
    }
?>