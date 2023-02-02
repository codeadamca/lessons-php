<!doctype html>
<html>
<head>
   <title>PHP and For Loops</title> 
</head>
<body>
    
  <h1>PHP and For Loops</h1> 

  <p>Use PHP echo, if statements, and loops to output all three links.</p>

  <?php

  // **************************************************
  // Do not edit this code
  
  $links = array (
    0 => array (
      'name' => 'Codecademy',
      'url' =>'https://www.codecademy.com/',
      'image' => '',
      'description' => 'Learn to code interactively, for free.' ),
    1 => array ( 
      'name' => '',
      'url' => 'https://www.w3schools.com/',
      'image' => 'w3schools.png',
      'description' => 'W3Schools is optimized for learning, testing, and training.' ),
    2 => array (
      'name' => 'Mozilla Developer Network',
      'url' => 'https://www.codecademy.com/',
      'image' => 'mozilla.png',
      'description' => 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.' )
    );
    
  // **************************************************

  for ($i = 0; $i < count ($links); $i ++)
  {
    echo '<h1>'.$links[$i]['name'].'</h1>';
  }

  echo '<pre>';
  print_r ($links);
  echo '</pre>';

  ?>
    
</body>
</html>
