<?php
    // scope = 라이프 사이클(인생범위), 접근이 가능한가(살아있어야함)
    // req, res 요청을 답하면 사라짐

    function A()
    {
        global $n;// 한번 실행 후 사라져야 하지만 global을 주면 계속 실행된다
        $n= "A";// 지역변수 - global이 없을 경우 호출 후 실행 되고 사라짐
        $m= "A";
        print "2: $n, $m<br>";
    } //선언만 되어 있는 상태-메모리에 올라가있지 않고 문서로서만 존재

    $n = "M";// 실제로 실행되어 메모리에 들어가 있는 상태
    $m = "M";

    print "1: $n, $m<br>";
    A();// 호출된 후 사라짐, global를 주게 되면 밑의 변수와 같은 공간이 된다
    print "3: $n, $m<br>";
?>