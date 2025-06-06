<?php

#key ascending
$c1=array("red"=>1,"blue"=>2,"yellow"=>3);
ksort($c1);

foreach ($c1 as $d1=>$dlen)
{
    echo "Key".$d1 .": Value". $dlen;
    echo '<br>';
}

