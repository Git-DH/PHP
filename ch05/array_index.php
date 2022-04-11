<?php
    $numbers = array(10, 20, 5=>30, 40);
    // 배열을 사용하는 이유는 for문을 쓰기위해서가 크다
    // 위 처럼 제대로 방 값이 설정이 안되어 있으면 for문 사용이 힘들다
    
    print_r($numbers);
    print "<br>";
    print "count : " . count($numbers) . "<br>";
    for($i=0; $i<count($numbers); $i++)
    //count는 4이기 때문에 5와 6의 값은 표시를 못 한다
    {
        print $numbers[$i] . "<br>";
    }
    print "-- 끝 --<br>";

    foreach($numbers as $key => $val)
    {
        print $key . " : " . $val . "<br>";
    }
?>