<?php
$year = $_POST['year'];



function isPrime($yearOfBirth) {
    $currentYear = date('Y');
    $age = $currentYear - $yearOfBirth;
    
    if ($age <= 1) {
        return false;
    } 
    else if ($age == 2) {
        return true;
    } 
    else {
        for ($i = 2; $i < $age; $i++) {
            if ($age % $i == 0) {
                return false;
            }
        }
        return true;
    }
}


if(isPrime($year)){
    $response['status'] = "your age is prime";
}
else{
    $response['status'] = "your age is not prime";
}
echo json_encode($response);


?>