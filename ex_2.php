<?php
function tri_fusion ( $tab , &$ord ) {

    $middle = count($tab) / 2;
    $left = array_slice($tab, 0, $middle);
    $right = array_slice($tab,$middle);

    $left = tri_fusion($left,$right);
    $right = tri_fusion($right,$right);

    return fusionner($left,$right);

}

function fusionner($left, $right){
    $result = [];
    while (count($left) > 0 && count($right) > 0){
            if($left[0] > $right[0] ){
                $result[] = $right[0];
                $right = array_slice($right,1);
            }else{
                $result[] = $left[0];
                $left = array_slice($left,1);
            }
    }
    while(count($left) > 0){
        $result[] = $left[0];
        $left = array_slice($left,1);
    }
    while(count($right) > 0){
        $result[] = $right[0];
        $right = array_slice($right,1);
    }
    return $result;
}

$test = [1,3,2,8,9,6,5];
$test1 = [];
tri_fusion($test, $test1);

var_dump($test1);