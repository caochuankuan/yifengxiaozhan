<?php
header("cache-control:no-cache;must-revalidate");
header("Content-Type:text/html;charset=uth-8");
date_default_timezone_set("Asia/Shanghai");
echo "怎么现在才"."<br>";
$cur = date("Y年m月d日")."<br>";
echo $cur;
$cur = date("D")."<br>";
echo $cur;
$cur = date("H:i:s")."<br>";
echo $cur;
?>
