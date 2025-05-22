<!doctype html>
<html>
    <head>
        <title>array</title>
    </head>
    <body>
        <?php
        $sam=array('1'=>'Samanta',
            '2'=>'Shikhar Dhavan',
            '3'=>'Hardik Pandya',
            '4'=>'Yuzi Chahal');
        
        echo $sam['1'];
        echo '<br>';
        $sam['5']='Himanshu Shah';
        echo $sam['5'];
        echo '<br>';
        
        $hey=array('samanta',
            'shikshr dhavan',
            'hardik pandya',
            'yuzi chahal');
        
        echo $hey[2];
        echo '<br>';
        
        array_push($hey,'hey'); //add to end
        echo $hey[4];
        echo '<br>';
        
        array_unshift($hey,'hi'); //add to start
        echo $hey[0];
        echo '<br>';
        
        array_pop( $hey); #remove from end
        echo $hey[4];
        echo '<br>';
        
        array_shift($hey); #remove from the start
        echo $hey[0];
        
        unset($hey); #delete array
        echo $hey[0];
        
        
        ?>

    </body>
</html>
