<?php 
/*
 * Note: I could have done the strtolower before the removeVowels function and then set the $vowels array without the uppercase vowels but naming a function "removeVowels" and then don't remove the uppercare ones would be misleading :)
 */

function reformat(string $str) {
    $output = ucfirst(strtolower(removeVowels($str)));

    echo $output;
}

function removeVowels(string $str) {
    //what to remove
    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    //sad to see you go
    $str = str_replace($vowels, "", $str);

    return $str;
}

reformat("liMeSHArp DeveLoper TEST");