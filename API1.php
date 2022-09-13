<?php 

    $string = $_GET["string"];
    $isPalindrome = (strrev($string) == $string);
    // echo $isPalindrome;
    $result = "";

    if ($isPalindrome){ 
        $result .= " is Palindrome";
    }
    else { 
        $result .= "is not Palindrome"; 
    }

    $data = array("string" => $string, "result" => $result);

    echo json_encode($data);
?>