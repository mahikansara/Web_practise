<?php

#value descending
$c2=array("red"=>1,"blue"=>2,"yellow"=>3);
arsort($c2);

foreach ($c2 as $d2=>$dlen)
{
    echo "Key".$d2 .": Value". $dlen;
    echo '<br>';
}

