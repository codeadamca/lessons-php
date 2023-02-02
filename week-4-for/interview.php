<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview Coding Problem</title>
</head>
<body>

    <h1>Interview Coding Problem</h1>

    <?php

    for($i = 1; $i <= 40; $i ++)
    {

        if($i % 5 == 0 and $i % 4 == 0)
        {
            echo '<span style="color:purple;">'.$i.'</span>';
        }
        elseif($i % 5 == 0)
        {
            echo '<span style="color:red;">'.$i.'</span>';
        }
        elseif($i % 4 == 0)
        {
            echo '<span style="color:blue;">'.$i.'</span>';
        }
        else
        {
            echo $i;
        }
        
        echo '<br>';

    }

    ?>
    
</body>
</html>