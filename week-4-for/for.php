<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP For Loops</title>
</head>
<body>
    
    <h1>PHP For Loops</h1>

    <?php

    for($i = 0; $i < 5; $i++)
    {
        echo '<p>This is loop number ' . $i . '</p>';
    }

    // $i ++
    // $i += 1
    // $i = $i + 1

    for($i = 1; $i <=6; $i ++)
    {
        echo "<h$i>This is loop number $i</h$i>";
    }

    ?>

    <?php for($i = 0; $i < 5; $i++): ?>

        <p>This is loop number <?=$i?></p>

    <?php endfor; ?>

</body>
</html>