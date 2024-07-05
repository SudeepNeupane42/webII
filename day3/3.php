<!-- create a php function that filters out all the even numbers from an array using the array_filter function -->
<?php
function filterEven($arr)
{
    return $arr % 2 == 0;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$arr = array_filter($arr, 'filterEven');

print_r($arr);
echo '<br>';
print_r(array_filter($arr, 'filterEven'));

?>