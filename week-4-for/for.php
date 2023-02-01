<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP For Loop</title>
</head>
<body>

<h1>PHP For Loop</h1>

<?php

for($i = 0; $i < 5; $i++)
{
    echo '<p>This is loop number ' . $i . '</p>';
}

for($i = 1; $i <= 6; $i++)
{   
    echo "<h$i>This is loop number $i</h$i>";
}

?>

<p>When the above loop is finished, the counter is <?=$i?>!</p>

<?php for($i = 0; $i < 5; $i ++): ?>

    <p>This is loop number <?=$i?>!</p>

<?php endfor; ?>


<?php echo $i; ?>
<?=$i?>

    
</body>
</html>