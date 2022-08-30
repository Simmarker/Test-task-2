
<?php

function array_swap(&$array, $num)
{
    list($array[0], $array[$num]) = [$array[$num], $array[0]];
}

$arr = array(3, 9, 7, 1, 6);

echo "Начальный вариант <pre>" . print_r($arr, true) . "</pre>";


function arr_shift(&$arr)
{

    $temp = $arr[count($arr) - 1];
    for ($i = count($arr) - 1; $i > 0; $i--)
        $arr[$i] = $arr[$i - 1];

    $arr[0] = $temp;

}


function array_max($arr, $i)
{
    $max = $arr[$i];
    $a = $i;
    for ($j = $i; $j < count($arr); $j++)
        if ($arr[$j] > $max) {
            $max = $arr[$j];
            $a = $j;
        }

    return $a;
}


function array_sort(&$arr)
{

    array_swap($arr, array_max($arr, 0));
    for ($i = 1; $i < count($arr); $i++) {
        $temp = array_max($arr, $i);
        arr_shift($arr);
        if ($temp == count($arr) - 1)
            array_swap($arr, 0);
        else
            array_swap($arr, $temp + 1);
    }
}

array_sort($arr);

echo "Конечный вариант <pre>" . print_r($arr, true) . "</pre>";

?>
