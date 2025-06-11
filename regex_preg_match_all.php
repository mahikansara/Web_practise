<?php

$s1="The rain in spain mainly falls in plain";
$pattern="/ain/";
echo preg_match_all($pattern, $s1);
