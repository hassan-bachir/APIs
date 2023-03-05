<?php 

$numbers = $_GET['numbers'];
$numberList = explode(',', $numbers);
function selectionSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n-1; $i++) {
        
        $min = $i;
        for ($j = $i+1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        if ($min != $i) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $temp;
        }
    }
    // Return the sorted array
    return $arr;
}

$sortedList = selectionSort($numberList);
echo json_encode($sortedList);

?>