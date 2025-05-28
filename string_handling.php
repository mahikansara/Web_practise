<?php

#double quotes
$ex="double quote";
echo "$ex <br>";

#single quote
$ex2='single quote';
echo $ex2;
echo '<br>';

#string length
echo strlen($ex2);
echo '<br>';

#word count
echo str_word_count("Hello friend");
echo '<br>';

#search text 
$test= strpos("Hello friend", 'friends');
echo $test?$test:'Match Not Found';
echo '<br>';

#upper case
echo strtoupper("Hello friend");
echo '<br>';

#lower case
echo strtolower("HELLO FRIEND");
echo '<br>';

#string replace
$ex2="Hello friend";
echo str_replace("friend","dost" , $ex2);
echo '<br>';

#string reverse
echo strrev($ex2);
echo '<br>';

#remove whitespace
$ex3=" Hello friend ";
echo trim($ex3);
echo '<br>';

#convert string into array
$x="Hello friend";
$y= explode(" ", $x);
print_r($y);
echo '<br>';

#string concatenation
$x="hello";
$y="friend";
$z=$x.$y;
echo "$z";
echo '<br>';

$z=$x." ".$y;

echo $z;
echo '<br>';

$z="$x $y";
echo $z;
echo '<br>';

#sub string
$x="hello friend";
echo substr($x, 6, 4);
echo '<br>';

#slice to end
echo substr($x, 6);
echo '<br>';

#slice from end
echo substr($x, -5, 2);
echo '<br>';

#negetive length
echo substr($x, 6,-2);
echo '<br>';

#escape characters
$a="Hello, hey \"friend\" dost";
echo $a;
echo '<br>';

$b="Hello, hey 'friend' dost";
echo $b;
echo '<br>';

$c="here it is a variable named \$c";
echo $c;
echo '<br>';

$d="Hello\ffriend";
echo $d;
echo '<br>';

echo "\110\111\111";




?>


