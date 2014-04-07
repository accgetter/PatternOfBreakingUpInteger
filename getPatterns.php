<?php
$MAX_STEPS      = 3;
$TOTAL_STEPS    = 30;
$SQUARE         = (int)( $TOTAL_STEPS / $MAX_STEPS );
$FRACTION_STEPS = ( $TOTAL_STEPS % $MAX_STEPS );
$ANSWER;

$ANSWER = pow( getPattern($MAX_STEPS), $SQUARE );
if ( $FRACTION_STEPS > 0 ) {
    $ANSWER *= getPattern( $FRACTION_STEPS );
}
print_r( $ANSWER );

/* 整数の和のパターン数を返す */
function getPattern ( $n ) { 
    $a = 0;
    for ( $i = 1;  $i <= $n; $i++ ) {
        for ( $s = 1;  $s <= $n; $s++ ) {
            if ( ($n - ($i+$s)) >= 0 ) {
                if ( ($n - ($i+$s)) >= 2 ) {
                    $a += getPattern( ($n - ($i+$s)) );
                } else {
                    $a += 1;
                }
            } 
        }
    }
    return $a + 1;
}

