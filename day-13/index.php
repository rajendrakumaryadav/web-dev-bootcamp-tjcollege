<?php
//    session_start();
//
//    $_SESSION['name'] = 'Rajendra';
//    $_SESSION['age'] = 26;
//
//
//    print_r($_SESSION);
//
//    //    $myfile = fopen('array.php', 'r')
//    //    or die('Unable to open the file');
//    //
//    //    echo fread($myfile, filesize('array.php'));
//    //    fclose($myfile);
?>
<?php
    $age = array('Rajendra' => 26, 'ABC' => 20);
    echo json_encode($age)."<br/>";
    $age_string = '{"Rajendra":26,"ABC":20}';
    $a = json_decode($age_string, true);
    print_r($a);
    
    

