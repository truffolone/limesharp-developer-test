<?php 

function next_binary_number(array $input) {
    $lastindex = count($input) - 1;
    $newarray = addOne($input, $lastindex);
    echo niceShow($newarray);
}

function addOne(array $arr, int $index) {
    if($arr[$index] === 0) {
        $arr[$index] = 1;
        return $arr;
    } else {
        $arr[$index] = 0;
        $preIndex = $index-1;
        if($preIndex < 0) {
            //all ones
            $newarray = array();
            $newarray[] = 1;
            for($i = 0; $i < count($arr); $i++) { //you said only for loops so...
                $newarray[] = 0;
            }
            $finalArr = $newarray;
        } else {
            $finalArr = addOne($arr, $preIndex);
        }

        return $finalArr;
    }
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

next_binary_number([1,1,1,1,1,1,1]);