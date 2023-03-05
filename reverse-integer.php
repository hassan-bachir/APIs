<?php

$str =$_GET['str'];

function reverseNumbers($str) {

    $arr = str_split($str);

    $num = '';
    for ($i = 0; $i < count($arr); $i++) {

        if (is_numeric($arr[$i])) {

            $num .= $arr[$i];
        } 
        else {
      
            array_splice($arr, $i - strlen($num), strlen($num), str_split(strrev($num)));
      
            $num = '';
        }
    }
   
    if (strlen($num) > 0) {
        array_splice($arr, count($arr) - strlen($num), strlen($num), str_split(strrev($num)));
    }
    return implode('', $arr);
}
echo json_encode(reverseNumbers($str));

?>