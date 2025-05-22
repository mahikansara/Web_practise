<!doctype html>
<html>
    <head>
        <title>comparision</title>
    </head>
    <body>
        <h1>Comparision Operators</h1>
        <?php
        $x=10;
        $y=20;        
        
        #equal
        echo "Equal = ";
        var_dump($x==$y);
        echo '<br><br>';
        
        #equal equal to
        echo "Equal equal to = ";
        var_dump($x===$y);
        echo '<br><br>';
        
        #not equal
        echo "Not Equal to = ";
        var_dump($x!=$y);
        echo '<br><br>';
        
        #not equal
        echo "Not Equal to = ";
        var_dump($x<>$y);
        echo '<br><br>';
        
        #not equal equal to 
        echo "Not Equal Equal to = ";
        var_dump($x!==$y);
        echo'<br><br>';
        
        #greater
        echo "Greater = ";
        var_dump($x>$y);
        echo '<br>';
        echo '<br>';
        
        #lesser
        echo "Lesser = ";
        var_dump($x<$y);
        echo '<br><br>';
        
        #greater equal
        echo "Greater Equal = ";
        var_dump($x>=$y);
        echo '<br><br>';
        
        #lesser equal
        echo "Lesser Equal = ";
        var_dump($x<=$y);
        echo '<br><br>';
        
        #spaceship
        echo "Spaceship = ";
        var_dump($x<=>$y);
        echo '<br>';
        ?>

    </body>
</html>


