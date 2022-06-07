<?php
    define("NAME", "홍길동");
    define("NAME2", "장보고");
    define("STAND_AGE", 25);

    //상수 const vs 리터럴 Liretal
    //값 자체가 리터럴
    //상수는 값이 한번 입력되면 바꿀 수 없는 것이다

    print NAME; // 상수선언이 된것은 변수의 $없이 사용 가능하다.
    print NAME2;
    print STAND_AGE;
    print "--------<br>";

    function fn1()
    {
        print "fn1 : " . NAME . "<br>";
        // 상수 일때는 global없이도 값을 가져 올 수 있다.
    }

    function fn2() 
    {
        define("TEST", "테스트");
    }
    // 함수에서 상수 선언이 가능하다.

    fn1();
    fn2();
?>