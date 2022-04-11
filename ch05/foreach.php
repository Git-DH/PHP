<?php
    // foreach는 주로 읽기만 할때 쓰긴한다
    // 키 값은 배열에 값만 준다면 문자열로 인식하고 배열의 순서대로 계산한다
    // 배열의 순서에 맞춰 배열을 추가해도 문자열로 인식하여 맨 뒤에 부터 추가
    
    $array = array(100, 200, 300, 400, 500);

    foreach($array as $val) // $val에 배열의 순서대로 입력해준다
    {
        print $val . "<br>";
    }
    print "------------ <br>";

    foreach($array as $key => $val) // $key 값도 구할 수 있다
    { // 변수명은 상관 없지만 위치는 맞게 줘야한다
        print $key . " : " . $val . "<br>";
    }
    print "------------ <br>";

?>