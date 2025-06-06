<?php

#change key case
$a=array("mahi"=>"1","sikki"=>"2","harsh"=>"3","vivek"=>"4");
print_r(array_change_key_case($a,CASE_UPPER));
echo '<br><br>';

$a=array("MAHI"=>"1","SIKKI"=>"2","HARSH"=>"3","VIVEK"=>"4");
print_r(array_change_key_case($a, CASE_LOWER));
echo '<br><br>';

#chunk
$b=array("mahi","sikki","harsh","vivek");
print_r(array_chunk($b, 2));
echo '<br><br>';

#column
$c=array(array("id"=>1,"name"=>"mahi","lname"=>"kansara"),
    array("id"=>"2","name"=>"sikki","lname"=>"rathore"),
    array("id"=>"3","name"=>"harsh","lname"=>"shah"));

$lname=array_column($c, "lname");
print_r($lname);
echo '<br><br>';

#combine
$name=array("mahi","sikki","vivek","harsh");
$surname=array("kansara","rathore","munjyasara","shah");
print_r(array_combine($surname, $name));
echo '<br><br>';

#count values
$d=array("mahi","sikki","mahi","harsh");
print_r(array_count_values($d));
echo '<br><br>';

#diff
$e=array("mahi","sikki","harsh","vivek");
$f=array("mahi","sikki","naresh","vivek");
$di=array_diff($f,$e);
print_r($di);
echo '<br><br>';

#diff_assoc
$g=array("a"=>"mahi","b"=>"sikki","c"=>"harsh");
$h=array("a"=>"mahi","e"=>"sikki","c"=>"vivek");
$dif=array_diff_assoc($g,$h);
print_r($dif);
echo '<br><br>';

#diff_key
$i=array("A"=>"mahi","B"=>"sikki","C"=>"harsh");
$j=array("D"=>"mahi","B"=>"sikki","C"=>"harsh");
$dif=array_diff_key($i,$j);
print_r($dif);
echo '<br><br>';

#uassoc
//function hello($a,$b)
//{
//    var_dump($a);
//    var_dump($b);
//    var_dump($a>$b);
//    echo '<br>';
//    if($a===$b)
//    {
//        echo $a."hi".$b."<br>";
//        return 0;
//    }
//    echo $a."hello".$b;
//    echo (($a>$b)?1:-1);
//    echo '<br>';
//    return(($a>$b)?1:-1);
//}
//$i=array("A"=>"mahi","B"=>"sikki","C"=>"harsh");
//$j=array("D"=>"mahi","B"=>"sikki","C"=>"harsh");
//$result=array_diff_uassoc($i,$j,hello($a, $b));
//print_r($result);

#ukey
function hey($a,$b)
{
    if($a===$b)
    {
        return 0;
    }  
    return (($a>$b)?1:-1);
}
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$b1=array("a"=>"blue","b"=>"black","e"=>"blue");

$r=array_diff_ukey($a1,$b1,"hey");
print_r($r);
echo '<br><br>';

#fill
$a=array_fill(4, 5, "yellow");
print_r($a);
echo '<br><br>';

#fill_keys
$k=array(1,2,3,4,5);
$hey=array_fill_keys($k, "yellow");
print_r($hey);
echo '<br><br>';

#filter
function odd($var)
{
    return ($var & 1);
}
$aa=array(1,2,3,4,5);
print_r(array_filter($aa,"odd"));
echo '<br><br>';

#flip
$flip=array("a"=>"mahi","b"=>"sikki","c"=>"naresh");
print_r(array_flip($flip));
echo '<br><br>';

#intersect
$in1=array("a"=>"mahi","b"=>"sikki","c"=>"harsh","d"=>"naresh");
$in2=array("a"=>"mahi","d"=>"sikki","c"=>"harsh");
$int=array_intersect($in1,$in2);
print_r($int);
echo '<br><br>';

#intersect assoc
$in1=array("a"=>"mahi","b"=>"sikki","c"=>"harsh","d"=>"naresh");
$in2=array("a"=>"mahi","b"=>"sikki","c"=>"harsh");
$int= array_intersect_assoc($in1,$in2);
print_r($int);
echo '<br><br>';

#intersect key
$a2=array("a"=>"mahi","b"=>"sikki","c"=>"harsh","d"=>"naresh");
$b2=array("a"=>"mahi","b"=>"sikki","d"=>"harsh");
$kin=array_intersect_key($a2,$b2);
print_r($kin);
echo '<br><br>';

