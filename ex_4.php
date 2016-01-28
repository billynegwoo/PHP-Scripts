<?php
function decompress_str($string_to_decompress){
    $str = str_split($string_to_decompress);
    $res = '';
    for($i = 0 ; $i < count($str) ; $i++){
        if ($i % 2 == 0 || $i == 0){
            for($j = 0; $j < $str[$i] ; $j++){
                $res .= $str[$i+1];
            }
        }
    }
    return $res;
}