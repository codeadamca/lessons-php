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

    /*
    Monday - Do you have a case of the Mondays?
    Friday Afternoon - It’s almost the weekend!
    Before Noon - Have a good morning!
    After Noon - Have a good day!
    Weekend - It’s the weekend!!!
    */

    $day = date('w');
    $hour = date('G');

    $day = 1;
    $hour = 14;

    echo '<p>The current hour is '.$hour.' and 
        the current day is '.$day.'</p>';

    if($day == 1)
    {
        echo '<h2>Do you have a case of the Mondays?<h2>';
    }
    elseif($day == 6 or $day == 0)
    {
        echo '<h2>It\'s the weekend!!!<h2>';
    }
    elseif($day == 5 and $hour >= 12)
    {
        echo '<h2>It\'s almost the weekend!</h2>';
    }
    elseif($hour < 12)
    {
        echo '<h2>Have a good morning!</h2>';
    }
    else
    {
        echo '<h2>Have a good day!</h2>';
    }

    ?>
    
</body>
</html>