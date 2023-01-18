<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>

    <?php

    $connect = mysqli_connect(
        'sql213.epizy.com', // host
        'epiz_29666120', // username
        'U9x2tTEPKECh', // password
        'epiz_29666120_portfolio' // database
    );

    $query = 'SELECT * FROM movies';
    $result = mysqli_query($connect, $query);

    echo 'Rows: '.mysqli_num_rows($result);

    while($record = mysqli_fetch_assoc($result))
    {
        echo '<h2>'.$record['title'].'</h2>';
        echo '<ul>
                <li>Genre: '.$record['genre'].'</li>
                <li>Year: '.$record['year'].'</li>
            </ul>';

        for($i = 0; $i < 10; $i ++)
        {
            if($i < $record['rating'])
            {
                echo '&starf;';
            }
            else
            {
                echo '&star;';
            }
        }
    }

    ?>
    
</body>
</html>