<?php
header('Content-Type: application/json');
sleep(2);
// check data vs DB
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);;
$password = filter_input(INPUT_POST, 'password');
$origin = filter_input(INPUT_POST, 'origin', FILTER_SANITIZE_STRING);

# comprobación de datos contra la base de datos
if ($email == "LAUdinig96@hotmail.com" && $password == "daniela96") {
    $access = true;
} else {
    $access = false;
}






#($email == "LAUdinig96@hotmail.com" && $password == "diniela96") ? $access = true : $access = false;
// return data to debug
echo json_encode([
    'email' => $email,
    'password' => $password,
    'origin' => $origin,
    'access' => $access
]);