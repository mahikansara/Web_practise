
<!doctype html>
<html>
    <head>
        <title>local variable</title>
    </head>
    <body>
        <?php
        echo '<h1>Example of variable scope</h1>';
        echo '<ol><li>local</li><p>Variable inside the function or block are local variable';
        function example_local()
        {
            $x = 11; #its a local variable
            echo '<br><br>Example of a local scope $x = '.$x;
        }
        example_local();
        echo '<br><br>It is still accessible'.$x; #$x being a local variable inside exmaple_local
                                                  #function can't be accessed outside the function
        ?>

    </body>
</html>
