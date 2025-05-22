<!doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php 
        $x=10;
        function printss()
        {
           echo'Value of x = ';
           echo $GLOBALS['x'];
           echo '<br>';
           echo 'Value of x = ';
           $GLOBALS['x']=123;
           echo $GLOBALS['x'];
           echo '<br>';
           
           echo'Value of x = ';
           global $x;
           echo "$x";
           echo '<br>';
           
           $x=100;
           echo'Value of x = ';
           echo $x;
           echo '<br>';
         
        }
        
        function prints()
        {
            echo'Value of x = ';
            echo $GLOBALS['x'];
        }
        printss();
        prints();
        
        ?>

    </body>
</html>
