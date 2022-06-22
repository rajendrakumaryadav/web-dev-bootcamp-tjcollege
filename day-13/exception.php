<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exception Handling</title>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//            if ($_REQUEST['num2'] == 0) {
//                throw new DivisionByZeroError("Division by Zero");
//
//            } else {
            
            try {
                $sum = $_REQUEST['num1'] / $_REQUEST['num2'];
                echo $sum."<br />";
            } catch (DivisionByZeroError $ex) {
                echo "Divide by zero error".$ex;
            } finally {
                echo "Finally all tasks are done.";
            }
//            }
        }
    ?>
</head>
<body>
<form action="./exception.php" method="post">
    <input type="text" name="num1" id="num1"> /
    <input type="text" name="num2" id="num2">
    <input type="submit" value="div">
</form>

</body>
</html>