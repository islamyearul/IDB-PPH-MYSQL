<?php

function loop($start, $end){
    if($start > $end){
        return;
    }

    echo $start . "<br>";
    $start++;
    loop($start, $end);
}

loop(0,10);