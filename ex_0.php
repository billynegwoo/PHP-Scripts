<?php
function is_prime($nbr)
{
    if (($nbr % 2 == 0 && $nbr != 2) || $nbr < 2) return false;
    for ($i = 2; $i <= sqrt($nbr); $i++)
        if ($nbr % $i == 0)
            return false;
    return true;
}

class test {



}

function is_palindrome($string) {
    return $string == strrev($string);
}
$palindromes = [];

for($i = 999; $i > 900; $i--){
    for($j = 999; $j > 900; $j--) {
        for($k = 999; $k > 900 ; $k--){
            if (is_palindrome($i * $j * $k)) {
                $palindromes[] = $i . "*" . $j . "*" . $k ." = ". $i * $j * $k;
                break 3;
            }
        }
    }
};

echo $palindromes[0];
