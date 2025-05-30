<?php

#byref
$a=array("red","blue","yellow","green");

foreach ($a as &$b)
{
    if($b == "yellow")
    {
        $b = "pink";
    }
}
var_dump($a);
