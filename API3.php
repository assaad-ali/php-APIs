<?php 

    $password = $_POST["password"]
    $result = "weak password";

    $uppercase_letters = preg_match('@[A-Z]@', $password);
    $lowercase_letters = preg_match('@[a-z]@', $password);
    $numbers = preg_match('@[0-9]@', $password);
    $symbols = preg_match('@[$!%*#?&]@', $password);
    
    if($uppercase_letters && $lowercase_letters &&!$numbers && $symbols && strlen($password) > 11) {
        $result = "strong password";
    }

    $data = array("password" => $password, "password strength" => $result);
    echo json_encode($data );

?>