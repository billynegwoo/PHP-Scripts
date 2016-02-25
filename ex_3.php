<?php
function compress_str($string_to_compress)
{
    $count = 1;
    $string = str_split($string_to_compress);
    $compress_str = '';
    for ($i = 0; $i < count($string); $i++) {
            if (array_key_exists($i + 1, $string)&&$string[$i] === $string[$i + 1]) $count++;
            else {
                $compress_str .= $count . $string[$i];
                $count = 1;
            }

    }
    return $compress_str;
}