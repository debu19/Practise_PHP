<?php
echo "Welcome to functions <br>";
function processMarks($marksArr)
{
    $sum=0;
    foreach($marksArr as $value)
    {
        $sum += $value;
    }
    return $sum;
}

$rohan = [34,98,45,12,98,93];
$sumMarks =  processMarks($rohan);
echo "Total marks scored by rohan out of 600 is $sumMarks";
?>