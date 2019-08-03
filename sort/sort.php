<?php

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

$test_arr = json_decode(file_get_contents('test_arr.json'), true);

foreach ( $test_arr as $arr ) {
    $time = 0;

    # 跑 1000 次以减少误差
    for ( $i=0; $i<1000; $i++ ) {
        $tmp = $arr;

        $time_start = microtime_float();

        sort($tmp);

        $time_end = microtime_float();

        $time += ( $time_end - $time_start );
    }

    echo sprintf("array count %d, sort time: %f ms\n", count($arr), round($time * 1000, 6));
}
