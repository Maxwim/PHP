<?php
//list très utile
list($a, $b, $c) = [1,2,3];
function increment(&$a, &$b, &$c) {
    list($a, $b, $c)= [$c,$b,$a];
}

increment ($a, $b, $c); // affichera 6


echo "a : $a, b $b, c $c" . PHP_EOL;