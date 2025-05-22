<!doctype html>
<html>
    <head>
        <title>conditional</title>
    </head>
    <body>
        <h1>Conditional Statement</h1>
<?php 
$x=10;
$a= null;
$y=$x>10?"True":"False";
echo "Conditional = $y <br><br>";

$y=$a??$x;
echo "?? = $y <br><br>";

        
?>
    </body>
</html>

