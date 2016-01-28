<?php
function tri_fusion ( $tab , &$ord ) {
    if( count( $tab ) <= 1 ) return;

    else {

        $tab1 = [];
        $tab2 = [];

        for( $i = 0; $i < count( $tab ); $i++) {
            if( $i < ( count( $tab ) ) / 2 )
                $tab1[] = $tab[ $i ];
            else
                $tab2[] = $tab[ $i ];
        }

        var_dump($tab1,$tab2)

        tri_fusion( $tab1, $ord);
        tri_fusion( $tab2, $ord);

        $i = 0;
        $i1 = $i2 = 0;

        while( $i1 < count( $tab1 ) && $i2 < count( $tab2 ) ) {
            if( $tab1[ $i1 ] < $tab2[ $i2 ] )
                $tab[ $i ] = $tab1[ $i1++ ];
            else
                $tab[ $i ] = $tab2[ $i2++ ];
            $i++;
        }

        while( $i1 < count( $tab1 ) ) {
            $tab[ $i ] = $tab1[ $i1++ ];
            $i++;
        }
        while( $i2 < count( $tab2 ) ) {
            $tab[ $i ] = $tab2[ $i2++ ];
            $i++;
        }
        $ord = $tab;
    }
}

function fusioner(){

}
$test = [1,3,2,8,9,6,5];
$test1 = [];
tri_fusion($test, $test1);

var_dump($test1);