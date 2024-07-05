<!-- wa php function that takes an array of integers as input ans returns the sum of all the elements in the array.Use the array_sum fucntion -->

<?php
function sum($ar)
{
    $sum = array_sum($ar);
    return $sum;
}
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$result = sum($arr);
echo 'the sum of array is: ' . $result;


?>