#intersect uassoc
function hello($a,$b)
{
    
    if($a===$b)
    {
       
       return 0;
    }
   
    return(($a>$b)?1:-1);
}
$i=array("A"=>"mahi","B"=>"sikki","C"=>"harsh");
$j=array("D"=>"mahi","B"=>"sikki","C"=>"harsh");
$result= array_intersect_uassoc($i,$j,"hello");
print_r($result);
echo '<br><br>';

#intersect ukey
function heyy($a1,$b1)
{
    if($a1===$b1)
    {
        return 0;
    }
    return(($a1>$b1)?1:-1);
}
$i1=array("A"=>"mahi","B"=>"sikki","C"=>"harsh");
$j1=array("D"=>"mahi","E"=>"sikki","C"=>"harsh");
$r1=array_intersect_ukey($i1,$j1,"heyy");
print_r($r1);
echo '<br><br>';

#key_exists
$ki=array("a"=>"mahi","b"=>"sikki");
if(array_key_exists("b", $ki))
{
    echo "Exists";
}
 else {
    echo "Doesn't Exists";
    
}
echo '<br><br>';

#keys
$a4=array("1"=>"mahi","2"=>"sikki");
print_r(array_keys($a4));
echo '<br><br>';

#map
function mul($v)
{
    return ($v*$v);
}

$a5=array(1,2,3,4,5);
print_r(array_map("mul", $a5));
echo '<br><br>';

#merge_recursive
$a1=array("a"=>"1","b"=>"2","c"=>"3");
$b1=array("d"=>"4","e"=>"5","f"=>"6");
print_r(array_merge_recursive($a1,$b1));
echo '<br><br>';

#multisort
$am1=array("a","c","b");
array_multisort($am1);
print_r($am1);
echo '<br><br>';

#pad
$p=array("red","green","yellow");
print_r(array_pad($p, 5, "pink"));
echo '<br><br>';

#product
$pr=array(3,3);
print_r(array_product($pr));
echo '<br><br>';

#random
$ra=array("2","3","4","1","6");
$random=array_rand($ra,4);
echo $ra[$random[0]].'<br>';
echo $ra[$random[1]].'<br>';
echo $ra[$random[2]].'<br>';
echo $ra[$random[3]];
echo '<br><br>';

#reduce
function red($v1,$v2)
{
    echo $v1."<br>";
    echo $v2."<br>";
    return $v1."-".$v2;
}
$red=array(1,2,3);
print_r(array_reduce($red, "red"));
echo '<br><br>';

#replace
$a12=array("a","b","c");
$b12=array("d","e","f");
print_r(array_replace($a12,$b12));
echo '<br><br>';

#replace recursive
$ar1=array("a"=>array("red"),"b"=>array("yellow"));
$br1=array("a"=>array("black","green"),"b"=>array("blue"));
print_r(array_replace_recursive($ar1,$br1));
echo '<br><br>';

#reverse
$rev=array("a"=>"hello","b"=>"hey","c"=>"hii");
print_r(array_reverse($rev));
echo '<br><br>';

#search
$sea=array("a"=>"hello","b"=>"hey","c"=>"hii");
print_r(array_search("hey", $sea));
echo '<br><br>';

#slice
$sli=array("hello","hey","hi");
print_r(array_slice($sli, 2));
echo '<br><br>';

#splice
$spi=array("a"=>"red","b"=>"yellow","c"=>"blue");
$spi1=array("a"=>"green","b"=>"grey");
array_splice($spi, 0,2,$spi1);
print_r($spi);
echo '<br><br>';

#sum
$sum=array(2,3,4);
print_r(array_sum($sum));
echo '<br><br>';

#udiff
function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}
$au1=array("a"=>"red","b"=>"blue","c"=>"yellow");
$au2=array("a"=>"black","b"=>"blue","c"=>"yellow");

$res=array_udiff($au1,$au2,"myfunction");
print_r($res);
echo '<br><br>';

#udiff assoc
function myfunction1($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}
$au1=array("a"=>"red","b"=>"blue","c"=>"yellow");
$au2=array("a"=>"black","h"=>"blue","c"=>"yellow");

$res= array_udiff_assoc($au1,$au2,"myfunction1");
print_r($res);
echo '<br><br>';

