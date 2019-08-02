<?php

$arr = [
    1, 23, 4,3,5,63,35
];

$max = $arr[0];


for ($i = 1; $i < count($arr); $i++)
{
    if ($max <  $arr[$i]){
        $max = $arr[$i];

    }
}

echo "Giá trị lớn nhất là $max";
?>
