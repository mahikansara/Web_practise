<?php
#ascending
$a=array("red","blue","yellow");
sort($a);
$clen=count($a);
for($x=0;$x<=$clen;$x++)
{
    echo $a[$x];
    echo '<br>';
}



