<?php
function fizzbuzz($count){
    return ($count % 17=== 0) ? "fizzbuzz" : (( $count % 10 === 0 ) ? "buzz" : (($count % 5 === 0) ? "fizz" : $count ));
}

var_dump( array_map( "fizzbuzz" , range(0, 50)) );