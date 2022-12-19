<?php

$arr = [3];
$arr2 = [4,5];

array_push($arr, $arr2);
// array_push($arr, ...$arr2);
echo "<pre>";
print_r($arr);
echo "</pre>";

var_export(is_object($arr));
// function even($value)
// {
//   return $value % 2 == 0;
// }

// $arr = [1, 2, 3, 4, 5];
// $even_num = array_filter($arr,"even");
// array_push($arr, ...$even_num);

// echo "<pre>";
// print_r($arr);
// echo "</pre>";



// merge
// $even = [2, 4, 6];
// $odd = [1, 3, 5];
// $all = [...$odd, ...$even];

// echo "<pre>";
// print_r($all);
// echo "</pre>";