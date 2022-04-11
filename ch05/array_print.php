<?php
    $numbers = array(10, 20, 30, 40, 50);

    print $numbers . "<br>";
    print_r ($numbers) ; // ()를 사용해야 한다
    print "<br>";
    // array 안에 있는 방에 머가 들었는지 확인 할 수 있다

    array_push($numbers, 60, 100, 200);
    print_r($numbers);
    print "<br>";
?>