<?php

$first = array('montu', 'bhanu');
$second = array('chintu', 'pintu');
$third = array('bittu', 'pittu');
$forth = array('chiku', 'piku');
$fifth = array('diya', 'miya');
$sixth = array('maina', 'naina');
$seventh = array('kriti', 'preeti');
$eight = array('meh', 'tu');
$ninth = array('hello', 'hey');
$tenth = array('amar', 'naresh');
$fyjc = array('harsh', 'vivek');
$syjc = array('mahi', 'sikki');

$primary = array('first' => $first, 'second' => $second, 'third' => $third, 'forth' => $forth, 'fifth' => $fifth);
$secondary = array('sixth' => $sixth, 'seventh' => $seventh, 'eight' => $eight, 'ninth' => $ninth, 'tenth' => $tenth);
$higher_secondary = array('fyjc' => $fyjc, 'syjc' => $syjc);

$students = array('primary' => $primary, 'secondary' => $secondary, 'higher_secondary' => $higher_secondary);

$english = array('e1', 'e2');
$hindi = array('h1', 'h2');
$marathi = array('m1', 'm2');
$ss = array('ss1', 'ss2');
$maths = array('mt1', 'mt2');
$science = array('sc1', 'sci2');
$accounts = array('acc1', 'acc2');
$economics = array('eco1', 'eco2');
$ocm = array('ocm1', 'ocm2');

$pri_sub = array('english' => $english, 'hindi' => $hindi, 'marathi' => $marathi);
$sec_sub = array('ss' => $ss, 'maths' => $maths, 'science' => $science);
$higher_sub = array('accounts' => $accounts, 'economics' => $economics, 'ocm' => $ocm);

$subjects = array('primary_sub' => $pri_sub, 'secondary_sub' => $sec_sub, 'higher_Sec_sub' => $higher_sub);

$principal= ['primary_principal','secondary_principal','higher_secondary_principal'];
$teaching_staff=array('teachers'=>$subjects,'principals'=>$principal);
$non_teaching_staff=array('peons','accountants');
$staff=array('teaching'=>$teaching_staff,'non-teaching'=>$non_teaching_staff);

$school=array('staff'=>$staff,'students'=>$students,'subjects'=>$subjects);

#echo $school['students']['primary']['first'][1];
#echo $school['staff']['teaching']['teachers']['primary_sub']['english'][0];
echo $school['students']['primary']['first'][0];
echo '<br>';
echo $school['students']['primary']['first'][1];
echo '<br>';
echo $school['staff']['teaching']['teachers']['primary_sub']['hindi'][1];
echo '<br>';
echo $school['staff']['teaching']['principals'][0];

?>