<?php
echo "Welcome to associative arrays in php<br>";
/*$arr =array('this','that','what');
echo $arr[0];
echo $arr[1];
echo $arr[2];
*/
$favCol = array('shubham' =>'red', 'rohan'=>'green','harry'=>'brown');
#echo $favCol['harry'];
foreach ($favCol as $key => $value) {
    echo "<br>Fav color of $key is $value";
}
?>