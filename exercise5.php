<?php

$actual_link = $_SERVER['REQUEST_URI'];

$page = explode('/', $actual_link);

$page = $page[2];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 5 - Girl Power in Code</title>

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <?php include 'include/styles.php' ?>

</head>

<body id="body-pd">

    <?php include 'include/sidebar.php' ?>

    <!--Container Main start-->
    <div class="height-100 bg-light main-content">

        <div class="container-title">
            <h4 class="title">Exercise 5</h4>
        </div>

    </div>

    <?php include 'include/scripts.php' ?>

</body>

</html>