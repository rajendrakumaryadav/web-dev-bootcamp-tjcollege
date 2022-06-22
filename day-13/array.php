<?php
    $array = array(1, 12, 3, 4, 5, 6, 7);
    $array1 = [1, 2, 3, 4, 5, 6, 7];
    $associative_array = array('Demo' => 'Demo', 'bc' => 2, 'ca' => 3);
    print_r(array_change_key_case($associative_array));
    var_dump(array_chunk($array, 2));
    $multi_dim_array = array(
        array(
            "id" => 1, "name" => "ABC",
        ), array(
            "id" => 2, "name" => "BCD",
        ), array(
            "id" => 3, "name" => "DEF",
        ),
    );
    print_r(array_column($multi_dim_array, 'id'));
    
    $name = array('ABC', 'EFG', 'DEX');
    $age = array(12, 16, 19);
    $combination = array_combine($name, $age);
    print_r($combination);
    
    print_r(array_count_values($name));
    
    $a1 = array(41, 123, 12, 1, 1212);
    print_r(rsort($a1));
    $a2 = array(2, 3, 4, 5);
    
    print_r(array_diff($a1, $a2));
    
    $array_fill = array_fill(0, 10, "A");
    print_r($array_fill);
    
    $array_flip = array_flip($associative_array);
    print_r($array_flip);
    
    print(array_sum($array));
    
    $assoc_array = array();
    $assoc_array['Peter'] = 35;
    $assoc_array['A'] = 35;
    
    print_r($assoc_array);
    foreach ($assoc_array as $key => $value) {
        print("Age of $key is $value.\n");
    }
    
    $multi = array(array(0, 10, 20, 23), array(12, 123, 12, 3));
//    1   2   3
//    4   4   3
//    5   1   2
    echo $multi[1][0];
    echo "<br/><h2><u>Global Variable</u></h2>";
//    print_r($GLOBALS);
    echo "<br />";
    print("SERVER ")."<BR>";
    print_r($_SERVER);
    echo "<br>";
    print("<h2>REQUEST</h2>");
    echo "<br>";
    print_r($_REQUEST);
    print("<h2>POST / GET </h2>");
    print_r($_POST);
    print_r($_GET);
    print_r($_FILES);
    print_r($_ENV);
    print_r($_COOKIE);
    //    print_r($_SESSION);
    $GLOBALS['x'] = 'X';
    print_r($GLOBALS['x']);
    print_r('REQUEST_METHOD');
    
    foreach ($_SERVER as $key => $value) {
        echo "$key \t: $value <br/>";
    }