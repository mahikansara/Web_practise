<?php

$a=10;

#&& operator 
if($a>5 && $a<15)
{
    echo 'Hello';
}
else 
{
    echo 'Bye';
}

echo '<br>';

#|| operator
if($a>5 || $a<15)
{
    echo 'Hello';
}
 else {
echo 'Bye';    
}

echo '<br>';

#and operator 
if($a>5 and $a<15)
{
    echo 'Hello';
}
else 
{
    echo 'Bye';
}

echo '<br>';

#or operator
if($a>5 or $a<15)
{
    echo 'Hello';
}
 else {
echo 'Bye';    
}

echo '<br>';

#xor operator
if($a>5 xor $a>15)
{
    echo 'Hello';
}
 else {
echo 'Bye';    
}

echo '<br>';

#not operator
if($a!=5 xor $a!=15)
{
    echo 'Hello';
}
 else {
echo 'Bye';    
}



