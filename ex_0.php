<?php
function is_prime($nbr)
{
    if (($nbr % 2 == 0 && $nbr != 2) || $nbr < 2) return false;
    for ($i = 2; $i <= sqrt($nbr); $i++)
        if ($nbr % $i == 0)
            return false;
    return true;
}