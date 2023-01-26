<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Greeting</title>
</head>
<body>

    <h1>PHP Greeting</h1>

    <?php
    
    /*
    Monday - Do you have a case of the Mondays?
    Friday Afternoon - It's almost the weekend!
    Before Noon - Have a good morning!
    After Noon - Have a good day!
    Weekend - It's the weekend!!!
    */

    $day = date('w');
    $hour = date('G');

    $day = 5;
    $hour = 13;

    echo "<p>The current day is $day and the current hour is $hour.</p>";

    // echo '<p>String: '.is_string($day).'</p>';

    if($day == 1)
    {
        echo '<h2>Do you have a case of the Mondays?</h2>';
    }
    elseif($day == 0 or $day == 6)
    {
        echo '<h2>It\'s the weekend!!!</h2>';
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