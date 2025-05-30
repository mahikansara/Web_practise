<?php

for($a=1;$a<=5;$a++)
{
    if($a==3)        break;
    echo $a;
    
}

echo '<br>';

for($a=1;$a<=5;$a++)
{
    if($a==3)        continue;
    echo $a;
    
}

echo '<br>';

for($a=0;$a<=100;$a+=10)
{
    echo $a;
}

