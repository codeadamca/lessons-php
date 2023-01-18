<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
    
    <?php

    echo '<h1>PHP and Creating Output</h1>';
    echo "<p>The PHP echo command can be used to create output.</p>";

    echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>
        
        <ul>
            <li>Use HTML special characters</li>
            <li>Alternate between single and double quotes</li>
            <li>Use a backslash to escape quotes</li>
        </ul>
    
        <h2>More HTML to Convert</h2>

        <p>PHP says "Hello World!"</p>';

    echo '<p>Can you display a sentence with &#39; and &#34;?</p>';

    echo '<p>Can you display a sentence with \' and "?</p>';

    echo "<p>Can you display a sentence with ' ".'and "?</p>';

    echo '<img s';
    echo 'rc="php-lo';
    echo 'go.png">';

    ?>

  </body>
</html>