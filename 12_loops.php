<?php
/*echo "while loops in php";
echo 1;
echo 2;
echo 3;
$i=0;
while($i<5)
{
    echo $i+1;
    echo "<br>";
    $i++;
}*/
echo "Welcome to foreach loop <br>";
$arr=array("bananas","apples","Harpic","Bread","Butter");
/*for($i=0;$i< count($arr);$i++)
{
    echo $arr[$i];
    echo"<br>";
}*/
/*foreach($variable as $key => $value)
{
    #code
}*/
foreach($arr as $value)
{
    echo "$value <br>";
}
?>