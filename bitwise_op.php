<!doctype html>
<html>
    <head>
        <title>bitwise</title>
    </head>
    <body>
        <h1>Bitwise Operator</h1>
        <?php
        $x=10;
        $y=2;
        
        #and operator
        $z = $x & $y;
        echo "And operator $z <br><br>";
        
        #or operator
        $z = $x | $y;
        echo "Or operator $z <br><br>";
        
        #<<(left) shift
        $z = $x << $y;
        echo "Left shift $z <br><br>";
        
        #>>(right) shift
        $z = $x >> $y;
        echo "Right shift $z <br><br>";
        
        #~ not operator
        $a=2;
        
        $b=~$a;
        echo "Not opeator $b <br><br>";
        
        $c=2;
        $d=2;
        
        #xor operator
        $e = $c ^ $d;
        echo "Xor operator $e <br><br>";
        ?>
        
        
        

    </body>
</html>


