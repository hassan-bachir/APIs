<?php
$str = $_POST['string'];


function removeConsonants($str) {
    $vowels = array('a', 'e', 'i', 'o', 'u');
    $arr = str_split($str);
    $consonants = '';
    $i = 0;
    while ($i < count($arr) && !in_array(strtolower($arr[$i]), $vowels)) {
        $consonants .= $arr[$i];
        $i++;
    }
    if (strlen($consonants) === 0) {
        return $str . 'ay';
    } else {
        return implode('', array_slice($arr, $i)) . $consonants . 'ay';
    }
}

echo json_encode(removeConsonants($str));

?>