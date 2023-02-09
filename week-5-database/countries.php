<!--
Flag images are copied from:
https://www.sciencekids.co.nz/pictures/flags.html
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Countries</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>

    <h1>List of Countries</h1>

    <?php

    $connect = mysqli_connect(
        'sql213.epizy.com', // Host
        'epiz_29666120', // Username
        'U9x2tTEPKECh', // Password
        'epiz_29666120_portfolio' // Database name
    );

    if(mysqli_connect_errno()) 
    {
        echo "Error: " . mysqli_connect_error();
        exit();
    }

    $query = 'SELECT *
        FROM countries
        ORDER BY name';
    $result = mysqli_query($connect, $query)
        or die(mysqli_error($connect));

    echo 'Rows: ' . mysqli_num_rows($result);

    while($record = mysqli_fetch_assoc($result))
    {
        // print_r($record);

        echo '<div class="country">';
        echo '<h2>'.$record['name'].'</h2>';
        echo '<p>Population: '.number_format($record['population']).'</p>';

        echo '<div class="faces">';

        $faces = round($record['population'] / 10000000);
        if($faces)
        {
            for($i = 0; $i < $faces; $i++)
            {
                echo '&#9787;';
            }
        }
        else
        {
            echo '&lt;&#9787;';
        }

        echo '</div>';

        echo '<img src="images/'.$record['flag'].'" width="200">';
        echo '</div>';
    }

    ?>
    
</body>
</html>