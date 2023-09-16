<?php
error_reporting(0);
include_once ("jdf.php");
date_default_timezone_set('Asia/Tehran');
header('content-type:application/json;charset=utf-8');

$timep = date('H:i:s');
$time1p = strtotime($timep);
$time1p -= 3600;
$new_timep = date('H:i:s', $time1p);

$todayp = jdate('l');
$fslp = jdate('f');
$monthp = jdate('F'); 
$Animalp = jdate('q'); 
$englishdatep = date('Y/m/d'); 
$daytoyearp = jdate('z'); 
$irandatep = jdate('y/m/d'); 
$mororafterp = jdate('A'); 
$results[] = [
'time'=>$new_timep,
'irandate'=>$irandatep,
'englishdate'=>$englishdatep,
'today'=>$todayp,
'Animal'=>$Animalp,
'fsl'=>$fslp,
'month'=>$monthp,
'daytoyear'=>$daytoyearp,
'morning-or-afternon'=>$mororafterp,
'timezone'=>'Asia/Tehran'
];
$json = ['ok'=>true,'channel'=>'@devsgit','Writer '=>'Soheil | @slu000uls','results'=>$results];
echo json_encode($json,448);
?>