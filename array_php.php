<?php
/*
    Exercice split_array

    Créez une fonction qui prend en argument un tableau de nombres et une valeur 
    entière donnant la position  pour spliter le tableau en deux. 
    Si la valeur de la position est
     supérieure à la longueur du tableau, retournez le.

    Vous pouvez utiliser la fonction 
    array_shift de PHP pour dépiler le tableau.
*/
function split_array(array $number,int $pos){
    if($pos>=count($number)){
        return $number;
    }
    $array = array();
    for($i=0;$i<$pos;$i++){
        $array[$i] = array_shift($number);
    }
    return [$array, $number];
    
}
$numbers = [1,2,3,7,5, 7, 8];
$pos = 40;
var_dump(split_array($numbers, $pos));
// [1,2, 3] [7]

