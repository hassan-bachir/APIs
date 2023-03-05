<?php

$password = $_POST['password'];
$email = $_POST["email"];



function validate_password($password) {
   
    return preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[!@#$%^&*])(?=.*[a-z]).{8,}$/', $password);
}

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validate_credentials($email, $password) {
    $is_valid_email = validate_email($email);
    $is_valid_password = validate_password($password);
    return $is_valid_email && $is_valid_password;
}
if (validate_credentials($email,$password)){
    $response['status'] = "success";
}
else{
    $response['status'] = "failed";
}

echo json_encode($response);

