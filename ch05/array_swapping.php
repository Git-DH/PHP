<?php
    $arr = [10, 33, 12, 8, 1, 89];
    
    // swapping 시에는 임시저장소가 필요하다

    print_r($arr);
    print "<br>";

    $temp = $arr[0]; // $arr[0]값을 임시로 옮긴다
    $arr[0] = $arr[1];
    $arr[1] = $temp;

    print_r($arr);
    print "<br>";
?>