#udiff uassoc
function myfunction_keys($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return (($a>$b)?1:-1);
}

function myfunction_values($a,$b)
{
    if($a===$b)
    {
        return 0;
    }
    return (($a>$b)?1:-1);
}
$auk1=array("a"=>"red","b"=>"blue","c"=>"yellow");
$auk2=array("a"=>"black","b"=>"blue","i"=>"yellow");

$res= array_udiff_uassoc($auk1,$auk2,"myfunction_keys","myfunction_values");
print_r($res);
echo '<br><br>';

#uintersect
function myfunction2($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return (($a>$b)?1:-1);
}
$au3=array("a"=>"red","b"=>"blue","c"=>"yellow");
$au4=array("a"=>"black","h"=>"blue","c"=>"yellow");

$res= array_uintersect($au3,$au4,"myfunction2");
print_r($res);
echo '<br><br>';

#uintersect_assoc
function myfunction3($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return (($a>$b)?1:-1);
}
$au3=array("a"=>"red","b"=>"blue","c"=>"yellow");
$au4=array("a"=>"black","h"=>"blue","c"=>"yellow");

$res= array_uintersect_assoc($au3,$au4,"myfunction3");
print_r($res);
echo '<br><br>';

#uintersect_uassoc
function myfunction_keys1($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return (($a>$b)?1:-1);
}

function myfunction_values1($a,$b)
{
    if($a===$b)
    {
        return 0;
    }
    return (($a>$b)?1:-1);
}
$auk1=array("a"=>"red","b"=>"blue","c"=>"yellow");
$auk2=array("a"=>"black","b"=>"blue","i"=>"yellow");

$res= array_uintersect_uassoc($auk1,$auk2,"myfunction_keys1","myfunction_values1");
print_r($res);
echo '<br><br>';

#unique
$un=array("a"=>"1","b"=>"2","c"=>"1");
print_r(array_unique($un));
echo '<br><br>';

#values
$val=array("1"=>"a","2"=>"b","3"=>"c");
print_r(array_values($val));
echo '<br><br>';

#walk
function walk($a,$b)
{
    echo "The key is $a and its value is $b <br>";   
}
$walk=array("A"=>"1","B"=>"2","C"=>"3");
array_walk($walk, "walk");
echo '<br><br>';

#walk_recursive
function walk2($b,$a)
{
    echo "The key is $a and its value is $b <br>";   
}
$walk=array("A"=>"1","B"=>"2","C"=>"3");
$walk2=array($walk,"D"=>"4","E"=>"5");
array_walk_recursive($walk2, "walk2");
echo '<br><br>';

#compact
$fn="Mahi";
$ln="Kansara";
$age="18";
$disp=compact("fn","ln","age");
print_r($disp);
echo '<br><br>';

#current
$cur=array("mahi","sikki","naresh");
echo current($cur);
echo '<br><br>';

#end
$end=array("mahi","sikki","naresh");
echo current($end);
echo end($end);
echo '<br><br>';

#extract
$ex="Original";
$ex1=array("a"=>"1","b"=>"2","c"=>"3");
extract($ex1);
echo "\$a = $a; \$b = $b; \$c = $c";
echo '<br><br>';

#in array
$in=array("mahi","naresh","harsh");
if(in_array("naresh", $in))
{
    echo "yes";
}
 else {
echo "no";
}
echo '<br><br>';

#key
$key=array("mahi","naresh","harsh");
echo "The no of keys are ". key($key);
echo '<br><br>';

#list
$my_array=array("Dog","Cat","Hathi");
list($a,$b,$c)=$my_array;
echo "The list is a = $a, b = $b, c = $c";
echo '<br><br>';

#next
$next=array("Dog","Cat","Hathi");
echo current($next).'<br>';
echo next($next);
echo '<br><br>';

#prev
$pre=array("Dog","Cat","Hathi");
echo current($pre).'<br>';
echo next($pre).'<br>';
echo prev($pre);
echo '<br><br>';

#range
$num=range(0, 5);
print_r($num);
echo '<br><br>';

#reset
$re=array("Dog","Cat","Hathi");
echo current($re).'<br>';
echo next($re).'<br>';
echo reset($re);
echo '<br><br>';


#shuffle
$shu=array("Dog","Cat","Hathi");
shuffle($shu);
print_r($shu);
echo '<br><br>';

#uasort
