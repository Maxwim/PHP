<?php 
$a = 1;
function increment_static()
{
    $a = 5;
    echo $a . PHP_EOL;
    $a++;
}

increment_static();
echo $a . PHP_EOL;

