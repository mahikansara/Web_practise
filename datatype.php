<!doctype html>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <?php
        echo "<h1>Using var_dump to understand the concept of datatypes</h1>";
        echo "<h1>var_dump is an inbuilt function in php that provides you that variable details </h1>";
        $x=10;
        var_dump($x);
        echo '<br>';
        
        $y=12.12;
        var_dump($y);
        echo '<br>';
        
        $z="hello";
        var_dump($z);
        echo '<br>';
        
        $a=TRUE;
        var_dump($a);
        echo '<br>';
        
        $b= array("Hey","Hello","Hii");
        var_dump($b);
        ?>

    </body>
</html>
