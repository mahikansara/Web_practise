<!doctype html>
<html>
    <head>
        <title>logical operator</title>
    </head>
    <body>
        <?php
        $x=1;
        $y=0; 
        
        #and operator
         $z = ($x === 1 && $y === 1) ? true:false;
        echo "And operator =". (boolval($z)?'True':'False')."<br><br>";
        
        #or operator
        $z = ($x == 1 || $y == 1) ? true:false;
        echo "Or operator = ". (boolval($z)?'True':'False')." <br><br>";
        
        #and operator
         $z = ($x == 1 and $y == 1) ? true:false;
        echo "And operator = ". (boolval($z)?'True':'False')." <br><br>";
        
        #or operator
        $z =( $x == 1 or $y == 1 )? true:false;
        echo "Or operator = ". (boolval($z)?'True':'False')." <br><br>";
        
        #not operator
        $z =!( $x == 1 or $y == 1 )? true:false;
        echo "Not operator = ". (boolval($z)?'True':'False')." <br><br>";
        
        
        
        ?>

    </body>
</html>


