<?php 

function next_binary_number(array $input) {
    $lastindex = count($input) - 1;
    echo niceShow(addOne($input));
}

function addOne(array $arr) {
    $lastindex = count($arr) - 1;
    for($i = $lastindex; $i >= 0; $i--) {
        if($arr[$i] == 0) {
            $arr[$i] = 1;
            return $arr;
        } else {
            $arr[$i] = 0;
        }
    }
    //if we got here we didn't get any 0
    array_unshift($arr, 1); //I could have avoided using array_unshift building a "backup" variable before the for cycle but this way is more readable :)
    return $arr;
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

next_binary_number([1,1,0,1,0,1,1]);