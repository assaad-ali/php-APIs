<?php

    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $result = pow($a, 3) + ($b * $c) - ($a/$b);

    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){

        $data = array("a^3 + b*c - a/b = " => $result);
        echo json_encode($data );
    } 
?>