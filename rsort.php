<?php

#descending
$b=array("red","blue","yellow");
rsort($b);
$blen=count($b);
for($x=0;$x<=$blen;$x++)
{
    echo $b[$x];
    echo '<br>';
}

