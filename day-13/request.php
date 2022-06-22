<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Requests</title>
    <?php
        if (isset($_POST) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['name']) || $_POST['name'] == '' || is_numeric($_POST['name'])) {
                echo "<p>
                 <span style='color:red;'>Name</span> field is must
                </p>";
            } else {
                if (isset($_POST['email'])) {
                    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        echo "<span style='color:red'>Email field is invalid.</span>";
                    } else {
                        if (isset($_POST['name'])) {
                            echo "Hello, ".strtoupper($_POST['name']).", Your email address is".$_POST['email']."!";
                        }
                    }
                }
            }
        }
    ?>
</head>
<body>
<form action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])) ?>" method="post">

    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br><br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <br><br>
    <button style="margin-left: 45px;" type="submit">Add it to record</button>
    <br>
</form>
</body>
</html>