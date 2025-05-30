<?php

$a=array("red","blue","yellow","green");

foreach ($a as $x)
{
    echo "$x ";
}

echo '<br>';

#key and values
$b=array("red"=>"1","blue"=>"2","yellow"=>"3","green"=>"4");
foreach ($b as $y=>$z)
{
    echo "$y : $z ";
}

