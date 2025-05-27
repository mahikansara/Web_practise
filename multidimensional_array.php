<?php

$two_wheeler=array('bike','activa','cycle');
$three_wheeler=array('auto_rickshaw','three_wheel_cycle','tempo');
$four_wheeler=array('car','bus','truck');
$vehicle=array('two-wheeler'=>$two_wheeler,'three-wheeler'=>$three_wheeler,'four-wheeler'=>$four_wheeler);
echo $vehicle['two-wheeler'][0];
echo '<br>';
echo $vehicle['two-wheeler'][1];
echo '<br>';
echo $vehicle['two-wheeler'][2];
echo '<br>';
echo $vehicle['three-wheeler'][0];
echo '<br>';
echo $vehicle['three-wheeler'][1];
echo '<br>';
echo $vehicle['three-wheeler'][2];
echo '<br>';
echo $vehicle['four-wheeler'][0];
echo '<br>';
echo $vehicle['four-wheeler'][1];
echo '<br>';
echo $vehicle['four-wheeler'][2];
echo '<br>';


$mail=array('vande bharat','maal gaadi');
$express=array('ranakpur express','bikaner express');
$railways=array('mail'=>$mail,'express'=>$express);

$helicopter=array('chopper','bada heplicopter');
$aeroplane=array('air india','emirates','vistara');
$airways=array('helicopter'=>$helicopter,'aeroplane'=>$aeroplane);

$cruise=array('river','luxary');
$speedboat=array('beach speedboat','bayboat');
$waterways=array('cruise'=>$cruise,'speedboat'=>$speedboat);

$gaadi=array('thar','maruti');
$roadways=array('gaadi'=>$gaadi);

$types_of_transport=array('roadways'=>$roadways,'airways'=>$airways ,'waterways'=>$waterways,'railways'=>$railways);

echo $types_of_transport['airways']['helicopter'][1];
?>