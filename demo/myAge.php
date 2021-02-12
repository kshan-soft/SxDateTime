<?php
/**
 * SteedX/SxDateTime myAge demo
 *
 * Born on 16-06-1973 03:30:09 IST Time
 * My age on 01-01-2019 03:30:09 IST
 */
@include_once(__DIR__.'/../src/SteedX/SxDateTime.php');
@include_once(__DIR__.'/displayDifference.php');

use SteedX\SxDateTime;

$dob = new SxDateTime('19730616', 'Asia/Calcutta');
$difference = $dob->difference('20210101', 'Asia/Calcutta');
echo "My age as on 01-01-2021 IST \n";
displayDifference($difference);
