<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>
<body>

    <?php

    echo '<h1>PHP Variables</h1>';

    $first_name = 'Adam';
    $last_name = 'Thomas';

    echo '<p>Hello '.$first_name.' '.$last_name.' to this website!</p>';

    echo "<p>Hello $first_name $last_name to this website!</p>";

    ?>

    <p>Hello <?php echo $first_name; ?> <?php echo $last_name; ?> to this website!</p>

    <p>Hello <?=$first_name; ?> <?=$last_name; ?> to this website!</p>
    
</body>
</html>