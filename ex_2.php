<?php
function tri_fusion ( $tab , &$ord ) {
    if( count( $tab ) <= 1 ) return;

    else {

        $left = [];
        $right = [];

        for( $i = 0; $i < count( $tab ); $i++) {
            if( $i < ( count( $tab ) ) / 2 )
                $tab1[] = $tab[ $i ];
            else
                $tab2[] = $tab[ $i ];
        }


}

function fusioner(){

}

$test = [1,3,2,8,9,6,5];
$test1 = [];
tri_fusion($test, $test1);

var_dump($test1);