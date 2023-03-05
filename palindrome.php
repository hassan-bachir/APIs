<?php
$inputString = $_GET["string"];

function isPalindrome($inputString) {
   
    
  
    $inputString = strtolower($inputString);
    
 
    if (strlen($inputString) <= 1) {
        return true;
    }
    
   
    if ($inputString[0] == $inputString[strlen($inputString) - 1]) {
        return isPalindrome(substr($inputString, 1, -1));
    } else {
        return false;
    }
}
if (isPalindrome($inputString)){
    $response['status'] = "IS PALYNDROME";
}
else{
    $response['status'] = "NOT PALYNDROME";
}

echo json_encode($response);



?>