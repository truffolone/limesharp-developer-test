<?php 

function repeat(array $input) {
    $return = array();
    for($i = 0; $i < 3; $i++) {
        $return = array_merge($return, $input);
    }
    echo niceShow($return);
}

function niceShow(array $array) {
    $echo = "[";
    for($i = 0; $i < count($array); $i++) {
        if($i > 0) $echo .= ",";
        $echo .= $array[$i];
    }
    $echo .= "]";
    return $echo;
}

repeat([1,2,3]);