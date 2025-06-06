<?php

#value ascending
$c=array("red"=>1,"blue"=>2,"yellow"=>3);
asort($c);

foreach ($c as $d=>$dlen)
{
    echo "Key".$d .": Value". $dlen;
    echo '<br>';
}
