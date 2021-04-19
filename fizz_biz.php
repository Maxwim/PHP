<?Php 
/**En utilisant l'expression match de PHP implémentez 
 * l'algorithme de FizzBuzz :

Pour les nombres de 1 à 100 compris.

    Pour les multiples de 3, affichez Fizz au lieu du nombre.
    Pour les multiples de 5, affichez Buzz au lieu du nombre.
    Pour les nombres multiples de 3 et 5, affichez uniquement FizzBuzz.
*/
function FizzBuzz(){
    for($i=0;$i <= 100;$i++){
        $results[$i] = $result = match (true) {
            $i %3 == 0 => 'Fizz',
            $i %5 == 0 => 'Buzz',
            default => null,
        };
        echo $results[$i];
        
    }
    //return $results;
}
FizzBuzz();
//var_dump(FizzBuzz());
