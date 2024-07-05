<!-- write a php script that searches for a value in an array using the in_array function -->
<?php
$arr = [1, 2, 3, 55, 7, 8, 3, 24, 567];
if (in_array(24, $arr)) {
    echo 'found';
} else {
    echo 'not found';
}


?>
