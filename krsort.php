<?php

#key descending
$c3=array("red"=>1,"blue"=>2,"yellow"=>3);
krsort($c3);

foreach ($c3 as $d3=>$dlen)
{
    echo "Key".$d3 .": Value". $dlen;
    echo '<br>';
}

