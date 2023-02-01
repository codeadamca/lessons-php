<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Statement Interview</title>
</head>
<body>

<h1>For Statement Interview</h1>

<?php

for($i = 1; $i <= 40; $i++)
{

    if($i % 4 == 0 and $i % 5 == 0)
    {
        echo '<p style="color:purple;">This is loop number '.$i.'</p>';
    }
    elseif($i % 5 == 0)
    {
        echo '<p style="color:red;">This is loop number '.$i.'</p>';
    }
    elseif($i % 4 == 0)
    {
        echo '<p style="color:blue;">This is loop number '.$i.'</p>';
    }
    else
    {
        echo '<p>This is loop number '.$i.'</p>';
    }

}

?>
    
</body>
</html>