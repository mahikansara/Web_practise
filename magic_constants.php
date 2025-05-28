<!doctype html>
<html>
    <body>
        <?php
        class fruit
        {
        public function myvalue()
        {
        //return __CLASS__;
        return __METHOD__;
        //return fruit::class;
        }
        }
        $kiwi = new fruit();
        echo $kiwi->myvalue();
        echo '<br>';
        echo __DIR__;
        echo '<br>';
        echo __FILE__;
        echo '<br>';
        
        function show()
        {
            return __FUNCTION__;
        }
        echo show();
        echo '<br>';
        echo __LINE__;
        echo '<br>';
        
        ?>
                

    </body>
</html>



