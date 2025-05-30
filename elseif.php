<?php

$a=date("H");
echo $a;
echo '<br>';

if($a<"15")
{
    echo 'Hello';
}
elseif ($a>15) {
    echo 'Say';
}
 else {
echo 'Bye';   
}

