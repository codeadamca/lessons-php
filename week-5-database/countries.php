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
        'epiz_29666120_portfolio' // Database
    );

    if(mysqli_connect_errno()) 
    {
        echo mysqli_connect_error();
        exit();
    }

    $query = "SELECT *
        FROM countries
        ORDER BY name";
    $result = mysqli_query($connect, $query)
        or die(mysqli_error($connect));

    echo "Number of rows ".mysqli_num_rows($result);

    while($record = mysqli_fetch_assoc($result))
    {

        echo '<div class="country">';
        echo '<h2>'.$record['name'].'</h2>';
        echo '<p>
            Population: '.number_format($record['population'], 0, '.', ',').'
            <br>';

        if($record['population'] < 10000000)
        {
            echo '&lt; &#9787;';
        }
        else
        {
            $faces = round($record['population'] / 10000000);
            for($i = 0; $i < $faces; $i++)
            {
                echo '&#9787;';
            }
        }

        echo '</p>';

        echo '<img src="images/'.$record['flag'].'" width="200">';
        echo '</div>';

        // print_r($record);

    }

    ?>
    
</body>
</html>