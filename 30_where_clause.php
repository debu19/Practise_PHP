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
    $sql="SELECT * FROM `phptrip` WHERE `dest`='BIHAR'";
    $result=mysqli_query($conn,$sql);
    //find no of records returned
    $num= mysqli_num_rows($result);
    echo $num;
    echo " records found in database";
    echo "<br>";
    $no=1;
    if($num>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            //echo var_dump($row);
            echo $no." Hello ". $row['name']." Welcome to ". $row['dest'];
            echo "<br>";
            $no=$no+1;
        }
    }
    $aff=mysqli_affected_rows($conn);
    echo "<br>Numbet of affected rows: $aff<br>";
?>