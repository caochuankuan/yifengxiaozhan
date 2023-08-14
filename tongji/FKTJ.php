<?php
$n=file_get_contents('FKTJ.txt');
$n++;
file_put_contents('FKTJ.txt',$n);
echo "document.write($n);";
?>