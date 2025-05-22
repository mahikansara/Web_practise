<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo '<h1>hello</h1>';
        $a=10;
        $b=20;
        $c="hi hello paaji khana khake jana";
        echo"$a<br>";
        echo"$b<br>";
        echo"$c<br>";
        
        function test()
        {
            global $a, $b;
            $b = $a + $b;
        }
        test();
        echo $b;
        
        ?>
    </body>
</html>
