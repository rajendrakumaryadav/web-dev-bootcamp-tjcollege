<?php
    declare(strict_types=1);
    
    // math
    echo pi()."<br/>";
    echo min(10, 200, 120, 9, 3, -20, -30)."<br/>";
    echo max(10, 200, 120, 9, 3, -20, -30)."<br/>";
    echo abs(1)."<br/>";
    echo abs(-1)."<br/>";
    echo sqrt(25)."<br/>";
    echo round(0.4985293871298371932, 3)."<br/>";
    echo round(0.60)."<br/>";
    echo rand()."<br/>";
    echo rand(10, 1000)."<br/>";

?>

<?php
    // consts
    define('DATE', '17-06-2022');
    const DATE1 = '17-06-2022';
    echo DATE."\t".DATE1."<br/>";
    define('MOBILE_BRAND', ["Apple", "Samsung", "Mi", "Oppo", "Realme", "Motorola"]);
    foreach (MOBILE_BRAND as $brand) {
        echo $brand."<br/>";
    }
    
    echo 1 == "1";
    echo "<br/>";
    echo !false;
    echo "<br/>";
    
    $x = 1 == '1' ? 'equal' : 'not equal';
    echo $x;

?>

<?php
    // conditionals
    $day_of_month = date('d');
    echo "Day of the month :".$day_of_month;
    if ($day_of_month <= '10') {
        echo "<br/>"."Wait for salary..."."<br/>";
    } else {
        if ($day_of_month <= 18 and $day_of_month > 10) {
            echo "<br/>"."sorry! this time salary will be released with some delay"."<br/>";
        } else {
            echo "<br/>"."Please contact to bank or A/C section in company."."<br/>";
        }
    }
    
    switch (date('d')) {
        case 10:
            echo "<br/>"."Wait for salary..."."<br/>";
            break;
        case 11:
        case 12:
        case 13:
        case 14:
        case 17:
        case 18:
            echo "<br/>"."sorry! this time salary will be released with some delay"."<br/>";
            break;
        default:
            echo "<br/>"."Please contact to bank or A/C section in company."."<br/>";
            break;
    }
    
    $status = match (10) {
        1 => 10,
        2 => 20,
        3 => 30,
        8 => 80,
        9 => 90,
        10 => 100
    };
    echo PHP_EOL.$status.PHP_EOL;
    echo "<br/>";
?>

<?php
    //    While
    $var = 1;
    while ($var <= 10) {
        echo $var."\t";
//        $var += 1;
        $var = $var + 1;
    }
    echo "<br />".PHP_EOL;
    
    // do-while
    $var = 1;
    do {
        echo $var."\t";
        $var += 1;
    } while ($var <= 10);
    echo "<br />".PHP_EOL;
    
    // for
    $data = range(1, 10);
    
    for ($x = 0; $x <= sizeof($data) - 1; $x++) {
        echo $data[$x]."\t";
    }
    echo "<br />".PHP_EOL;
    
    
    //    foreach
    $data = range(1, 10);
    //    var_dump($data);
    foreach ($data as $num) {
        if ($num === 5) {
//            break;
//            continue;
        }
        echo $num."\t";
    }
    echo "<br />".PHP_EOL;
?>

<?php
    require 'functions.php';
    $greet = greet_the_world();
    echo $greet;
    
    echo greet_to("Rajendra");
    echo add((int) 10.9, 10, 30);
    echo add(10, 10);
?>

<?php
    $arr = array("1", "2", "3");
    echo "These mobile brands are chinese ".MOBILE_BRAND[3]." ".MOBILE_BRAND[4].PHP_EOL."<br/>";
    foreach ($arr as $element) {
        echo $element."\t";
    }
    echo "<br> \n";
    
    $associate_array = ["a" => 10, "b"=>"string", "c" => 30];
    var_dump($associate_array);
?>