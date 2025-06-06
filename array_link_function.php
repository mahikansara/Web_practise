<?php

function hello()
{
    echo "Hello, how are you?";
}

$a=array("red","12",["apple","kiwi"], hello());
$a[3]();
