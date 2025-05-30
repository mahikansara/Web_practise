<?php

#break
$a=array("red","blue","yellow","green");
        
foreach ($a as $b)
{
    if($b == "blue")        break;
    echo $b;
}

echo '<br>';

#continue
$c=array("red","blue","yellow","green");

foreach ($c as $d)
{
    if($d == "yellow")
        continue;
    echo $d ;
}

