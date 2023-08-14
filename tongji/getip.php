<?php
date_default_timezone_set("Asia/Shanghai");
$showtime=date("Y-m-d H:i:s");
$fangwen = "访问者IP:";
$fangwentime = "访问时间:";
$ips = $_SERVER['REMOTE_ADDR'];
$times = gmdate("H:i:s",time()+8*3600);
$file = "ipip1.txt" ;
$fp=fopen ("ipip1.txt","a") ;
$txt= "$fangwen"."$ips"."----"."$fangwentime"."$showtime"."\n";
fputs($fp,$txt);
?>