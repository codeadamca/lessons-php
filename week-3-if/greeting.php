<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Greeting</title>
</head>
<body>

    <h1>Welcome to My Website!</h1>

    <?php

    $day = date('w');
    $hour = date('G');

    echo '<p>The current hour is '.$hour.' and 
        the current day is '.$day.'</p>';

    ?>
    
</body>
</html>