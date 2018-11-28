<?php
/*********************************************************
* Helpers for percentages, sums, substractions etc.
**********************************************************/

    function get_percentage($total, $number) {
        if ( $total > 0 ) {
            return round($number / ($total / 100),2);
        } else {
            return 0;
        }
    }

    function get_substraction($number1, $number2) {
        return $number1 - $number2;
    }

?>