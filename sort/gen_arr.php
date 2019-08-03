<?php

$test_count_arr = [16, 128, 500, 1024, 2048, 5000, 10000];

$test_arr = [];

foreach ( $test_count_arr as $count ) {
    $tmp = [];
    foreach ( range(1, $count) as $i ) {
        $tmp[] = rand(0, 20000);
    }
    $test_arr[] = $tmp;
}

file_put_contents('test_arr.json', json_encode($test_arr));
