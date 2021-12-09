<?php


            $connection = mysqli_connect('localhost', 'eslology_zaza', 'rufus4', 'eslology_site');

if ($connection) {
    echo "WE are the connected ones";
} else {
    die("Database connection failure");
};

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if (!$result) {
    die('query FAILED' . mysqli_error($connection));
};


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="col-sm-6 bg-primary m-4">

            <?php

            while ($row = mysqli_fetch_assoc($result)) {

            ?>
                <pre class="m-6">

                <?php
                print_r($row);
                ?>
                </pre>
            <?php


            };


            ?>

        </div>

    </div>

</body>

</html>